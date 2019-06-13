@extends('template')

@section('titre')
    <title>Éditer un secteur - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Éditer un secteur
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Éditer un secteur</li>
    </ol>
@endsection

@section('contenu')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Éditer un secteur</h3>
        </div>
        <form role="form" action="{{route('secteur.update', $secteur->id)}}" method="post">
        @csrf
        <input name="_method" type="hidden" value="PUT">
            <div class="box-body">
                <div class="form-group">
                    <label for="libelle">Libellé</label>
                    <input type="text" class="form-control" id="libelle" name="libelle" value="{{$secteur->libelle}}" placeholder="Libellé">
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
    </div>
@endsection