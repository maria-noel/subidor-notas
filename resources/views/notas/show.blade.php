@extends('layouts.layout')

@section('title', 'Calificaciones')
@section('content')

<div class="card-header card-header-primary">
    <div class="row">
        <div class="col-md-10">
            <h4 class="card-title ">Listado de Calificaciones </h4>
            <p class="card-category"> Filtrado por comisión</p>
        </div>
        <div class="col-md-2">
            <div class="card-header card-header-danger">
                <a href="/notas/create/{{$notasPorComision[0]->comision_id}}"><h4 class="card-title">Nueva nota</h4></a>
            </div>
        </div>
    </div>

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
                        {{ $nota->condicion === 1 ? 'Regular' : 'Libre'}}
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