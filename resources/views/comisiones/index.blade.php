@extends('layouts.layout')

@section('title', 'Comisiones')

@section('content')
<div class="card-header card-header-primary">
    <h4 class="card-title ">Listado de Comisiones</h4>
    <p class="card-category"> Se listan todas las comisiones existentes; para <strong>agregar </strong> una nota elegir el id de comisión</p>
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
                @foreach($comisiones as $comision)
                <tr>
                    <td>
                    <a href="notas/{{ $comision->id }}"> {{ $comision->id}}</a>
                    </td>
                    <td>
                        {{ $comision->turno}}
                    </td>
                    <td>
                        {{ $comision->semestre}}
                    </td>
                    <td>
                        {{ $comision->anio}}
                    </td>
                    <td>

                        {{ $comision->facultad->nombre }}
                    </td>
                    <td>

                        {{ $comision->carrera->nombre}}
                    </td>
                    <td>

                        {{ $comision->materias[0]->nombre }}
                    </td>
                    <td>

                        {{ $comision->catedra->nombre}}
                    </td>
                </tr>


                @endforeach
            </tbody>
        </table>
    </div>
</div> 
@stop