@extends('template')

@section('titre')
    <title>Projet - EB Connections</title>
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{url('front/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('contenu-header')
    <h1>
        Editer une qualite-relation
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Qualite-relation</li>
    </ol>
@endsection

@section('contenu')

<div class="box box-primary pt-5">
    <div class="box-header with-border">
        <h1 class="box-title">Qualité-relation</h1>
    </div>
    <form role="form">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Nom :</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>

@endsection