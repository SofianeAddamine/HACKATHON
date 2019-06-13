<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    public function projet()
    {
        return $this->belongsTo('App\Projet');
    }
}
