<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public function etapes()
    {
        return $this->hasMany('App\Etape');
    }
}
