@extends('template')

@section('titre')
    <title>Éditer un projet - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Éditer un projet
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Éditer un projet</li>
    </ol>
@endsection

@section('contenu')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Éditer un projet</h3>
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
                    <label for="datefin">Date de fin</label>
                    <input type="date" class="form-control" id="datefin" placeholder="Date de fin">
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection