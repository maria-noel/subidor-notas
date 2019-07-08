@extends('layouts.layout')

@section('title', 'Cargar nota')

@section('content')

<div class="card-header card-header-primary">
  <h4 class="card-title ">Carga de notas</h4>
  <p class="card-category"> Alumnos</p>
</div>
<div class="card-body">
  {{ Form::open(array('url' => '/api/nota', 'method' => 'post')) }}

  <div class="col-md-6">

    <div class="row">
      <div class="form-group ">
        <label class="bmd-label-floating">Id Comisión</label>
        <input name="comision_id" type="text" class="form-control disabled"  readonly value="{{$alumnosHabilitados[0]->comision_id}}" >
      </div>
    </div>

    <div class="row">
      <div class="form-group ">
        <label class="bmd-label-floating" for="alumno">Alumno</label>
        <select class="form-control selectpicker" data-style="btn btn-link" id="alumno" name="alumno_id">
          @foreach($alumnosHabilitados as $habilitados)
          <option value="{{$habilitados->alumno_id}}">{{$habilitados->nombre}}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="row">
      <div class="form-group ">
        <label class="bmd-label-floating">Nota</label>
        <input type="text" class="form-control" name="nota">
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

@stop