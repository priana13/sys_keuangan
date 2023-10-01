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
        $bulan = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
        return [
            "bulan" => $bulan[rand(0,11)],
            "tahun" => rand(2018, 2023),
            "jumlah" => rand(30000000,400000000)
        ];
    }
}
