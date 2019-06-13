@extends('template')

@section('titre')
    <title>Projet - EB Connections</title>
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{url('front/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('contenu-header')
    <h1>
        Création des objectifs
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Objectifs</li>
    </ol>
@endsection

@section('contenu')

<div class="box box-primary pt-5">
    <div class="box-header with-border">
        <h1 class="box-title">Ecrire </h1>
    </div>
    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Titre de l'objectif</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date de début</label>
                <input type="date" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="md-form">
                <label for="form7">Description de l'objectif</label>
                <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
            </div>
            <select class="mdb-select md-form">
                <option value="" disabled selected>Status de l'objectif</option>
                <option value="1">Validé</option>
                <option value="2">Pas encore validé</option>
            </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Libelle</label>
                <input type="text" name="libelle" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>

@endsection