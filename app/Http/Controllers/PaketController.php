<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        return view('dashboard.paket',[
            'title' => 'Halaman paket',
            'active' => 'paket',
        ]);
    }
}
