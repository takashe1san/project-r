<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public static function boot() {
        parent::boot();
        static::creating(function (Cart $cart){
            $cart->total_price = $cart->product->getPrice() * $cart->quantity;
        });
        static::updating(function (Cart $cart){
            $cart->total_price = $cart->product->getPrice() * $cart->quantity;
        });
    }

    protected $table = 'cart_items';
    
    protected $fillable = [
        'quantity',
        'total_price',
        'product_id',
        'user_id'
    ];

    
    protected $hidden = [
        
    ];

    
    protected $casts = [
        
    ];

    // ********************** relationships ********************
    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function owner() {
        return $this->belongsTo(User::class);
    }

}
