<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "id" => 1,
                "nama" => "1 Tahun",
                "price_1" => 600000,               
                "kapasitas" => 12
            ],
            [
                "id" => 2,
                "nama" => "6 Bulan",
                "price_1" => 300000,
                "kapasitas" => 6
                
            ],
            [
                "id" => 3,
                "nama" => "3 Bulan",
                "price_1" => 150000,  
                "kapasitas" => 3              
            ], 
            [
                "id" => 4,
                "nama" => "1 Bulan",
                "price_1" => 50000,   
                "kapasitas" => 1             
            ]

        ];

        foreach ($products as $product) {

            Product::create([
                "nama_produk" => $product["nama"],
                "harga" => $product['price_1'],
                "kapasitas" => $product['kapasitas'],
                "disc" => 10             
            ]);
        }
    }
}
