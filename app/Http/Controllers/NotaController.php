<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;
use App\Alumno;
use App\Comision;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Materia;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::all();

        return view('notas.index', compact('notas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notasPorComision = DB::table('alumno_comision')
            ->join('alumnos', 'alumnos.id', '=', 'alumno_comision.alumno_id')
            ->join('comisiones', 'comisiones.id', '=', 'alumno_comision.comision_id')
            ->join('materias', 'comisiones.materia_id', '=', 'comisiones.materia_id')
            ->select('alumno_comision.*', 'alumnos.*', 'comisiones.*', 'materias.*')
            ->where('alumno_comision.comision_id', '=', $id)
            // ->toSql();
            ->get();

        return view('notas.show', compact('notasPorComision', 'materiaPorNota'));
    }


    /**
     * Show the form for creating a new resource.
     * El alumno necesita estar inscripto en una comisión para tener nota
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $alumnosHabilitados = DB::table('alumno_comision')
            ->join('alumnos', 'alumnos.id', '=', 'alumno_comision.alumno_id')

            ->select('*')

            ->distinct('alumno_id')
            ->where('condicion', '=', 1)
            ->get();

            $comision_id = explode("/", \Request::getRequestUri());
            $comision_index = sizeof($comision_id) -1; 
            $comision_seleccionada = $comision_id[$comision_index];

        return view('notas.create', compact('alumnosHabilitados', 'comision_seleccionada'));
    }
}
