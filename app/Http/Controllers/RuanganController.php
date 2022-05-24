<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuanganController extends Controller
{
    public function __construct()
    {
    $this->middleware('guest');
    }

    public function index(){

        $dr = DB::table('views_ruangan')->get();
        
        $druangan = DB::table('ruangan_camp')
            ->leftJoin('camp', 'ruangan_camp.IDCamp', '=', 'camp.IDCamp')
            ->get();

        return view('dashboard.ruangan',[
            'title' => 'Halaman Ruangan',
            'active' => 'ruangan',
            'ruangans' => $dr,
            'druangan' => $druangan
        ]);
    }

    public function simpanruangan(Request $request)
    {
        $validated = $request->validate([
            'namaruangan' => 'required|unique:ruangan_camp',
            'camplokasi' => 'required',
        ]);
        Ruangan::create([
            'NamaRuangan' =>  $validated['namaruangan'],
            'IDCamp' => $validated['camplokasi'],
        ]);

        $request->session()->flash('success','Data ruangan disimpan!');
        return redirect('/ruangan');
    }

    public function deleteruangan($id)
    {
        // Item::onlyTrashed()
        //         ->where('IDItemPaket', $id)
        //         ->get();
        $programs = DB::table('ruangan_camp')
                        ->where('IDRuangan', $id)
                        ->delete();
        
        return redirect('/item')->with('success','data ruangan berhasil dihapus!');
    }

    
}
