<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::paginate(3); 
        return view ('artikel',['artikels'=>$artikels]);
    }

    public function show(Artikel $artikel)
    {
        return view ('posts.show',compact('artikel'));
    }

    // public function create()
    // {
    //     return view ('posts.create',['artikel'=>new Artikel()]);
    // }

    // public function store()
    // {

    //     $art = $this->validateRequest();
    //     $art['slug'] = \Str::slug(request('title'));
    //     Artikel::create($art);

    //     session()->flash('success','pots complete');
    //     // return back();
    //     return redirect('artikel');
    // }

    // public function edit(Artikel $artikel)
    // {
    //     return view ('posts.edit', compact('artikel'));
    // }

    // public function update(Artikel $artikel)
    // {
    //     $art = $this->validateRequest();
    //     $artikel->update($art); 
    //     session()->flash('success','pots Updated');
    //     // return back();
    //     return redirect('artikel');  
    // }

    // public function validateRequest()
    // {
    //     return request()->validate([
    //         'title' => 'required',
    //         'body' => 'required',
    //     ]);
    // }

    // public function destroy (Artikel $artikel)
    // {
    //     $artikel->delete();
    //     session()->flash('success','pots deleted');
    //     // return back();
    //     return redirect('artikel');  
    // }


}
