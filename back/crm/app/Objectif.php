<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
}
