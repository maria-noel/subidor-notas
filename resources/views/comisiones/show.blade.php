@extends('layouts.layout')

@section('title', 'Comisiones')

@section('content')
<div class="card-header card-header-primary">
    <h4 class="card-title ">Listado de comisiones </h4>
    <p class="card-category"> </p>
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
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="/notas/{{ $comision->id }}"> {{ $comision->id}} </a></td>
                    <td>{{ $comision->turno}}</td>
                    <td>{{ $comision->semestre }}</td>
                    <td>{{ $comision->anio }}</td>
                    <td>{{ $comision->facultad->nombre }}</td>
                    <td>{{ $comision->carrera->nombre }}</td>
                    <td>{{ $comision->materia[0] }}</td>
                    <td>{{ $comision->catedra->nombre }}</td>
                    <td><a href="/notas/{{ $comision->id }}">Ver Notas </a></td>
                </tr>


            </tbody>
        </table>
    </div>
</div>
@stop