@extends('layouts.app')

@section('title','Editar Mascota')

@section('content')

<!-- ver mascota --> 
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

        <label for=""><b class="decoration-black">Datos de la mascota</b></label>
        <br>
        <label for="">Nombre: <b class="decoration-black">{{ $mascota->name}}</b></label>
        <br>
        <label for="">Su casa: <b class="decoration-black">{{ $mascota->calleynum}}</b></label>
        <br>
        <label for="">enfermedades: <b class="decoration-black">{{ $mascota->enfermedades}}</b></label>
        <br>
        <label for="">medicamentos: <b class="decoration-black">{{ $mascota->medicamentos}}</b></label>
        <br>
        <label for="">Fecha de nacimiento: <b class="decoration-black">{{ $mascota->fec_nac}}</b></label>
        
        <br>
        <br>
        <label for=""><b class="decoration-black">Datos del Dueño</b></label>
        <br>
        <label for="">Nombre: <b class="decoration-black">{{ $dueño->name}}</b></label>
        <br>
        <label for="">localidad: <b class="decoration-black">{{ $dueño->localidad}}</b></label>
        <br>
        <label for="">telefono: <b class="decoration-black">{{ $dueño->telefono}}</b></label>
        <br>
        
       
</div>
<!--fin ver mascota -->

@endsection