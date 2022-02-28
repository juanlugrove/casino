<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: rgb(44, 43, 43)
        }

    </style>
</head>

<body>
    <div class="container-xl">
        <div class="row mt-3">
            <div class="col">
                <img src="img/logo.png" class="mx-auto d-block" style="width: 400px">
            </div>
        </div>
        @if (Route::has('login'))
            <div class="col text-center">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-warning btn-lg">Iniciar Sesion</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-warning btn-lg">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>

</html>
