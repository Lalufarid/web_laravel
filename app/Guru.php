<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = ['name','slug','alamat','mapel','users_id','thumbnail'];

    public function takeImage ()
    {
        return 'storage/' . $this->thumbnail;
    }
}

