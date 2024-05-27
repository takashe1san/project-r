<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();
        static::creating(function (Order $order) {
            $order->status = OrderStatusEnum::PENDING->value;
            if(auth()->check()) {
                $order->user_id = auth()->id();
                $order->inplace = false;
            } else {
                $order->inplace = true;
            }

        });
    }

    protected $fillable = [
        'address',
        'status',
        'cancelation_notes',
        'rejection_notes',
        'notes',
        'user_id',
    ];


    protected $hidden = [];


    protected $casts = [];

    protected $appends = [
        'total',
        'status_details',
    ];

    public function getTotalAttribute()
    {
        $total = $this->items()->sum('total_price');
        return $total;
    }

    public function getStatusDetailsAttribute()
    {
        switch ($this->status) {
            case OrderStatusEnum::PENDING->value:
                return [
                    'color' => 'secondary',
                    'value' => 'معلق',
                ];
                break;

            case OrderStatusEnum::PREPARING->value:
                return [
                    'color' => 'primary',
                    'value' => 'يتم تجهيزه',
                ];
                break;
            case OrderStatusEnum::ONTHEWAY->value:
                return [
                    'color' => 'info',
                    'value' => 'في الطريق',
                ];
                break;
            case OrderStatusEnum::COMPLATED->value:
                return [
                    'color' => 'success',
                    'value' => 'مكتمل',
                ];
                break;
            case OrderStatusEnum::CANCELED->value:
                return [
                    'color' => 'danger',
                    'value' => 'ملغِ',
                ];
                break;
            case OrderStatusEnum::REJECTED->value:
                return [
                    'color' => 'dark',
                    'value' => 'مرفوض',
                ];
                break;

            default:
                # code...
                break;
        }
    }

    public function takeItemsFromCart()
    {
        $cart = Cart::userCart();

        if ($cart->count() < 1) throw new \Exception('empty cart');

        foreach ($cart as $cartItem) {
            $item = $cartItem->toArray();
            unset($item['user_id'], $item['id']);
            $item['order_id'] = $this->id;
            $orderItem = new OrderItem($item);
            if (!$orderItem->save()) {
                throw new \Exception('failed to save order item ' . $item['name']);
            }
            $cartItem->delete();
        }
    }

    public function takeItemsFromSession() 
    {
        $cart = session()->get('cart');
        if (!isset($cart)) $cart = [];
        if (empty($cart)) throw new \Exception('empty cart');
        
        foreach ($cart as $id => $cartItem) {
            unset($cartItem['product']);
            $cartItem['product_id'] = $id;
            $cartItem['order_id'] = $this->id;
            $orderItem = new OrderItem($cartItem);
            if(!$orderItem->save())  throw new \Exception('failed to save order item ' . $cartItem[$id]);
            unset($cart[$id]);
        }
        session(['cart' => $cart]);
    }

    public function reject($rejectionNotes)
    {
        $this->status = OrderStatusEnum::REJECTED->value;
        $this->rejection_notes = $rejectionNotes;
        return ($this->save());
    }

    public function complate()
    {
        if($this->user_id != auth()->id()) return false;
        $this->status = OrderStatusEnum::COMPLATED->value;
        return ($this->save());
    }

    // ********************** relationships ********************

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
