<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemPaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        return view('dashboard.item',[
            'title' => 'Halaman item',
            'active' => 'item',
        ]);
    }
}
