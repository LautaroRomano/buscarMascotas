@extends('layouts.app')

@section('title','Ver mascota')

@section('content')
<!-- ver mascota -->
<div class="backgr" style="background-image: linear-gradient(to bottom, rgba(18,42, 66, .65), rgba(18,42, 66, .65)), url( {{ $mascota->fotourl }} )">
        <div class="vm-container">
                <label for="" class="vm-title"><b class="vm-title">Nombre: {{ $mascota->name}}</b></label>
                <br>
                <img src="{{$mascota->fotourl}}" class="vm-img">
                <br>
                <div class="grid grid-cols-2 gap-2 grid-custom">

                        <label for="" class="vm-datos">Su casa: <br><b class="mascota-item">{{ $mascota->calleynum}}</b></label>

                        <label for="" class="vm-datos">enfermedades: <br><b class="">{{ $mascota->enfermedades}}</b></label>

                        <label for="" class="vm-datos">medicamentos: <br><b class="">{{ $mascota->medicamentos}}</b></label>

                        <label for="" class="vm-datos">Fecha de nacimiento: <br><b class="">{{ $mascota->fec_nac}}</b></label>
                </div>
                <label for="" class="vm-title"><b class="">Datos del Dueño</b></label>
                <div class="grid grid-cols-2 gap-2 grid-custom">

                        <label for="" class="vm-datos">Nombre: <br><b class="">{{ $dueño->name}}</b></label>

                        <label for="" class="vm-datos">localidad: <br><b class="">{{ $dueño->localidad}}</b></label>

                        <label for="" class="vm-datos">telefono: <br><b class="">{{ $dueño->telefono}}</b></label>

                </div>
        </div>
</div>
<!--fin ver mascota -->

@endsection