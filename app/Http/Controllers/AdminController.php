<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Artikel;
use App\Guru;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $artikels = Artikel::paginate(10); 
        return view ('admin',['artikels'=>$artikels]);
    }

    public function create()
    {
        return view ('admin.create',[
            'artikel'=>new Artikel(),
            'admins' => Admin::get(),
        ]);
    }

    public function store()
    {
        $art = $this->validateRequest();
        $slug = \Str::slug(request('title'));
        $art['slug'] = $slug;

        $link = request('link');

        $thumbnail = request()->file('thumbnail') ?  request()->file('thumbnail')->store("images/posts"):null;
        $imageA = request()->file('imageA') ?  request()->file('imageA')->store("images/posts"):null; 
        $imageB = request()->file('imageB') ?  request()->file('imageB')->store("images/posts"):null;
        
        $art['link'] = $link;
        $art['thumbnail'] = $thumbnail;
        $art['imageA'] = $imageA;
        $art['imageB'] = $imageB;

        $art['users_id'] = auth()->id();
        $post = Artikel::create($art);

        session()->flash('success','pots complete');
        // return back();
        return redirect('admin');
    }
    
    public function edit(Artikel $artikel)
    {
        $admins = Admin::get();
        return view ('admin.edit', compact('artikel','admins'));
    }
 
    public function update(Artikel $artikel)
    {

        if(request()->file('thumbnail'))
        {
            \Storage::delete($artikel->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("images/posts");

        }else{
            $thumbnail = $artikel->thumbnail;
        }
        if(request()->file('imageA'))
        {
            \Storage::delete($artikel->imageA);
            $imageA = request()->file('imageA')->store("images/posts");

        }else{
            $imageA = $artikel->imageA;
        }

        if(request()->file('imageB'))
        {
            \Storage::delete($artikel->imageB);
            $imageB = request()->file('imageB')->store("images/posts");

        }else{
            $imageB = $artikel->imageB;
        }

        

        $art = $this->validateRequest();
        $link = request('link');
        $art['link'] = $link;

        $art['thumbnail'] = $thumbnail;
        $art['imageA'] = $imageA; 
        $art['imageB'] = $imageB;
        $artikel->update($art); 
        session()->flash('success','pots Updated');
        // return back();
        return redirect('admin');  
    }

    public function destroy (Artikel $artikel)
    {
        \Storage::delete($artikel->thumbnail);
        \Storage::delete($artikel->imageA);
        \Storage::delete($artikel->imageB);
        $link = request('link');
        $art['link'] = $link;
        $artikel->delete($art);
        session()->flash('success','pots deleted');
        // return back();
        return redirect('admin');  
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
