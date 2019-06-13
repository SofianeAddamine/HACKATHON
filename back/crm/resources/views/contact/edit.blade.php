@extends('template')

@section('titre')
    <title>Éditer un contact - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Éditer un contact
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Éditer un contact</li>
    </ol>
@endsection

@section('contenu')
<div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Editer un contact</h3>
        </div>
        <form role="form" action="{{route('contact.update',$contact->id)}}" method="POST">
        @csrf
        <input name="_method" type="hidden" value="PUT">
            <div class="box-body">
                <div class="form-group">
                    <label for="entreprise">Entreprise</label>
                    <input type="text" class="form-control" name="entreprise" id="entreprise" placeholder="Entreprise" value="{{$contact->entreprise}}">
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" value="{{$contact->contact}}">
                </div>
                <div class="form-group">
                    <label for="fonction">Fonction</label>
                    <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Fonction" value="{{$contact->fonction}}">
                </div>
                <div class="form-group">
                    <label>Civilité</label>
                    <select name="civilite" class="form-control">
                    @if($contact->civilite == "homme")
                        <option selected value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    @else
                        <option value="homme">Homme</option>
                        <option selected value="femme">Femme</option>
                    @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax" value="{{$contact->fax}}">
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Adresse email" value="{{$contact->mail}}">
                </div>
                <div class="form-group">
                    <label for="web">Web</label>
                    <input type="text" class="form-control" id="web" name="web" placeholder="Web" value="{{$contact->web}}">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" value="{{$contact->adresse}}">
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" value="{{$contact->ville}}">
                </div>
                <div class="form-group">
                    <label for="cp">Code postal</label>
                    <input type="text" class="form-control" id="cp" name="cp" placeholder="Code postal" value="{{$contact->cp}}">
                </div>
                <div class="form-group">
                    <label for="fixe">Fixe</label>
                    <input type="text" class="form-control" id="fix" name="fix" placeholder="Fixe" value="{{$contact->fix}}">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="{{$contact->mobile}}">
                </div>
                <div class="form-group">
                    <label>Surveillance</label>
                    <select name="surveillance" class="form-control">
                    @if($contact->surveillance == 1)
                        <option selected value="1">Oui</option>
                        <option value="0">Non</option>
                    @else
                        <option value="1">Oui</option>
                        <option selected value="0">Non</option>
                    @endif
                    </select>
                </div>
                <div class="form-group">
                    <label>Secteur</label>
                    {{ Form::select("secteur",$secteurs,$contact->secteur_id,["class"=>"form-control"])}}
                </div>
                <div class="form-group">
                    <label>Groupe</label>
                    {{ Form::select("groupe",$groupes,$contact->groupe_id,["class"=>"form-control"])}}
                </div>
                <div class="form-group">
                    <label>Pays</label>
                    {{ Form::select("pays",$pays,$contact->pays_id,["class"=>"form-control"])}}
                </div>
                <div class="form-group">
                    <label>Qualité de relation</label>
                    {{ Form::select("qualite",$qualites,$contact->qualite_relation_id,["class"=>"form-control"])}}
                </div>
                <div class="form-group">
                    <label>Relation</label>
                    {{ Form::select("relation",$etats,$contact->etat_relation_id,["class"=>"form-control"])}}
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection