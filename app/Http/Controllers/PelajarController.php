<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelajarController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        // $this->middleware('auth');
    }
    public function index(){
        // $items = Income::all();
        $dp = DB::table('data_pelajar')->get();
        // $dp = DB::table('total_pelajar')->get();
        // $dp = DB::table('total_pelajar_percamp')->get();
        // $dp = DB::table('total_pelajar_peruangan')->get();
        // return view('auth.register',[
        //     'title' => 'Data Pelajar',
        //     'dpelajars' => $dp,
        // ]);
        // dd($dp);
        return view('dashboard.pelajar',[
            'title' => 'Halaman Pelajar',
            'active' => 'pelajar',
            'pelajars' => $dp
        ]);
    }
    public function deletepelajar($id)
    {
        // Item::onlyTrashed()
        //         ->where('IDItemPaket', $id)
        //         ->get();
        $programs = DB::table('pelajar')
                        ->where('IDPelajar', $id)
                        ->delete();
        
        return redirect('/item')->with('success','data pelajar berhasil dihapus!');
    }
}
