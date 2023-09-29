<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NotaBon>
 */
class NotaBonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {       

        return [
            'tanggal' => fake()->date(),
            'nama_suplier' => fake()->name(), 
            'total' => rand(200000,500000),
            'status' => fake()->randomElement(["Sudah Bayar", "Belum Bayar"])
        ];
    }
}
