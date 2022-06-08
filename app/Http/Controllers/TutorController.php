<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutorController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
        $i = 1;
        $dr = DB::table('tutor')->get();
        $dcamp = DB::table('tutor')
            ->leftJoin('camp', 'tutor.IDCamp', '=', 'camp.IDCamp')
            ->get();

        return view('dashboard.tutor',[
            'title' => 'Halaman Tutor',
            'active' => 'tutor',
            'tutors' => $dr,
            'dcamp' => $dcamp,
            'i' => $i,
        ]);
    }

    public function simpantutor(Request $request)
    {
         // return $request->all();
        //  ddd($request);
        
         $validated = $request->validate([
            'namatutor' => 'required',
            'alamat' => 'required',
            'nowa' => 'required',
            'photo' => 'image|file|max:2048',
            'email' => 'required|email:dns|unique:tutor',
            'camplokasi' => 'required',
        ]);

        if($request->file('photo')){
            $validated['photo'] = $request->file('photo')->store('tutor');
        }

        // dd('registrasi berhasil!');
        
        // Pengguna::create($validated);
        Tutor::create([
            'NamaTutor' =>  $validated['namatutor'],
            'Alamat' => $validated['alamat'],
            'NoWA' => $validated['nowa'],
            'Photo' => $validated['photo'],
            'Email' => $validated['email'],
            'IDCamp' => $validated['camplokasi'],
        ]);

        return redirect('/tutor')->with('success','data tutor berhasil disimpan!');
    }

    public function deletetutor($id)
    {
        // Item::onlyTrashed()
        //         ->where('IDItemPaket', $id)
        //         ->get();
        $programs = DB::table('tutor')
                        ->where('IDTutor', $id)
                        ->delete();
        
        return redirect('/item')->with('success','data tutor berhasil dihapus!');
    }
}
