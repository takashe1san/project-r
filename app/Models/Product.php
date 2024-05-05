<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    
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

    // ********************** relationships ********************

    public function category() {
        return $this->belongsTo(Category::class);
    }

}
