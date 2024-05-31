<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketBerlangganan extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'paket_berlangganan';

    public static function getProduct(){

        
    }
}
