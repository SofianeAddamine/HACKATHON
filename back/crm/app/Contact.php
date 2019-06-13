<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function agendas()
    {
        return $this->hasMany('App\Agenda');
    }

    public function alertes()
    {
        return $this->hasMany('App\Alerte');
    }

    public function objectifs()
    {
        return $this->hasMany('App\Objectif');
    }

    public function mails(){
        return $this->belongsToMany('App\Mail');
    }

    public function qualiterelation()
    {
        return $this->belongsTo('App\QualiteRelation');
    }

    public function pays()
    {
        return $this->belongsTo('App\Pays');
    }

    public function etatrelation()
    {
        return $this->belongsTo('App\EtatRelation');
    }

    public function secteur()
    {
        return $this->belongsTo('App\Secteur');
    }

    public function groupe()
    {
        return $this->belongsTo('App\Groupe');
    }


}
