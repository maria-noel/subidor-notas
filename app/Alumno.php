<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function comisiones()
    {
        
        return $this->belongsToMany('App\Comision');
    }

}
