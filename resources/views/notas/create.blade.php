@extends('layouts.layout')

@section('title', 'Cargar nota')

@section('content')

<div class="card-header card-header-primary">
  <h4 class="card-title ">Carga de notas</h4>
  <p class="card-category"> Alumnos</p>
</div>
<div class="card-body">
  {{ Form::open(array('url' => 'api/notas/store', 'method' => 'put')) }}
  @foreach($alumnosHabilitados as $habilitados)

  <div class="row">
    <!-- <div class="col-md-5">
      <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Company (disabled)</label>
        <input type="text" class="form-control" disabled="">
      </div>
    </div> -->
    <div class="col-md-3">
      <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Comisión</label>
        <select class="form-control selectpicker" data-style="btn btn-link" id="">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Email address</label>
        <input type="email" class="form-control">
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-6">
      <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Fist Name</label>
        <input type="text" class="form-control">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Last Name</label>
        <input type="text" class="form-control">
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
  @endforeach
  {!! Form::close() !!}
</div>

@stop