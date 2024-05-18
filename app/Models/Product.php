<?php

namespace App\Models;

use App\Traits\SaveImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, SaveImage;

    
    protected $fillable = [
        'name',
        'discription',
        'image',
        'price',
        'discount_percent',
        'TVA',
        'notes',
        'category_id',
    ];

    
    protected $hidden = [
        
    ];

    
    protected $casts = [
        
    ];

    protected $appends = [
        'discounted_price',
    ];

    public function getDiscountedPriceAttribute() {
        $discounted_price = ($this->hasDiscount()) ? $this->calculateDiscount() : null;
        return $discounted_price;
    }

    public function hasDiscount() : bool {
        return (!is_null($this->discount_percent));
    }

    private function calculateDiscount() {
        $discounted_price = $this->price - ($this->price / 100 * $this->discount_percent);
        return $discounted_price;
    }

    public function getPrice() {
        $finalPrice = ($this->hasDiscount()) ? $this->discounted_price : $this->price;
        return $finalPrice;
    }

    // ********************** relationships ********************

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
