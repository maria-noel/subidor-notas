<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;
use App\Alumno;
use App\Comision;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

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

        } catch(ModelNotFoundException $e) {
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
        ->select('alumno_comision.*', 'alumnos.*', 'comisiones.*')
        ->where('alumno_comision.comision_id', '=', $id)
        ->get();

        return view('notas.show', compact('notasPorComision'));
        
    }


    /**
     * Show the form for creating a new resource.
     * El alumno necesita estar inscripto en una comisión para tener nota, por defecto viene en null
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $alumnoComision = Nota::all();
        $alumnosHabilitados = DB::table('alumno_comision')
        ->where('condicion', '=', 1)
        ->get();
        return view('notas.create', compact('alumnosHabilitados'));
    }


    
}
