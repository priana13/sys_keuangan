<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'type' => 'Administrator'
        ]);

        // \App\Models\Kategori::factory(5)->create();
        $this->call([
            KategoriSeeder::class,
        ]);
        
        \App\Models\Kas::factory(5)->create();
        \App\Models\Transaksi::factory(100)->create();
        \App\Models\NotaBon::factory(10)->create();
        \App\Models\Pajak::factory(30)->create();


    }
}