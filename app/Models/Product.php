<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getProduct(){

        return [
            [
                "id" => 1,
                "nama" => "1 Tahun",
                "price_1" => 600000,
                "price_2" => 500000
            ],
            [
                "id" => 2,
                "nama" => "6 Bulan",
                "price_1" => 300000,
                "price_2" => 250000
            ],
            [
                "id" => 3,
                "nama" => "3 Bulan",
                "price_1" => 150000,
                "price_2" => 130000
            ], 
            [
                "id" => 4,
                "nama" => "1 Bulan",
                "price_1" => 50000,
                "price_2" => 30000
            ]

        ];
    }
}
