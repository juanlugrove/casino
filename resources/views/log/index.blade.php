<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Casino') }}
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
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto tabla">
                        <tr>
                            <th>Codigo</th>
                            <th>Juego</th>
                            <th>Puntos</th>
                            <th>Fecha</th>
                        </tr>
                        @foreach ($logs as $log)
                            <tr>
                                <td>{{ $log->log_id }}</td>
                                <td>
                                    @switch($log->juego_id)
                                    @case(1)
                                    Dados
                                    @break
                                    @case(2)
                                    Ruleta
                                    @break
                                    @endswitch
                                </td>
                                <td>{{ $log->puntos }}</td>
                                <td>{{ $log->created_at }}</td>
                            </tr>
                        @endforeach
                        <td class="color-white" colspan="5">{{ $logs->links()}}</td>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>