@extends('layouts.layout')

@section('title', 'Calificaciones')
@section('content')

<div class="card-header card-header-primary">
    <h4 class="card-title ">Listado de Calificaciones </h4>
    <p class="card-category"> Según la comisión</p>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table">

            <thead class="text-primary">
                <tr>
                    <td>Id comisión</td>
                    <td>Alumno</td>
                    <td>Condición</td>
                    <td>Nota</td>
                </tr>
            </thead>
            <tbody>
                @foreach($notasPorComision as $nota)
                <tr>
                    <td>
                        {{ $nota->comision_id}}
                    </td>
                    <td>
                        {{ $nota->nombre}}
                    </td>
                    <td>
                        {{ $nota->condicion}}
                    </td>
                    <td>
                        {{ $nota->nota}}

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@stop