<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $users= User::where('role','=','user')->paginate();
        return view('admin.index',compact('users'));
    }

    public function edit($id){
        $user= User::where('id','=',$id)->get();
        return view('admin.edit',compact('user'));
    }
}
