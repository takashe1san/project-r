<?php

namespace App\Models;

use App\Traits\FileManager;
use App\Traits\SaveImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, SaveImage;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        
    ];

    protected $appends = [
        'products_count',
    ];

    public function getProductsCountAttribute(){
        return $this->products()->count();
    }

    // ********************** relationships ********************

    public function products() {
        return $this->hasMany(Product::class);
    }
    
}
