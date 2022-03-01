<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="color:white;">
            {{ __('Registro De Partidas') }}
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
                            <span>Actualmente tienes {{Auth::user()->puntos}} €</span>
                            <form action="" method="POST">
                                @csrf
                                Cantidad a apostar:
                                <input type="number" name="apuesta" class="apuestaClass"> €
                                <input type="submit" value="Confirmar apuesta" class="confirmar">
                            </form>

                            <span style="font-size:0.7rem">*No se lanzará el dado hasta que no confirmes tu apuesta</span>
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
            
            var dice1 = "https://upload.wikimedia.org/wikipedia/commons/0/09/Dice-1.svg";
            var dice2 = "https://upload.wikimedia.org/wikipedia/commons/3/34/Dice-2.svg";
            var dice3 = "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Dice-3.svg/557px-Dice-3.svg.png";
            var dice4 = "https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Dice-4.svg/557px-Dice-4.svg.png";
            var dice5 = "https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Dice-5.svg/557px-Dice-5.svg.png";
            var dice6 = "https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Dice-6.svg/557px-Dice-6.svg.png";
        
        let boton=document.getElementById("throw");
        let dado=document.getElementById("dice_img");
        boton.addEventListener("click",girar);
        function girar(){
            var num = 0;
            var x = 1;
            var interval = setInterval(function () {
                    num += 1;
                    x = Math.floor((Math.random() * 10) + 1) % 6 + 1;
                    switch (x) {
                        case 1:
                            dado.src=dice1;
                            break;
                        case 2:
                            dado.src=dice2;
                            break;
                        case 3:
                            dado.src=dice3;
                            break;
                        case 4:
                            dado.src=dice4;
                            break;
                        case 5:
                            dado.src=dice5;
                            break;
                        case 6:
                            dado.src=dice6;
                            break;
                        default:
                            dado.src=dice1;
                    };
                    if (num==30){
                        clearInterval(interval);
                        alert(x);
                    }
                }, 50);
        };
        
        }
        
        
        
        </script>
    
</x-app-layout>