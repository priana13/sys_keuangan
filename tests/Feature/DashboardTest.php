<?php

use App\Models\User;

test('Halaman dashboard dapat diakses ole administrator', function () {

    $user = User::factory()->create([
        "type" => "Administrator"
    ]);   

    $response = $this->actingAs($user)->get('/dashboard');

    $response->assertStatus(200);
})->group('render');;

test('Halaman dashboard tidak dapat diakses oleh kasir', function () {

    $user = User::factory()->create([
        "type" => "Kasir"
    ]);   

    $response = $this->actingAs($user)->get('/dashboard');

    $response->assertStatus(302);
});
