<?php

namespace Database\Factories;

use App\Models\Kas;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // $table->date('tanggal');
        // $table->string('type');
        // $table->integer('nominal');
        // $table->string('kegerangan');
        // $table->unsignedBigInteger('kategori_id');
        // $table->unsignedBigInteger('user_id');
        // $table->unsignedBigInteger('kas_id');
        // $table->enum('metode_bayar', ['cash', 'bank']); // cash, bank

        $kategori = Kategori::find(rand(1,7));
        $kas = Kas::find(rand(1,5));

        if($kategori->type == 'Pengeluaran'){

            $nominal = rand(10000, 40000);

        }else $nominal = rand(100000, 400000);
        
                
        return [
            'tanggal' => fake()->date(),
            'type' => $kategori->type,
            'nominal' => $nominal,
            'keterangan' => fake()->text(10),
            'kategori_id' => $kategori->id,
            'user_id' => 1,
            'kas_id' => $kas->id,
            'metode_bayar' => $kas->type
        ];
    }
}
