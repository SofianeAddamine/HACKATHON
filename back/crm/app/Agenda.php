<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contact;

class Agenda extends Model
{
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
}
