<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }
}
