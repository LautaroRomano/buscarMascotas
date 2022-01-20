@extends('layouts.app')

@section('title','Home')
    
@section('content')

<a href="{{ route('escanerqr')}}">
        <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
            <h3 class="p-3 m-auto">Escanear QR</h3>
        </button>
    </a>


@endsection
