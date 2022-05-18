<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\ItemPaketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelajarController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\TutorController;
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
Route::get('/login',[LoginController::class,'index']);
//proses login
Route::post('/login',[LoginController::class,'authenticate']);

//untuk route e halaman register
Route::get('/register',[RegisterController::class,'index']);
//utnuk menyimpan data dari halaman register
Route::post('/register',[RegisterController::class,'store']);

// Route::get('/dashboard',[DasboardController::class,'index'])->middleware('auth');
Route::get('/dashboard',[DasboardController::class,'index']);

// Route::get('/pelajar',[PelajarController::class,'index'])->middleware('auth');
Route::get('/pelajar',[PelajarController::class,'index']);

// Route::get('/program',[ProgramController::class,'index'])->middleware('auth');
Route::get('/program',[ProgramController::class,'index']);
Route::post('/simpanprogram',[ProgramController::class,'simpanprogram']);

Route::get('/item',[ItemPaketController::class,'index']);
Route::post('/item',[ItemPaketController::class,'simpanitem']);

Route::get('/ruangan',[RuanganController::class,'index']);
Route::post('/simpanruangan',[RuanganController::class,'simpanruangan']);

Route::get('/tutor',[TutorController::class,'index']);

// Route::get('/program',[ProgramController::class,'index']);