@extends('layouts.app')

@section('title','Vacunas')

@section('content')

<!-- registrar mascota -->
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Agrega una nueva Vacuna</h1>
    <form class="mt-4" method="POST" action="{{ route('vacunas.store')}}">
        @csrf
        @method('post')

        <input type="hidden" name="Mascota_id" value="{{$id}}">
       
        <input type="text" name="name" placeholder="Nombre" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="text" name="detalle" placeholder="Detalle" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="date" name="proxvacuna" placeholder="Proxima Vacuna" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        
        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>
    </form>
</div>
<!--fin registrar mascota -->

@endsection