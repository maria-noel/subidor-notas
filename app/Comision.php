<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    protected $table = 'comisiones';
    
    protected $fillable = [
        'turno',
        'semestre',
        'anio',
        'facultad_id',
        'carrera_id',
        'materia_id',
        'catedra_id'
    ];
}