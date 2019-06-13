@extends('template')

@section('titre')
    <title>Ajouter un secteur - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Ajouter un secteur
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Ajouter un secteur</li>
    </ol>
@endsection

@section('contenu')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ajouter un secteur</h3>
        </div>
        <form role="form" action="{{route('secteur.store')}}" method="post">
        @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="libelle">Libellé</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Libellé">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection