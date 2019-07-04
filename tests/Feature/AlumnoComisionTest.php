<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlumnoComisionTest extends TestCase
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

    public function test_can_create_nota() {
        $data = [
            'nota' => $this->faker->numberBetween(1,10),
            'condicion' => $this->faker->boolean(),
            'comision_id' => 10,
            'alumno_id' => 2
        ];

        $this->post(route('nota.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }
}
