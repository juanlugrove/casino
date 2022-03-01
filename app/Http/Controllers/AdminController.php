<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $users= User::where('role','=','user')->simplepaginate();
        return view('admin.index',compact('users'));
    }

    public function edit($id){
        $usuario= User::where('id','=',$id)->get();
        return view('admin.edit',compact('usuario'));
    }
}
