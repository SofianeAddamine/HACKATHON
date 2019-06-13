@extends('template')

@section('titre')
    <title>Voir une alerte - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Voir une alerte
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Voir une alerte</li>
    </ol>
@endsection

@section('contenu')
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Voir une alerte</h3>
        </div>
        <div class="box-body">
            
        @foreach($agenda as $agendas)
            <dl class="dl-horizontal">
           
            <td>{{$agendas->libelle}}</td>
                        <td>{{$agendas->date}}</td>
                        <td>{{$agendas->note}}</td> 
               
            </dl>
            @endforeach
        </div>
    </div>
@endsection