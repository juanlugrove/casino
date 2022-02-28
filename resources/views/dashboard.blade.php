<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>


    <style>
        .contenedor{
            display: flex;
            justify-content: space-around
        }

        .titulo{
            font-size: 1.7rem;
            font-weight: bold
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 contenedor">
            @foreach ($juegos as $juego)
            <div class="card bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width: 18rem;">
                <a href="" style="cursor: not-allowed;">
                    <img src="img/{{$juego->logo}}.jpg" class="card-img-top" alt="...">
                </a>
                    <div class="card-body p-2">
                        <h5 class="titulo">{{$juego->nombre}}</h5>
                      <p class="card-text">{{$juego->descripcion}}</p>
                    </div>
            </div>
                        @endforeach
        </div>
    </div>
</x-app-layout>
