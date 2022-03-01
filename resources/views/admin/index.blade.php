<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color:white;">
            {{ __('Administrar') }}
        </h2>
    </x-slot>


    <style>
        .tabla{
            margin: 0px auto;
            text-align: center
        }
        .tabla th{
            width: 2000px;
        }
        tr:nth-child(even){
            background-color: rgb(226, 226, 226);
        }
        th a:hover{
            color: red;
        }
        .ultimo{
            background-color: white;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto tabla">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                            <th></th>
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
                                <th><a href="usuario{{$user->id}}">Editar</a></th>
                            </tr>
                        @endforeach
                        <td class="ultimo" colspan="6">{{ $users->links() }}</td>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

