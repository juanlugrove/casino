<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 d-flex justify-content-center">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"></div> --}}
            {{-- <div class="card bg-white overflow-hidden shadow-sm sm:rounded-lg" style="width: 18rem;">
                <a href="" style="cursor: not-allowed;">
                    <img src="img/dados.jpg" class="card-img-top" alt="...">
                </a>
                    <div class="card-body p-2">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
            </div>
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
