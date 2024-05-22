<?php

namespace App\Models;

use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public static function boot() {
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

    
    protected $hidden = [
        
    ];

    
    protected $casts = [
        
    ];

    public function takeItemsFromCart(){
        $cart = Cart::userCart();

        if($cart->count() < 1) throw new \Exception('empty cart');

        foreach ($cart as $cartItem) {
            $item = $cartItem->toArray();
            unset($item['user_id'], $item['id']);
            $item['order_id'] = $this->id;
            $orderItem = new OrderItem($item);
            if(!$orderItem->save()) {
                throw new \Exception('failed to save order item ' . $item['name']);
            }
            $cartItem->delete();
        }
    }

    // ********************** relationships ********************

    public function items(){
        return $this->hasMany(OrderItem::class);
    }
}
