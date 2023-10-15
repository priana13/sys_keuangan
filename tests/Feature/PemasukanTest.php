<?php

use App\Models\User;

test('Halaman pemasukan dapat diakses', function () {

    $user = User::factory()->create();   

    $response = $this->actingAs($user)->get('/pemasukan');

    $response->assertStatus(200);

})->group('render');