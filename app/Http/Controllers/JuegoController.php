<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use App\Models\Log;
use App\Models\User;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    //
    public function index(){
        $juegos= Juego::get();
        return view('dashboard',compact('juegos'));
    }

    public function dados(){
        return view('juego.dados');
        // return "hola";
    }

    public function dadoConfirmar(Request $request){
        $numGanador=rand(1,6);
        $jugada=new Log();
        $jugada->user_id=auth()->id();
        $jugada->juego_id=1;
        if($numGanador==$request->numero){
            $jugada->puntos=($request->apuesta)*2;
        } else{
            $jugada->puntos=($request->apuesta)*-1;
        }
        $jugada->save();
        
        $jugador=User::find(auth()->id());
        $jugador->puntos=$jugador->puntos+$jugada->puntos;
        $jugador->save();
        return view('juego.dados', compact("jugada","numGanador"));
    }
}
