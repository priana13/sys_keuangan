<?php

use App\Models\User;


test('Halaman nota bon dapat diakses', function () {

    $user = User::factory()->create();   

    $response = $this->actingAs($user)->get('/nota-bon');

    $response->assertStatus(200);
    
})->group('render');