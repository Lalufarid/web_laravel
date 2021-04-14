<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function artikels ()
    {
        return $this->hasMany(Artikel::class);
    }
}
