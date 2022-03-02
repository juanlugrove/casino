<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $users= User::where('role','=','user')->orderBy('puntos', 'DESC')->simplepaginate();
        return view('admin.index',compact('users'));
    }

    public function show($id){
        $usuario= User::where('id','=',$id)->get();
        return view('admin.edit',compact('usuario'));
    }

    public function update(Request $request ,User $usuario){
        // $usuario=User::find($id);
        $usuario->name=$request->name;
        $usuario->email=$request->email;
        $usuario->puntos=$request->puntos;
        if(isset($request->bloqueado)){
            $usuario->bloqueado=0;
        } else {
            $usuario->bloqueado=1;
        }
        $usuario->save();
        return redirect()->route("admin.index");
    }
}
