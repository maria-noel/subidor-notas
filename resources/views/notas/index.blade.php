@extends('layouts.layout')

@section('title', 'Todas las notas')


@section('content')
<div class="card-header card-header-primary">
    <h4 class="card-title ">Listado de notas de alumnos</h4>
    <p class="card-category"> Alumnos por comision</p>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table">

            <thead class="text-primary">
                <tr>
                    <td>Comision</td>
                    <td>Alumno</td>
                    <td>Nota</td>
                    <td>Condición </td>
                </tr>
            </thead>
            <tbody>
                @foreach($notas as $nota)

                <tr>
                    <td>
                        <a href="/comisiones/{{ $nota->comision->id }}"> {{ $nota->comision->id }}</a>
                    </td>
                    <td>
                        {{ $nota->alumno->nombre }}
                    </td>
                    <td>
                        {{ $nota->nota }} 

                    </td>
                    <td>
                        {{ $nota->condicion === 0 ? 'Regular' : 'Libre' }}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@stop