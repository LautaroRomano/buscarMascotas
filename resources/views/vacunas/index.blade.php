@extends('layouts.app')

@section('title','Vacunas')

@section('content')

<!-- ver mascotas -->
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <a href="{{ route('vacunas.create', ['id' => $Mascota_id])}}">
        <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
            <h3 class="p-3 m-auto">Agregar una vacuna</h3>
        </button>
    </a>

    <table class="table-fixed w-full mt-10">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="w-1/16 py-4 ...">Nombre</th>
                <th class="w-1/16 py-4 ...">Detalle</th>
                <th class="w-1/16 py-4 ...">Proxima Vacuna</th>
                <th class="w-28 py-4 ...">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Vacunas as $row)
            <tr>
                <td class="p-3 text-center">{{$row->name}}</td>
                <td class="p-3 text-center">{{$row->detalle}}</td>
                <td class="p-3 text-center">{{$row->proxvacuna}}</td>

                <td class="p-3 flex justify-center">
                    <form action="{{ route( 'vacunas.destroy', $row->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    <a href="{{ route('vacunas.edit', $row->id)}}">
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