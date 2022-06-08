<?php

use App\Http\Controllers\CampController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\ItemPaketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberNonVerifiedController;
use App\Http\Controllers\MemberVerifiedController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PelajarController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProgramHistoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\UserController;
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

// ini adalah crud untuk camp
Route::get('/camp',[CampController::class,'index']);
Route::post('/simpancamp',[CampController::class,'simpancamp']);
Route::put('/editcamp/{id}',[CampController::class,'editcamp']);
Route::delete('/deletecamp/{id}',[CampController::class,'deletecamp']);

// ini adalah crud untuk camp
Route::get('/user',[UserController::class,'index']);
Route::post('/simpanuser',[UserController::class,'simpanuser']);
Route::put('/edituser/{id}',[UserController::class,'edituser']);
Route::delete('/deleteuser/{id}',[UserController::class,'deleteuser']);

// ini adalah crud untuk camp
Route::get('/member_verified',[MemberVerifiedController::class,'index']);
Route::post('/simpanmember_verified',[MemberVerifiedController::class,'simpanmember_verified']);
Route::put('/editmember_verified/{id}',[MemberVerifiedController::class,'editmember_verified']);
Route::delete('/deletemember_verified/{id}',[MemberVerifiedController::class,'deletemember_verified']);

// ini adalah crud untuk camp
Route::get('/member_nonverified',[MemberNonVerifiedController::class,'index']);
Route::post('/simpanmember_nonverified',[MemberNonVerifiedController::class,'simpanmember_nonverified']);
Route::put('/editmember_nonverified/{id}',[MemberNonVerifiedController::class,'editmember_nonverified']);
Route::delete('/deletemember_nonverified/{id}',[MemberNonVerifiedController::class,'deletemember_nonverified']);

// ini adalah crud untuk camp
Route::get('/allmember',[MemberController::class,'index']);
Route::post('/simpanallmember',[MemberController::class,'simpanallmember']);
Route::put('/editallmember/{id}',[MemberController::class,'editallmember']);
Route::delete('/deleteallmember/{id}',[MemberController::class,'deleteallmember']);

// ini adalah crud untuk camp
Route::get('/historyprogram',[ProgramHistoryController::class,'index']);
Route::post('/simpanhistoryprogram',[ProgramHistoryController::class,'simpanhistoryprogram']);
Route::put('/edithistoryprogram/{id}',[ProgramHistoryController::class,'edithistoryprogram']);
Route::delete('/deletehistoryprogram/{id}',[ProgramHistoryController::class,'deletehistoryprogram']);

// Route::get('/program',[ProgramController::class,'index']);