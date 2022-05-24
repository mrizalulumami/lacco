<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemPaketController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        $di = DB::table('paket')->get();
        $dis = DB::table('item_paket')
            ->leftJoin('paket', 'item_paket.IDPaket', '=', 'paket.IDPaket')
            ->get();
        return view('dashboard.item',[
            'title' => 'Halaman item',
            'active' => 'item',
            'di' => $di,
            'dis' => $dis,
        ]);
    }
    public function simpanitempaket(Request $request)
    {
        $validated = $request->validate([
            'namaitem' => 'required',
            'idpaket' => 'required',
        ]);

        // dd('registrasi berhasil!');
        
        // Pengguna::create($validated);
        Item::create([
            'NamaItem' =>  $validated['namaitem'],
            'IDPaket' => $validated['idpaket'],
        ]);

        return redirect('/item')->with('success','data item paket berhasil disimpan!');
    }

    public function deleteitempaket($id)
    {
        // Item::onlyTrashed()
        //         ->where('IDItemPaket', $id)
        //         ->get();
        $programs = DB::table('item_paket')
                        ->where('IDItemPaket', $id)
                        ->delete();
        
        return redirect('/item')->with('success','data item paket berhasil dihapus!');
    }
}
