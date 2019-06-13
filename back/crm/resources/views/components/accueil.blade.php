@extends('template')

@section('titre')
    <title>Accueil - EB Connections</title>
@endsection

@section('navigation')
    <li>
        <a href="#">
            <i class="fa fa-link"></i>
            <span>Client</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-link"></i>
            <span>Projet</span>
        </a>
    </li>
    <li>
        <a href="#->">
            <i class="fa fa-link"></i>
            <span>Tâche</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-link"></i>
            <span>Objectif</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-link"></i>
            <span>Surveillance</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fa fa-link"></i>
            <span>Agenda</span>
        </a>
    </li>
@endsection

@section('contenu')
    <section class="content-header">
        <h1>
            Page Header
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>
    <section class="content container-fluid">
        <p>Ceci est un test</p>
    </section>
@endsection
