<?php

use App\Models\User;


test('Halaman pajak dapat diakses', function () {

    $user = User::factory()->create();   

    $response = $this->actingAs($user)->get('/pajak');

    $response->assertStatus(200);
    
})->group('render');