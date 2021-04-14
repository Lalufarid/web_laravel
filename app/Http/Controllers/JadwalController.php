<?php

namespace App\Http\Controllers;

use App\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::paginate(10); 
        return view ('kurikulum',['jadwals'=>$jadwals]);
    }

    public function indexJadwal()
    {
        $jadwals = Jadwal::paginate(10); 
        return view ('adminKurikulum',['jadwals'=>$jadwals]);
    }

    public function create()
    {
        return view ('jadwal.create',['jadwal'=>new Jadwal(),
        ]);
    }

    public function store()
    {
        $jdw = $this->validateRequest();

        $gambar = request()->file('gambar') ?  request()->file('gambar')->store("images/posts"):null;
        
        $jdw['gambar'] = $gambar;
        $jdw['users_id'] = auth()->id();
        Jadwal::create($jdw);

        session()->flash('success','pots complete');
        // return back();
        return redirect('adminKurikulum');
    }

    public function edit(Jadwal $jadwal)
    {
        return view ('jadwal.edit', compact('jadwal'));
    }

    public function update(Jadwal $jadwal)
    {

        if(request()->file('gambar'))
        {
            \Storage::delete($jadwal->gambar);
            $gambar = request()->file('gambar')->store("gambars/posts");

        }else{
            $gambar = $jadwal->gambar;
        }


        $jdw = $this->validateRequest();
        $jdw['gambar'] = $gambar;
        $jadwal->update($jdw); 
        session()->flash('success','pots Updated');
        // return back();
        return redirect('adminKurikulum');  
    }

    public function destroy (Jadwal $jadwal)
    {
        \Storage::delete($jadwal->gambar);
        $jadwal->delete();
        session()->flash('success','pots deleted');
        // return back();
        return redirect('admin');  
    }

    public function validateRequest()
    {
        return request()->validate([
            'jadwal' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:4056'
            
        ]);
    }
}
