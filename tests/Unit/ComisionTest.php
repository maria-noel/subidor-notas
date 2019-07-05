<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Comision;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ComisionTest extends TestCase
{
    use DatabaseTransactions;

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
        $comision = factory(Comision::class)->create([
            'turno' => $this->faker->randomElement(['M', 'T', 'N']),
            'semestre' => 2,
            'anio' => 3,
            'facultad_id' => 5,
            'carrera_id' => 3,
            'materia_id' => 5,
            'catedra_id' => 9
        ]);

        $this->get(route('comision.show', $comision->id))
            ->assertStatus(200);
    }
}
