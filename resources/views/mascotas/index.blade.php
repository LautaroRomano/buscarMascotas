@extends('layouts.app')

@section('title','Mascotas')

@section('content')

<!-- ver mascotas -->
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full mt-10">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="w-1/16 py-4 ...">Foto</th>
                <th class="w-1/16 py-4 ...">Dueño</th>
                <th class="w-1/16 py-4 ...">Nombre</th>
                <th class="w-1/16 py-4 ...">Calle y numero</th>
                <th class="w-1/16 py-4 ...">Enfermedades</th>
                <th class="w-1/16 py-4 ...">Medicamentos</th>
                <th class="w-28 py-4 ...">Ver vacunas</th>
                <th class="w-28 py-4 ...">Ver Veterinario</th>
                <th class="w-28 py-4 ...">Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $row)
            <tr>
                <td class="p-3 text-center">
                    <img src="{{$row->fotourl}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                </td>
                <td class="p-3 text-center">{{$username}}</td>
                <td class="p-3 text-center">{{$row->name}}</td>
                <td class="p-3 text-center">{{$row->calleynum}}</td>
                <td class="p-3 text-center">{{$row->enfermedades}}</td>
                <td class="p-3 text-center">{{$row->medicamentos}}</td>
                <td class="p-3 text-center">
                    <a href="{{ route('vacunas.show', $row->id)}}">
                        <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                            <i class="fas fa-pen"></i>
                        </button>
                    </a>
                </td>
                <td class="p-3 text-center">
                    <a href="{{ route('veterinario.show', $row->id)}}">
                        <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                            <i class="fas fa-pen"></i>
                        </button>
                    </a>
                </td>
                <td class="p-3 flex justify-center">
                    <form action="{{ route( 'mascotas.destroy', $row->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    <a href="{{ route('mascotas.edit', $row->id)}}">
                        <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                            <i class="fas fa-pen"></i>
                        </button>
                    </a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- fin ver mascotas -->

@endsection