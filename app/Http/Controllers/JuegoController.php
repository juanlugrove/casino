<?php

namespace App\Http\Controllers;

use App\Models\Juego;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    //
    public function index(){
        $juegos= Juego::get();
        return view('dashboard',compact('juegos'));
    }
}
