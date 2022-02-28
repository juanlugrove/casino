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
                            <th>User_ID</th>
                            <th>Juego_ID</th>
                            <th>Puntos</th>
                        </tr>
                        @foreach ($logs as $log)
                            <tr>
                                <td>{{ $log->log_id }}</td>
                                <td>{{ $log->user_id }}</td>
                                <td>{{ $log->juego_id }}</td>
                                <td>{{ $log->puntos }}</td>
                                
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5"></td>
                        </tr>
                        <td class="color-white" colspan="5">{{ $logs->links()}}</td>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>