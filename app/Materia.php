<?php

namespace App;
use App\Comision;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function comision(){
        return $this->belongsTo(Comision::class);
    }
}
