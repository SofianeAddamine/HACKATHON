@extends('template')

@section('titre')
    <title>Objectif - EB Connections</title>
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{url('front/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('contenu-header')
    <h1>
        Tableau
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active"></li>
    </ol>
@endsection

@section('contenu')

    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12 col-sm-offset-1"><h1>Date</h1></div>
            <div class="col-sm-10 col-sm-offset-1">
                <div class="list-group" id="list1">
                    <a href="#" class="list-group-item active">Date</a>
                    <p class="list-group-item"> <input type="checkbox" class="pull-left">&nbsp; Hello world</p>
                    <p class="list-group-item"> <input type="checkbox" class="pull-left">&nbsp; Hello world</p>
                    <p class="list-group-item"> <input type="checkbox" class="pull-left">&nbsp; Hello world</p>
                    <p class="list-group-item"> <input type="checkbox" class="pull-left">&nbsp; Hello world</p>
                </div>
            </div>
        </div>
    </div>


@endsection