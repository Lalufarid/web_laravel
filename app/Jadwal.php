<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = ['jadwal','gambar','users_id'];

    public function takeImage ()
    {
        return 'storage/' . $this->gambar;
    }
}

