@extends('layouts.app')

@section('title','Ver mascota')

@section('content')
<!-- ver mascota -->
<div class="backgr" style="background-image: linear-gradient(to bottom, rgba(18,42, 66, .65), rgba(18,42, 66, .65)), url({{ $mascota->fotourl }})">
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
                @if (auth()->check())
                        <input type="hidden" id="userlogin" value="{{ auth()->user()->id }}">
                @else
                        <input type="hidden" id="userlogin" value="-1">
                @endif
                <form method="POST" action="./ubicacion" id="formu">
                        @csrf
                        @method('post')
                        <input type="hidden" name="longitud" id="longitud">
                        <input type="hidden" name="latitud" id="latitud">
                        <input type="hidden" name="iduser" id="iduser" value="{{ $dueño->id }}">
                        <input type="hidden" name="idmascota" id="idmascota" value="{{ $mascota->id }}">
                </form>
               
        </div>

</div>

<div class="map-container">
        <input type="hidden" id="ultubicacionlatitud" value="{{ $mascota->ubiclatitud }}">
        <input type="hidden" id="ultubicacionlongitud" value="{{ $mascota->ubiclongitud }}">
        <h3 class="title">Ultima ubicacion de tu mascota</h3>
        <h3 class="fecha">Fecha y hora: {{$mascota->ubicfecha}}</h3>
        <div id="map" class="map-custom"></div>
</div>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTSEoG68aJFIVCmo4vcaKaqUrdSSkrGuE&callback=initMap"></script>
<script src="/js/enviarUbicacion.js"></script>
<!--fin ver mascota -->

@endsection