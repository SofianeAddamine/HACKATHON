@extends('template')

@section('titre')
    <title>Éditer un groupe - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Éditer un groupe
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Éditer un groupe</li>
    </ol>
@endsection

@section('contenu')
    <div class="box box-primary pt-5">
        <div class="box-header with-border">
            <h1 class="box-title">Éditer un groupe</h1>
        </div>
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
    </div>
@endsection