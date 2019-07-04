<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Comision;

class ComisionTest extends TestCase
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

    public function test_can_create_comision() {
        $data = [
            'turno' => $this->faker->randomElement(['M', 'T', 'N']),
            'semestre' => 1,
            'anio' => 3,
            'facultad_id' => 5,
            'carrera_id' => 3,
            'materia_id' => 5,
            'catedra_id' => 9,
        ];
        $this->post(route('comision.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_can_show_one_comision() {
        $comision = factory(Comision::class)->create();
        $this->get(route('comision.show', $comision->id))
            ->assertStatus(200);
    }

/*
    public function test_can_list_comisiones() {
        $comision = factory(Comision::class, 2)->create()->map(function ($comision) {
            return $comision->only(['id', 'turno', 'semestre']);
        });
        
        $this->get(route('comision'))
            ->assertStatus(200)
            ->assertJson($comision->toArray())
            ->assertJsonStructure([
                '*' => [ 'id', 'turno', 'semestre' ],
            ]);
    }
    */
}
