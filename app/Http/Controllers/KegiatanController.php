<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $humas = Kegiatan::paginate(10); 
        return view ('humas',['humas'=>$humas]);
    }
    public function indexHumas()
    {
        $humas = Kegiatan::paginate(10); 
        return view ('adminHumas',['humas'=>$humas]);
    }

    public function kegiatan(Kegiatan $humas)
    {
        return view ('humas.kegiatan',compact('humas'));
    }


    public function create()
    {
        return view ('humas.create',['humas'=>new Kegiatan()]);
    }

    public function store()
    {
        $art = $this->validateRequest();
        $art['slug'] = \Str::slug(request('title'));
        $thumbnail = request()->file('thumbnail') ?  request()->file('thumbnail')->store("images/posts"):null;  
        $imageA = request()->file('imageA') ?  request()->file('imageA')->store("images/posts"):null; 
        $imageB = request()->file('imageB') ?  request()->file('imageB')->store("images/posts"):null;
        $link = request('link');
        $art['link'] = $link;
        $art['thumbnail'] = $thumbnail;
        $art['imageA'] = $imageA;
        $art['imageB'] = $imageB;
        $art['users_id'] = auth()->id();
        Kegiatan::create($art);

        session()->flash('success','pots complete');
        // return back();
        return redirect('adminHumas');
    }

    public function edit(Kegiatan $humas)
    {
        return view ('humas.edit', compact('humas'));
    }

    public function update(Kegiatan $humas)
    {
        if(request()->file('thumbnail'))
        {
            \Storage::delete($humas->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("images/posts");

        }else{
            $thumbnail = $humas->thumbnail;
        }

        if(request()->file('imageA'))
        {
            \Storage::delete($humas->imageA);
            $imageA = request()->file('imageA')->store("images/posts");

        }else{
            $imageA = $humas->imageA;
        }

        if(request()->file('imageB'))
        {
            \Storage::delete($humas->imageB);
            $imageB = request()->file('imageB')->store("images/posts");

        }else{
            $imageB = $humas->imageB;
        }

        $link = request('link');
        $attr['link'] = $link;
        $attr = $this->validateRequest();
        $attr['thumbnail'] = $thumbnail;
        $attr['imageA'] = $imageA; 
        $attr['imageB'] = $imageB;
        $humas->update($attr); 
        session()->flash('success','pots Updated');
        // return back();
        return redirect('adminHumas');  
    }

    public function destroy (Kegiatan $humas)
    {
        \Storage::delete($humas->thumbnail);
        \Storage::delete($humas->imageA);
        \Storage::delete($humas->imageB);
        $link = request('link');
        $attr['link'] = $link;
        $humas->delete($attr);
        session()->flash('success','pots deleted');
        // return back();
        return redirect('adminHumas');  
    }

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'body' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:4056',
            'imageA' => 'image|mimes:jpeg,png,jpg|max:4056',
            'imageB' => 'image|mimes:jpeg,png,jpg|max:4056'

        ]);
    }

}
