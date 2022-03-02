<?php

namespace App\Http\Controllers;

use App\Models\Log as ModelsLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogController extends Controller
{
    
    public function index(){
        $logs= ModelsLog::where('user_id','=',auth()->id())->orderBy('created_at', 'DESC')->simplepaginate();
        return view('log.index',compact('logs'));
    }
}
