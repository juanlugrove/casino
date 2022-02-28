<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Casino') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table table-dark table-striped text-center">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Puntos</th>
                            <th>Estado</th>
                        </tr>
                            <tr>
                                <td>{{ $usuario[0]->id }}</td>
                                <td>{{ $usuario[0]->nombre }}</td>
                                <td>{{  $usuario[0]->email }}</td>
                                <td>{{  $usuario[0]->puntos }}</td>
                                <td>
                                    @if ( $usuario[0]->bloqueado == 1)
                                        activo
                                    @else
                                        bloqueado
                                    @endif
                                </td>
                            </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>