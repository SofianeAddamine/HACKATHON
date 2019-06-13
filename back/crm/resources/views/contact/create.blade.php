@extends('template')

@section('titre')
    <title>Ajouter un contact - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Ajouter un contact
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Ajouter un contact</li>
    </ol>
@endsection

@section('contenu')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ajouter un contact</h3>
        </div>
        <form role="form" action="{{route('contact.store')}}" method="post">
        @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="entreprise">Entreprise</label>
                    <input type="text" class="form-control" name="entreprise" id="entreprise" placeholder="Entreprise">
                </div>
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
                </div>
                <div class="form-group">
                    <label for="fonction">Fonction</label>
                    <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Fonction">
                </div>
                <div class="form-group">
                    <label>Civilité</label>
                    <select name="civilite" class="form-control">
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fax">Fax</label>
                    <input type="text" class="form-control" id="fax" name="fax" placeholder="Fax">
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Adresse email">
                </div>
                <div class="form-group">
                    <label for="web">Web</label>
                    <input type="text" class="form-control" id="web" name="web" placeholder="Web">
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
                </div>
                <div class="form-group">
                    <label for="cp">Code postal</label>
                    <input type="text" class="form-control" id="cp" name="cp" placeholder="Code postal">
                </div>
                <div class="form-group">
                    <label for="fixe">Fixe</label>
                    <input type="text" class="form-control" id="fix" name="fix" placeholder="Fixe">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                </div>
                <div class="form-group">
                    <label>Surveillance</label>
                    <select name="surveillance" class="form-control">
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Secteur</label>
                    <select name="secteur" class="form-control">
                        @foreach($secteurs as $secteur)
                            <option value="{{$secteur->id}}">{{$secteur->libelle}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Groupe</label>
                    <select name="groupe" class="form-control">
                    @foreach($groupes as $groupe)
                            <option value="{{$groupe->id}}">{{$groupe->libelle}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Pays</label>
                    <select name="pays" class="form-control">
                        @foreach($pays as $pay)
                            <option value="{{$pay->id}}">{{$pay->libelle}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Qualité de relation</label>
                    <select name="qualite" class="form-control">
                        @foreach($qualites as $qualite)
                            <option value="{{$qualite->id}}">{{$qualite->libelle}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Relation</label>
                    <select name="relation" class="form-control">
                    @foreach($etats as $etat)
                        <option value="{{$etat->id}}">{{$etat->libelle}}</option>
                    @endforeach
                    </select>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection