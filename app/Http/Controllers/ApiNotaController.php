<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;
use App\{Alumno,Comision};
use Illuminate\Support\Facades\DB;

class ApiNotaController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nota = Nota::all();

        return response()->json($nota, 200);
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // existe el alumno en la tabla alumnos?
            $alumno = Alumno::findOrFail($request->alumno_id);

            // existe la comision en la tabla comision? 
            $comision = Comision::findOrFail($request->comision_id);

            $validatedData = [];

            $validatedData = $request->validate([
                'nota' => 'required|between:1,10'
            ]);

            $nota = Nota::create($request->all());

            return response()->json($nota, 201);
        } catch (ModelNotFoundException $e) {
            // dd(get_class_methods($e)); // lists all available methods for exception object
            $error = [
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ];
            return response()->json($error, 404);
        }
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

            return response()->json($notasPorComision, 200);
    }


}
