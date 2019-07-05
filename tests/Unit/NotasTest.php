<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotasTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_can_create_nota() {
        $data = [
            'nota' => $this->faker->numberBetween(1,10),
            'condicion' => $this->faker->boolean(),
            'comision_id' => 21,
            'alumno_id' => 2
        ];

        $this->post(route('nota.store'), $data)        
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_no_crea_nota_si_no_existe_la_comision_o_el_alumno() {
        $data = [
            'nota' => $this->faker->numberBetween(1,10),
            'condicion' => $this->faker->boolean(),
            'comision_id' => 10,
            'alumno_id' => 222
        ];
        $errors = [
            'code' => 0
        ];

        $this->post(route('nota.store'), $data)        
            ->assertStatus(404)
            ->assertJson($errors)
            ;
    }

    public function test_can_list_notas() {
        $this->markTestIncomplete('@todo');
    }
}
