<?php

use App\Models\User;

test('Halaman pengaturan dapat diakses', function () {

    $user = User::factory()->create();   

    $response = $this->actingAs($user)->get('/pengaturan');

    $response->assertStatus(200);
})->group('render');