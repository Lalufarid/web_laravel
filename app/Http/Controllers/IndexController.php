<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Guru;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $artikels = Artikel::paginate(3); 
        $gurus = Guru::paginate(3); 
        return view ('index',['artikels'=>$artikels],['gurus'=>$gurus]);
    }
}
