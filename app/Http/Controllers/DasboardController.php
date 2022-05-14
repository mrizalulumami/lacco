<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $pengalau = 
        'Mau Galau, tapi malu sama kamu yamg baik-baik
         saja tanpa aku';
         
        return view('dashboard.index',[
            'title' => 'Halaman Dasboard',
            'header' => $pengalau
        ]);
    }
}
