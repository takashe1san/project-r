<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
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
            $order->user_id = auth()->id();
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

    // ********************** relationships ********************

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function owner() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
