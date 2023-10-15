<?php

use App\Models\User;


test('Halaman pengeluaran dapat diakses', function () {

    $user = User::factory()->create();   

    $response = $this->actingAs($user)->get('/pengeluaran');

    $response->assertStatus(200);
})->group('render');