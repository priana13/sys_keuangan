<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kas>
 */
class KasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $types = ["Cash", "Bank"];
        $kas = ["Mandiri", "BNI", "BCA", "Cash"];

        return [
            'type' => $types[rand(0,1)],
            "nama" => $kas[rand(0,3)],
            "no_rek" => random_int(10000,30000000),
            'atas_nama' => fake()->name()
        ];
    }
}
