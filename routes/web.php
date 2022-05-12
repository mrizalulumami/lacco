<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('guest.index');
});

//utnuk route ke halaman login
Route::get('/login',[LoginController::class,'index'])->middleware('guest');
//proses login
Route::post('/login',[LoginController::class,'authenticate']);

//untuk route e halaman register
Route::get('/register',[RegisterController::class,'index']);
//utnuk menyimpan data dari halaman register
Route::post('/register',[RegisterController::class,'store']);