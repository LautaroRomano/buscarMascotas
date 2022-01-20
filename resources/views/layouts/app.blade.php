<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>

    <!-- escaner Qr Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

</head>

<body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-10 mr-auto">
            <a href="{{route('home')}}">
                <h2 class="text-2xl font-bold">LOGOAPP</h2>
            </a>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if (auth()->check())
            <p class="text-xl">Bienvenido <b>{{auth()->user()->name}}</b></p>
            <li class="mx-6">
                <a href="{{route('mascotas.index')}}" class="text-xl border border-blue-500 rounded px-4 pt.1">Ver mascotas</a>
            </li>
            <li class="mx-6">
                <a href="{{route('login.destroy')}}" class="font-semibold bg-red-500 hover:bg-red-600 py-3 px-4 rounded-md">Logout</a>
            </li>
            @else
            <li class="mx-6">
                <a href="{{route('login.index')}}" class="font-bold hover:bg-indigo-700 py-3 px-4">Log In</a>
            </li>
            <li>
                <a href="{{route('register.index')}}" class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:text-indigo-700 hover:bg-white">Register</a>
            </li>
            @endif

        </ul>
    </nav>

    @yield('content')
</body>

</html>