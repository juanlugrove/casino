<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JuegoController;
use App\Http\Controllers\LogController;
use App\Models\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[JuegoController::class,'index'])->middleware(['auth'])->name('dashboard');

Route::get('/admin',[AdminController::class,'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/usuario{id}',[AdminController::class,'show'])
    ->middleware('auth.admin')
    ->name('admin.edit');

Route::get('/logs',[LogController::class,'index'])->middleware(['auth'])
    ->name('log.index');

    Route::put('/usuario{usuario}/update',[AdminController::class,'update'])
    ->middleware('auth.admin')
    ->name('admin.update');
Route::get("/dados",[JuegoController::class,'dados'])->middleware(['auth'])->name("juego.dados");

require __DIR__.'/auth.php';
