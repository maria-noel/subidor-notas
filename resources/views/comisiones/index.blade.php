        @extends('layouts.layout')

        @section('title', 'Page Title')

        @section('sidebar')
        @parent

        <p>This is appended to the master sidebar.</p>
        @stop

        @section('content')
        @foreach($comisiones as $comision)

        {{ dd($comision->materias[0]->nombre) }}
        @endforeach
        <p>This is my body content.</p>
        @stop