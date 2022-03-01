<?php

namespace Database\Seeders;

use App\Models\Juego;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $juego=new Juego();
        $juego->nombre="Dados";
        $juego->logo="dados";
        $juego->descripcion="Popular juego del dado. Apuesta una cantidad de dinero la cual podrás triplicar si aciertas el numero del dado";
        $juego->save();
        $juego2=new Juego();
        $juego2->nombre="Minas";
        $juego2->logo="minas";
        $juego2->descripcion="Selecciona casillas del tablero y evita las minas. Por cada casilla seleccionada, tu inversion se multiplicará por 1.25";
        $juego2->save();
        $juego3=new Juego();
        $juego3->nombre="PROXIMAMENTE";
        $juego3->logo="proximamente";
        $juego3->descripcion="Estamos trabajando para traeros nuevos juegos muy pronto...";
        $juego3->save();
    }
}
