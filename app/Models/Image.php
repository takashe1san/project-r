<?php

namespace App\Models;

use App\Traits\SaveImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory, SaveImage;

    public static function boot()
    {
        parent::boot();
        static::deleting(function (Image $image){
            $image->deleteFile($image->image);
        });
    }
    
    protected $fillable = [
        'image',
    ];

    
    protected $hidden = [
        
    ];

    
    protected $casts = [
        
    ];

    // ********************** relationships ********************


}
