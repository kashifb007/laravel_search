<?php

test('no query validation error', function () {
    $response = $this->post('/ajaxSearchVue', [
        'query' => null,
        'sort' => 'asc',
        'offSet' => 0,
    ]);

    $response->assertStatus(422); // validation failed
});
