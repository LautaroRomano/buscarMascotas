@extends('layouts.app')

@section('title','Editar Historial Clinico')

@section('content') 

<!-- registrar Histclinico -->
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Editar los datos</h1>
    <form class="mt-4" method="POST" action="{{ route('veterinario.update',$Histclinico->id)}}">
        @csrf
        @method('put')
        <input type="text" name="veterinario" placeholder="Veterinario" value="{{ $Histclinico->veterinario}}" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
    
        <input type="text" name="detalle" placeholder="Detalle" value="{{ $Histclinico->detalle}}" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="date" name="proxvisita" value="{{ $Histclinico->proxvisita}}" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">

        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        
        <button type="submit" class="rounded-md bg-green-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>
    </form>
</div>
<!--fin registrar Histclinico -->

@endsection