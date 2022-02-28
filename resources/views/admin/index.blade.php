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
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

