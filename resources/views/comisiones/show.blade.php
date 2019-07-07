@extends('layouts.layout')

@section('title', 'Comisiones')

@section('content')
<div class="card-header card-header-primary">
    <h4 class="card-title ">Alumnos por comisión </h4>
    <p class="card-category"> Se listan todos los alumnos de una comisión</p>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table">

            <thead class="text-primary">
                <tr>
                    <td>Id comisión</td>
                    <td>Turno</td>
                    <td>Semestre</td>
                    <td>Año</td>
                    <td>Facultad</td>
                    <td>Carrera</td>
                    <td>Materia</td>
                    <td>Catedra</td>
                </tr>
            </thead>
            <tbody>

            {{ $comision->id}}
            {{ $comision}}
            

            </tbody>
        </table>
    </div>
</div> 
@stop