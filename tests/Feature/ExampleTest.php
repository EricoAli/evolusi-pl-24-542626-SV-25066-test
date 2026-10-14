<?php

test('dashboard page is accessible', function () {
    $response = $this->get('/');

    $response->assertStatus(500);
    $response->assertSee('Evolusi Pemrograman Lanjut');
    $response->assertSee('Project Dashboard');
});
