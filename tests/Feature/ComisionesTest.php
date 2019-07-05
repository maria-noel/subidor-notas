<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ComisionesTest extends TestCase
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

    public function test_el_usuario_puede_ver_la_vista_de_comisiones()
    {
        $response = $this->get('comisiones');
        $response->assertStatus(200);
    }

    public function test_el_usuario_puede_ver_la_lista_de_comisiones()
    {
        $response = $this->get('comisiones');
        $response->assertStatus(200);
    }
}
