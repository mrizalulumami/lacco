<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Pelajar;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        // $items = Income::all();
        // $items = DB::table('ruangan_camp')->get();
        $ruangan = DB::table('ruangan_camp')
            ->leftJoin('camp', 'ruangan_camp.IDCamp', '=', 'camp.IDCamp')
            ->get();
        $paket = DB::table('paket')
            ->leftJoin('item_paket', 'paket.IDPaket', '=', 'item_paket.IDPaket')
            ->get();
    
        return view('auth.register',[
            'title' => 'Halaman Register',
            'ruangan' => $ruangan,
            'pakets' => $paket,
        ]);
    }
    
    public function store(Request $request ){
        
        // return $request->all();
        $validated = $request->validate([
            'namalengkap' => ['required'],
            'gender' => 'required',
            'address' => 'required',
            'birthplace' => 'required',
            'birthdate' => 'required',
            'phonenumber' => 'required',
            'email' => ['required','email:dns','max:255','unique:pelajar'],
            'arrivaldate' => 'required',
            'package' => 'required',
            'camp' => 'required',
            'programduration' => 'required',
            'username' => 'required|string|unique:pengguna|min:3|max:255',
            'password' => 'required|string|min:8',
        ]);

        // dd('registrasi berhasil!');
        
        // Pengguna::create($validated);
        Pengguna::create([
            'NamaLengkap' =>  $validated['namalengkap'],
            'Username' => $validated['username'],
            'Password' => Hash::make($validated['password']),
            'Level' =>  'Officer',
        ]);

        $idnya = DB::table('pengguna')->where('NamaLengkap', $validated['namalengkap'])->first();

        Pelajar::create([
            'NamaPelajar' =>  $validated['namalengkap'],
            'JenisKelamin' =>  $validated['gender'],
            'Alamat' =>  $validated['address'],
            'TempatLahir' =>  $validated['birthplace'],
            'Tanggallahir' =>  $validated['birthdate'],
            'NoTelpon' =>  $validated['phonenumber'],
            'Email' =>  $validated['email'],
            'RencanaDatang' =>  $validated['arrivaldate'],
            'DurasiProgram' => $validated['programduration'],
            'IDPaketDiambil' => $validated['package'],
            'IDCamp' => $validated['camp'],
            'IDRuanganCamp' => $validated['camp'],
            'KodePelajar' => $idnya->IDPengguna,
        ]);
        
        // Paket::create([
        //     'NamaPaket' =>  $validated['package'],
        // ]);

        $request->session()->flash('success','Registration is successfully, please Login!');
        return redirect('/login');
    }
}
