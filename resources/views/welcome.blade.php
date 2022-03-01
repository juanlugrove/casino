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
            background-image: url('img/background.jpg');
            background-image: linear-gradient(to bottom, rgba(0, 51, 7, 0.897),rgba(0, 51, 7, 0.897)), url('img/background.jpg');
            background-position: center;
            background-size: cover
            /* background-color: rgb(0, 43, 4); */
        }

        .logo{
            width: 20%;
            margin-top: 10%;
            filter: drop-shadow(-2px 2px 15px rgba(0, 0, 0, 0.7));
        }

        .botones{
            display: flex;
            flex-direction: column;
            /* align-items: center; */
            justify-content: space-around;
            margin: 0 auto;
            width: 50%;
        }
        .botones a{
            margin-top: 25px;
            box-shadow: -2px 2px 15px black;
        }

    </style>
</head>

<body>
    <div class="container-xl">
        <div class="row mt-3">
            <div class="col">
                <img src="img/logo.png" class="mx-auto d-block logo">
            </div>
        </div>
        @if (Route::has('login'))
            <div class="col text-center botones">
                @auth
                    <script>window.location = "dashboard";</script>
                @else
                    <a href="{{ route('login') }}" class="btn btn-warning btn-lg">Iniciar Sesion</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-warning btn-lg reg">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>

</html>
