<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Guru;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $artikels = Artikel::paginate(3);
        $gurus = Guru::paginate(3);
        // $siswa= Kegiatan::paginate(2);  
        return view ('home',['artikels'=>$artikels],['gurus'=>$gurus]);
    }
}
