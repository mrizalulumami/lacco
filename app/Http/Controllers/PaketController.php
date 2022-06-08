<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        $dpak = DB::table('paket')->get();
        $i = 1;

        return view('dashboard.paket',[
            'title' => 'Halaman paket',
            'active' => 'paket',
            'dpak' => $dpak,
            'i' => $i,
        ]);
    }

    public function simpanpaket(Request $request)
    {
        $validated = $request->validate([
            'namapaket' => 'required',
            'hpaket' => 'required',
        ]);

        // dd('registrasi berhasil!');
        
        // Pengguna::create($validated);
        Paket::create([
            'NamaPaket' =>  $validated['namapaket'],
            'Harga' => $validated['hpaket'],
        ]);

        return redirect('/paket')->with('success','data paket berhasil disimpan!');
    }

    public function deletepaket($id)
    {
        // Item::onlyTrashed()
        //         ->where('IDItemPaket', $id)
        //         ->get();
        $programs = DB::table('paket')
                        ->where('IDPaket', $id)
                        ->delete();
        
        return redirect('/paket')->with('success','data item paket berhasil dihapus!');
    }
}
