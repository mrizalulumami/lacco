<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\ItemPaketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;
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
// ini adalah crud untuk pelajar 
Route::get('/pelajar',[PelajarController::class,'index']);
Route::post('/simpanpelajar',[PelajarController::class,'simpanpelajar']);
Route::put('/editpelajar/{id}',[PelajarController::class,'editpelajar']);
Route::delete('/deletepelajar/{id}',[PelajarController::class,'deletepelajar']);

// Route::get('/program',[ProgramController::class,'index'])->middleware('auth');
// ini adalah crud untuk program 
Route::get('/program',[ProgramController::class,'index']);
Route::post('/simpanprogram',[ProgramController::class,'simpanprogram']);
Route::put('/editprogram/{id}',[ProgramController::class,'editprogram']);
Route::delete('/deleteprogram/{id}',[ProgramController::class,'deleteprogram']);

// ini adalah crud untuk item paket
Route::get('/item',[ItemPaketController::class,'index']);
Route::post('/simpanitempaket',[ItemPaketController::class,'simpanitempaket']);
Route::put('/edititempaket/{id}',[ItemPaketController::class,'edititempaket']);
Route::delete('/deleteitempaket/{id}',[ItemPaketController::class,'deleteitempaket']);

// ini adalah crud untuk paket
Route::get('/paket',[PaketController::class,'index']);
Route::post('/simpanpaket',[PaketController::class,'simpanpaket']);
Route::put('/editpaket/{id}',[PaketController::class,'editpaket']);
Route::delete('/deletepaket/{id}',[PaketController::class,'deletepaket']);

// ini adalah crud untuk ruangan
Route::get('/ruangan',[RuanganController::class,'index']);
Route::post('/simpanruangan',[RuanganController::class,'simpanruangan']);
Route::put('/editruangan/{id}',[RuanganController::class,'editruangan']);
Route::delete('/deleteruangan/{id}',[RuanganController::class,'deleteruangan']);

// ini adalah crud untuk tutor
Route::get('/tutor',[TutorController::class,'index']);
Route::post('/simpantutor',[TutorController::class,'simpantutor']);
Route::put('/edittutor/{id}',[TutorController::class,'edittutor']);
Route::delete('/deletetutor/{id}',[TutorController::class,'deletetutor']);

// Route::get('/program',[ProgramController::class,'index']);