<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comision;

class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comisiones = Comision::all();

        return view('comisiones.index', compact('comisiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comision = Comision::create($request->all());
        return response()->json($comision, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comision = Comision::findOrFail($id);
        return view('comisiones.show', compact('comision', $comision));
    }

    
}
