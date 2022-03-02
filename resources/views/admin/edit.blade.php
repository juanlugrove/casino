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
        .boton{
            background-color: rgb(122, 0, 0);
            border-radius: 5px;
            padding: 5px 10px;
            color: white
        }
        
        .bloquear:hover{
            background-color: rgb(167, 0, 0);
        }
        .bloquear:active{
            background-color: rgb(214, 0, 0);
        }
        .activar:hover{
            background-color: rgb(0, 0, 141);
        }
        .activar:active{
            background-color: rgb(0, 0, 209);
        }

        .activar{
            background-color: rgb(0, 0, 104);
        }
        .confirmar{
            display: block;
            margin: 0 auto;
            margin-top: 25px;
            background-color: rgb(172, 172, 1);
            color: white;
            padding: 5px 25px;
            border-radius: 5px;
        }
        
        .confirmar:hover{
            background-color: rgb(212, 212, 0);
        }
        .confirmar:active{
            background-color: rgb(238, 238, 0);
        }
        .borrar:hover{
            background-color: red;
        }
        .borrar:active{
            background-color: rgb(173, 2, 2);
        }

        .borrar{
            background-color: rgb(139, 0, 0);
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
                            <th>Bloqueado</th>
                        </tr>
                            <tr>
                            <form action="{{route("admin.update", $usuario[0]->id )}}" method="POST">
                                    @csrf
                                    @method("put")
                                    <td>{{ $usuario[0]->id }}</td>
                                    <input type="text" name="id" value="{{ $usuario[0]->id }}" style="display:none;">
                                    <td><input type="text" name="name" value="{{ $usuario[0]->name }}"></td>
                                    <td><input type="text" name="email" value="{{ $usuario[0]->email }}"></td>
                                    <td><input type="number" name="puntos" value="{{ $usuario[0]->puntos }}"></td>
                                    <th>
                                        @if ($usuario[0]->bloqueado == 1)
                                        <input type="checkbox" name="bloqueado">
                                        @else
                                        <input type="checkbox" name="bloqueado" checked>
                                        @endif
                                    </th>
                                </tr>
                    </table>
                    <input type="submit" value="Confirmar cambios" class="confirmar">
                </form>
                <form action="{{route("admin.destroy", $usuario[0]->id )}}" method="POST">
                    @csrf
                    @method("delete")
                    <input type="submit" value="Borrar usuario" class="confirmar borrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

