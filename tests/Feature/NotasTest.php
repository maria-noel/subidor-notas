<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_muestra_pagina_de_notas()
    {
        $response = $this->get('notas') ;
        $response->assertSeeText('Notas');
        $response->assertStatus(200);
    
    }

    
}
