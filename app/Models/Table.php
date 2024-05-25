<?php

namespace App\Models;

use App\Enums\TableTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'code',
        'type',
        'allowed',
    ];

    
    protected $hidden = [
        
    ];

    
    protected $casts = [
        'allowed' => 'bool',
        'type' => TableTypeEnum::class,
    ];

    // ********************** relationships ********************


}
