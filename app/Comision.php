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


    public function materias()
    {
        return $this->hasMany(Materia::class, 'id', 'materia_id', 'materia')    ;
    }

    public function facultad()
    {
        return $this->hasOne('App\Facultad', 'id', 'facultad_id', 'facultad');
    }

    public function carrera()
    {
        return $this->hasOne(Carrera::class, 'id', 'carrera_id')    ;

    }

    public function catedra()
    {
        return $this->hasOne('App\Catedra', 'id', 'catedra_id');
    }


}
