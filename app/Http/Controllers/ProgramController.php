<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        // $this->middleware('auth');
    }

    public function index(){
        // $items = Income::all();

        // $paket = DB::table('paket')
        //     ->leftJoin('item_paket', 'paket.IDPaket', '=', 'item_paket.IDPaket')
        //     ->get();
        $dprogram = DB::table('program')->get();
    
        // return view('auth.register',[
        //     'title' => 'Data Pelajar',
        //     'dpelajars' => $dp,
        // ]);
        // dd($dprogram);
        return view('dashboard.program',[
            'title' => 'Halaman Program',
            'active' => 'program',
            'pelajars' => $dprogram
        ]);
    }
}
