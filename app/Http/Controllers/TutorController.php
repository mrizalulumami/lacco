<?php

namespace App\Http\Controllers;

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
        $dr = DB::table('tutor')->get();
        $dcamp = DB::table('tutor')
            ->leftJoin('camp', 'tutor.IDCamp', '=', 'camp.IDCamp')
            ->get();

        return view('dashboard.tutor',[
            'title' => 'Halaman Tutor',
            'active' => 'tutor',
            'tutors' => $dr,
            'dcamp' => $dcamp
        ]);
    }
}
