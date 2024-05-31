<?php

namespace Database\Seeders;

use App\Models\PaketBerlangganan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketBerlanggananSeeder extends Seeder
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
                "price_1" => 300000,               
                "kapasitas" => 12,
                "disc" => 30
            ],
            [
                "id" => 2,
                "nama" => "6 Bulan",
                "price_1" => 150000,
                "kapasitas" => 6,
                "disc" => 20
                
            ],
            [
                "id" => 3,
                "nama" => "3 Bulan",
                "price_1" => 75000,  
                "kapasitas" => 3,
                "disc" => 15          
            ], 
            [
                "id" => 4,
                "nama" => "1 Bulan",
                "price_1" => 25000,   
                "kapasitas" => 1,
                "disc" => 10        
            ]

        ];

        foreach ($products as $product) {

            PaketBerlangganan::create([
                "nama_produk" => $product["nama"],
                "harga" => $product['price_1'],
                "kapasitas" => $product['kapasitas'],
                "disc" => $product['disc']             
            ]);
        }
    }
}
