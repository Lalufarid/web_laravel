<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['title','slug','body','users_id','thumbnail','imageA','imageB','link'];

    public function takeImage ()
    {
        return 'storage/' . $this->thumbnail;
    }

    public function takeImageA ()
    {
        return 'storage/' . $this->imageA;
    }

    public function takeImageB ()
    {
        return 'storage/' . $this->imageB;
    }
    public function author()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
