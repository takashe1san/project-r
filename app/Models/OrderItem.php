<?php

namespace App\Models;

use App\Traits\FilterableByDates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory, FilterableByDates;

    
    protected $fillable = [
        'quantity',
        'total_price',
        'product_id',
        'order_id'
    ];

    
    protected $hidden = [
        
    ];

    
    protected $casts = [
        
    ];

    // ********************** relationships ********************
    public function product() {
        return $this->belongsTo(Product::class);
    }

}
