<?php

use App\Models\User;


test('Halaman laporan dapat diakses oleh Administrator', function () {

    $user = User::factory()->create([
        "type" => "Administrator"
    ]);   

    $response = $this->actingAs($user)->get('/laporan');

    $response->assertStatus(200);
    
})->group('render');

test('Halaman laporan tidak dapat diakses oleh Kasir', function () {

    $user = User::factory()->create([
        "type" => "Kasir"
    ]);   

    $response = $this->actingAs($user)->get('/laporan');

    $response->assertStatus(403);
    
})->group('render');