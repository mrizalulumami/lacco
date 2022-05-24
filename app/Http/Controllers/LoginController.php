<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('auth.index',[
            'title' => 'Halaman Login'
        ]);
    }
    // public function authenticate(Request $request){
    //    $credentials = $request->validate([
    //         'Username' => 'required',
    //         'Password' => 'required',
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/dashboard')->with('loginSukses','Selamat datang ');
    //     }

    //     // dd($credentials);
    //     return back()->with('loginError','Login failed!');
    // }
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'Username' => 'required',
            'Password' => 'required',
        ]);

        if(auth()->guard('web')->attempt([
            'Username' => $request->Username,
            'Password' => $request->Password,
        ])) {
            $user = auth()->user();
            return redirect()->intended('/dashboard')->with('loginSukses','Selamat datang ');
        } else {
            return back()->with('loginError','Login failed!');
        }
    }

    // public function authenticate(Request $request)
    // {
    //     $this->validate($request, [
    //         'Email' => 'required',
    //         'Password' => 'required',
    //     ]);

    //     if(auth()->guard('web')->attempt([
    //         'Email' => $request->Email,
    //         'Password' => $request->Password,
    //     ])) {
    //         $user = auth()->user();
    //         return redirect()->intended('/dashboard')->with('loginSukses','Selamat datang ');
    //     } else {
    //         return back()->with('loginError','Login failed!');
    //     }
    // }
}
