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
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"></div> --}}
<<<<<<< HEAD
            {{-- <div class="card bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width: 18rem;">
=======
            <div class="card bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width: 18rem;">
                {{-- La ruta a la que redirecciona --}}
>>>>>>> d5edf19ebdedeb7897797fcd137918e3b87b7f38
                <a href="" style="cursor: not-allowed;">
                    {{-- Aqui se inserta la ruta de la imagen --}}
                    <img src="img/dados.jpg" class="card-img-top" alt="...">
                </a>
                    <div class="card-body p-2">
                        {{-- Su titulo --}}
                        <h5 class="titulo">Dados</h5>
                        {{-- Descripcion --}}
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
            </div>

            {{-- PROXIMAMENTE --}}
            <div class="card bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width: 18rem;">
                <a href="" style="cursor: not-allowed;">
                    <img src="img/proximamente.jpg" class="card-img-top" alt="...">
                </a>
                    <div class="card-body p-2">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
            </div> --}}
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
