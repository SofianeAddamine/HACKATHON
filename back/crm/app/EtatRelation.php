<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtatRelation extends Model
{
    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }
}
