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
        $juego->descripcion="Juego de dados en el cuyo cual vamos a fumarnos un tremendo de santa justa";
        $juego->save();
        $juego2=new Juego();
        $juego2->nombre="Ruleta";
        $juego2->logo="";
        $juego2->descripcion="Juego de ruleta en el cuyo cual vamos a fumarnos un tremendo de santa justa";
        $juego2->save();
        $juego3=new Juego();
        $juego3->nombre="PROXIMAMENTE";
        $juego3->logo="proximamente";
        $juego3->descripcion="Proximamente dispondremos de mas juegos que tengamos en nuestra plataforma educativa fumamos";
        $juego3->save();
    }
}
