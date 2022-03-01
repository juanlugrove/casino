<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color:white;">
            {{ __('Dados') }}
        </h2>
    </x-slot>

    <style>
        .dice{
            height: 300px;
            width: 300px;
        }
        .dice img{
            width: 100%;
            margin-left: 80px;
        }
        .contenedor{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .control{
            height: 300px;
            width: 60%;
            text-align: center;
        }
        .control h1{
            font-weight: bold;
            font-size: 2rem;
        }
        .apuestaClass{
            border-radius: 5px;
            margin-top: 25px;
            text-align: center;
        }
        .confirmar{
            display: block;
            margin: 0 auto;
            margin-top: 20px;
            background-color: rgb(172, 172, 1);
            color: white;
            padding: 5px 25px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .confirmar:hover{
            background-color: rgb(212, 212, 0);
        }
        .confirmar:active{
            background-color: rgb(238, 238, 0);
        }

        .prueba{
            width: 100px;
            height: 100px;
        }

    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="" method="POST">
                        @csrf
                        @method("put")
                    <div class="contenedor">
                        {{-- minas --}}
                        <table>
                            <tr>
                                <th></th>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>4</th>
                                <th>5</th>
                            </tr>
                            <tr>
                                <th>a</th>
                                <th><input type="checkbox" name="check00" class="prueba"></th>
                                <th><input type="checkbox" name="check01" class="prueba"></th>
                                <th><input type="checkbox" name="check02" class="prueba"></th>
                                <th><input type="checkbox" name="check03" class="prueba"></th>
                                <th><input type="checkbox" name="check04" class="prueba"></th>
                            </tr>
                            <tr>
                                <th>b</th>
                                <th><input type="checkbox" name="check10" class="prueba"></th>
                                <th><input type="checkbox" name="check11" class="prueba"></th>
                                <th><input type="checkbox" name="check12" class="prueba"></th>
                                <th><input type="checkbox" name="check13" class="prueba"></th>
                                <th><input type="checkbox" name="check14" class="prueba"></th>
                            </tr>
                            <tr>
                                <th>c</th>
                                <th><input type="checkbox" name="check20" class="prueba"></th>
                                <th><input type="checkbox" name="check21" class="prueba"></th>
                                <th><input type="checkbox" name="check22" class="prueba"></th>
                                <th><input type="checkbox" name="check23" class="prueba"></th>
                                <th><input type="checkbox" name="check24" class="prueba"></th>
                            </tr>
                            <tr>
                                <th>d</th>
                                <th><input type="checkbox" name="check30" class="prueba"></th>
                                <th><input type="checkbox" name="check31" class="prueba"></th>
                                <th><input type="checkbox" name="check32" class="prueba"></th>
                                <th><input type="checkbox" name="check33" class="prueba"></th>
                                <th><input type="checkbox" name="check34" class="prueba"></th>
                            </tr>
                            <tr>
                                <th>e</th>
                                <th><input type="checkbox" name="check40" class="prueba"></th>
                                <th><input type="checkbox" name="check41" class="prueba"></th>
                                <th><input type="checkbox" name="check42" class="prueba"></th>
                                <th><input type="checkbox" name="check43" class="prueba"></th>
                                <th><input type="checkbox" name="check44" class="prueba"></th>
                            </tr>
                        </table>
                        <div class="control">
                            <h1>NO PISES LAS MINAS</h1>
                            @if(!isset($jugada))
                                @if (Auth::user()->bloqueado==1)
                                    
                            <span>Actualmente tienes {{Auth::user()->puntos}} €</span>
                                Cantidad a apostar por cada casilla:
                                <input type="number" name="apuesta" class="apuestaClass"> €<br>
                                <span style="font-size:0.7rem">Cada casilla multiplica 1.25</span><br><br>
                                <input type="submit" value="Confirmar apuesta" class="confirmar">
                                <span style="font-size:0.7rem">*Saldran un total de 7 minas</span>
                            @else
                            <h1 style="font-size: 2rem; font-weight: bold">Lo siento, usuario bloqueado</h1>
                            <span style="font-size: 1.5rem">Contacta con algun administrador</span>
                            @endif
                            @else
                            <button id="throw" class="botonC">LANZAR</button>
                            <div id="oculto" style="display:none;">
                                <h3>Ha salido el numero <span id="numGanador">{{$numGanador}}</span></h3><br><br>
                                @if ($jugada->puntos>0)
                                    <span style="font-weight: bold;font-size:2rem; color:green;">Has ganado {{$jugada->puntos}} euros
                                    @else
                                    <span style="font-weight: bold;font-size:2rem; color:red;">{{$jugada->puntos}} euros
                                @endif
                            </span><br><br>
                            <a class="botonC" href="">VOLVER A JUGAR</a>
                            </div>
                            @endif
                            {{-- <button id="throw" class="btn btn-primary my-3 w-75">Throw</button> --}}
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>