<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategori Pengeluaran
        foreach(["Bar & Kichen","Operasional","Asset", "Band","Komisi Supir"] as $row){

            Kategori::create([
                "nama" => $row,
                "type" => "Pengeluaran"
            ]);
            
        }

        // Kategori Pemasukan
        foreach(["Penjualan","Investasi"] as $row){

            Kategori::create([
                "nama" => $row,
                "type" => "Pemasukan"
            ]);
            
        }


    }
}
