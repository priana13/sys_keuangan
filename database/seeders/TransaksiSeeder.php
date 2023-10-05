<?php

namespace Database\Seeders;

use App\Models\Kas;
use App\Models\Kategori;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bulan = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];

        foreach ($bulan as $bln) { 

            for ($i=0; $i < 20; $i++) { 

                $kategori = Kategori::find(rand(1,8));
                $kas = Kas::find(rand(1,5));
    
                if($kategori->type == 'Pengeluaran'){
    
                    $nominal = rand(10000, 40000);
    
                }else $nominal = rand(100000, 400000);
                
    
                Transaksi::create([
                    'tanggal' => date('2023-' . $bln . '-d'),
                    'type' => $kategori->type,
                    'nominal' => $nominal,
                    'keterangan' => fake()->text(10),
                    'kategori_id' => $kategori->id,
                    'user_id' => 1,
                    'kas_id' => $kas->id,
                    'metode_bayar' => $kas->type
                ]);
                
            }


           
            
        }      
     

    }
}
