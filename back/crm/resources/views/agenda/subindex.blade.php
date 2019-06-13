@extends('template')

@section('titre')
    <title>Ajouter un rendez-vous - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Ajouter un rendez-vous
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Agenda</li>
    </ol>
@endsection

@section('contenu')
    <div class="box">
        <div class="box-header">
       
            <h3 class="box-title">
            <a href="{{route('agenda.create')}}"><button type="submit" class="btn btn-primary">Créer un rdv <i class="fa fa-plus"></i></button></a>
            </h3>            
        </div>
       
        <div class="box-body">
            <table id="clients" class="table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>libelle</th>
                        <th>date</th>
                        <th>heure</th>
                        <th>note</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach ($agenda as $agendas)
                    <tr>
                   
                        <td>{{$agendas->libelle}}</td>
                        <td>{{$agendas->date}}</td>
                        <td>{{$agendas->note}}</td>                                               
                        
                        <td><a href="{{ route('agenda.show',['agenda'=>$agendas->id])}}"><button type="submit" name="voir" class="btn btn-success">Voir <i class="fa fa-eye"></i></button>
                        </a>
                        </td>
                        <td><a href="{{ route('agenda.edit',['agenda'=>$agendas->id])}}">
                        <button type="submit" name="edit" class="btn btn-warning">Modifier <i class="fa fa-edit"></i></button></a></td>
                        <td>{!!Form::open(['route'=>['agenda.destroy',$agendas->id],'method'=>'delete'])!!}
                        <button class="btn btn-danger">Supprimer <i class="fa fa-trash"></i></button></button>
                        {!!Form::close()!!}</td>
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection