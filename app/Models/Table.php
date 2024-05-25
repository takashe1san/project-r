<?php

namespace App\Models;

use App\Enums\TableTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

    protected $appends = [
        'QR'
    ];

    public function getQRAttribute(){
        $code = QrCode::size(50)->generate(route('home', ['table' => $this->id]));
        return $code;
    }

    // ********************** relationships ********************


}
