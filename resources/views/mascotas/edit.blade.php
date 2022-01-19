@extends('layouts.app')

@section('title','Editar Mascota')

@section('content')

<!-- registrar mascota --> 
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Edita los datos de {{$mascota->name}}</h1>
    <form class="mt-4" method="POST" action="{{ route('mascotas.update',$mascota->id)}}">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Nombre de tu mascota" value="{{ $mascota->name}}" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    
        <input type="text" name="calleynum" placeholder="Calle y numero" value="{{ $mascota->calleynum}}" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="text" name="enfermedades" placeholder="Enfermedades" value="{{ $mascota->enfermedades}}" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="text" name="medicamentos" placeholder="Medicamentos" value="{{ $mascota->medicamentos}}" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="date" name="fec_nac" placeholder="Medicamentos" value="{{ $mascota->fec_nac}}" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        

        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        
        <button type="submit" class="rounded-md bg-green-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>
    </form>
</div>
<!--fin registrar mascota -->

@endsection