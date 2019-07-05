<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'alumno_comision';

    protected $fillable = [
        'nota',
        'condicion',
        'alumno_id',
        'comision_id'
    ];
    
}
