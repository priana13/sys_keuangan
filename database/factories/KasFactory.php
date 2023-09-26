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

        // $table->enum('type', ["cash", "bank"])->default('cash'); // cash / bank
        // $table->string('nama');
        // $table->string("bank")->nullable();
        // $table->string('no_rek')->nullable();
        // $table->string('atas_nama')->nullable();

        $types = ["cash", "bank"];

        return [
            'type' => $types[rand(0,1)],
            "nama" => fake()->text(5),
            "no_rek" => random_int(10000,30000000),
            'atas_nama' => fake()->name()
        ];
    }
}
