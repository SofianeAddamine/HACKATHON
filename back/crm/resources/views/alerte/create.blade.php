@extends('template')

@section('titre')
    <title>Ajouter une alerte - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Ajouter une alerte
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Ajouter une alerte</li>
    </ol>
@endsection

@section('contenu')
    <div class="box box-primary pt-5">
        <div class="box-header with-border">
            <h1 class="box-title">Ajouter une alerte</h1>
        </div>
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" class="form-control" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" id="date" class="form-control" placeholder="Date">
                </div>
                <div class="md-form">
                    <label for="heure">Heure</label>
                    <input type="time" id="heure" class="form-control" placeholder="Heure">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
    </div>
@endsection