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

Route::get('/dashboard',[JuegoController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin',[AdminController::class,'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

<<<<<<< HEAD
    Route::get('/admin/{id}',[AdminController::class,'admin'])
    ->middleware('auth.admin')
    ->name('admin.edit');
=======
>>>>>>> 64d31aaee6245fb74c067c79b58d21dbe27b3f6c

    Route::get('/logs',[LogController::class,'index'])
    ->name('log.index');

    

require __DIR__.'/auth.php';
