<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Casino</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>
</head>

<body>
    <table class="table table-dark table-striped">
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Puntos</th>
            <th>Estado</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->puntos }}</td>
                <td>
                    @if ($user->bloqueado == 1)
                        activo
                    @else
                        bloqueado
                    @endif
                </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5"></td>
        </tr>
        <td class="color-white" colspan="5">{{ $users->links() }}</td>
    </table>


</body>

</html>
