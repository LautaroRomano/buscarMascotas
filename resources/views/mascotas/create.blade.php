@extends('layouts.app')

@section('title','Registrar Mascota')

@section('content')

<!-- registrar mascota -->
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <h1 class="text-3xl text-center font-bold">Registra tu mascota</h1>
    <form class="mt-4" method="POST" action="{{ route('mascotas.store')}}" enctype="multipart/form-data">
        @csrf
        @method('post')

        <input type="file" name="mascotaimg"  accept="image/*" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        @error('mascotaimg')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror


        <input type="text" name="name" placeholder="Nombre de tu mascota" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="hidden" name="key" value="{{$key}}">
       
        <input type="text" name="calleynum" placeholder="Calle y numero" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="text" name="enfermedades" placeholder="Enfermedades" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="text" name="medicamentos" placeholder="Medicamentos" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        <input type="date" name="fec_nac" placeholder="Medicamentos" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white">
        
        @error('message')
        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        
        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>
    </form>
</div>
<!--fin registrar mascota -->

@endsection