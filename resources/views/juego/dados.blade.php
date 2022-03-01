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
            margin-top: 35px;
            text-align: center;
        }
        .confirmar{
            display: block;
            margin: 0 auto;
            margin-top: 25px;
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

        .botonC{
            background-color:rgb(0, 73, 0);
            padding: 5px 25px;
            border-radius: 5px;
            color: white;
            display: inline-block;
        }

        .botonC.hover{
            background-color: rgb(0, 177, 0);
        }
        .botonC.active{
            background-color: rgb(0, 190, 0);
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="contenedor">
                        <div class="dice m-auto">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Dice-1.svg" id="dice_img" class="d-block w-100" />
                        </div>
                        <div class="control">
                            <h1>TIRA EL DADO</h1>
                            @if(!isset($jugada))
               
                            <span>Actualmente tienes {{Auth::user()->puntos}} €</span>
                            <form action="" method="POST">
                                @csrf
                                @method("put")
                                Cantidad a apostar:
                                <input type="number" name="apuesta" class="apuestaClass"> €<br><br>
                                Seleccione un numero:
                                <select name="numero">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                                <input type="submit" value="Confirmar apuesta" class="confirmar">
                            </form>
                            
                            <span style="font-size:0.7rem">*No se lanzará el dado hasta que no confirmes tu apuesta</span>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        addEventListener("load",iniciar);
        function iniciar(){
            
        dices = ["https://upload.wikimedia.org/wikipedia/commons/0/09/Dice-1.svg","https://upload.wikimedia.org/wikipedia/commons/3/34/Dice-2.svg","https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Dice-3.svg/557px-Dice-3.svg.png","https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Dice-4.svg/557px-Dice-4.svg.png","https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Dice-5.svg/557px-Dice-5.svg.png","https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Dice-6.svg/557px-Dice-6.svg.png"];
        
        let boton=document.getElementById("throw");
        let dado=document.getElementById("dice_img");
        boton.addEventListener("click",girar);
        function girar(){
            // alert("hola")
            var num = 0;
            var x = 1;
            var interval = setInterval(function () {
                    num += 1;
                    x = Math.floor((Math.random() * 10) + 1) % 6 + 1;
                    dado.src=dices[x-1];
                    
                    if (num==30){
                        clearInterval(interval);
                        dado.src=dices[(document.getElementById("numGanador").innerHTML)-1]
                        boton.style="display:none;";
                        document.getElementById("oculto").style="display:block;"
                    }
                }, 50);
        };
        
        }
        
        
        
        </script>
    
</x-app-layout>