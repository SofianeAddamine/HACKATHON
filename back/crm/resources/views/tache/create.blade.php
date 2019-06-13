@extends('template')

@section('titre')
    <title>Ajouter une tâche - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Ajouter une tâche
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Ajouter une tâche</li>
    </ol>
@endsection

@section('contenu')

<div class="box box-primary pt-5">
    <div class="box-header with-border">
        <h1 class="box-title">Ajouter une tâche</h1>
    </div>
    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="datedebut">Date de début</label>
                <input type="date" class="form-control" id="datedebut" placeholder="Date de début">
            </div>
            <div class="form-group">
                <label for="datelimite">Date limite</label>
                <input type="date" class="form-control" id="datelimite" placeholder="Date limite">
            </div>
            <div class="form-group">
                <label for="affectation">Affectation</label>
                <input type="text" class="form-control" id="affectation" placeholder="Affectation">
            </div>
            <div class="md-form">
                <label for="contenu">Contenus de la tâche</label>
                <textarea id="contenu" class="md-textarea form-control" rows="3"></textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>

@endsection