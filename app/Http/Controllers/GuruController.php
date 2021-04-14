<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::paginate(10); 
        return view ('guru',['gurus'=>$gurus]);
    }

    public function indexGuru()
    {
        $gurus = Guru::paginate(10); 
        return view ('adminGuru',['gurus'=>$gurus]);
    }

    public function create()
    {
        return view ('guru.create',['guru'=>new Guru()]);
    }

    public function store()
    {

        $attr = $this->validateRequest();
        $attr['slug'] = \Str::slug(request('name'));

        $thumbnail = request()->file('thumbnail') ?  request()->file('thumbnail')->store("images/posts"):null;
        $attr['thumbnail'] = $thumbnail;

        $attr['users_id'] = auth()->id();

        Guru::create($attr);
        session()->flash('success','pots complete');
        // return back();
        return redirect('adminGuru');
    }

    public function edit(Guru $guru)
    {
        return view ('guru.edit', compact('guru'));
    }

    public function update(Guru $guru)
    {

        if(request()->file('thumbnail'))
        {
            \Storage::delete($guru->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("images/posts");

        }else{
            $thumbnail = $guru->thumbnail;
        }


        $attr = $this->validateRequest();
        $attr['thumbnail'] = $thumbnail;
        $guru->update($attr); 
        session()->flash('success','pots Updated');
        // return back();
        return redirect('adminGuru');  
    }

    public function destroy (Guru $guru)
    {
        \Storage::delete($guru->thumbnail);
        $guru->delete();
        session()->flash('success','pots deleted');
        // return back();
        return redirect('adminGuru');  
    }

    public function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'alamat' => 'required',
            'mapel' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:4056'
        ]);
    }
}
