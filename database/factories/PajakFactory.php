<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pajak>
 */
class PajakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "bulan" => rand(1,12),
            "tahun" => rand(2018, 2023),
            "jumlah" => rand(30000000,400000000)
        ];
    }
}
