@extends('template')

@section('titre')
    <title>Secteurs - EB Connections</title>
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{url('front/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('contenu-header')
    <h1>
        Secteurs
        <small>Gestion des secteurs</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Secteurs</li>
    </ol>
@endsection

@section('contenu')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Secteurs</h3>
            <a href="{{route('secteur.create')}}"><button type="submit" class="btn btn-primary">Créer <i class="fa fa-plus"></i></button></a>
        </div>
        <div class="box-body">
            <table id="surveillances" class="table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Libellé</th>
                        <th>Voir</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($secteur as $secteurs)
                    <tr>
                        <td>{{$secteurs->libelle}}</td>
                        <td><button type="submit" name="voir" class="btn btn-success">Voir <i class="fa fa-eye"></i></button></td>
                        <td><a href="{{route('secteur.edit',['secteur'=>$secteurs->id])}}" class="btn btn-warning">Modifier <i class="fa fa-edit"></i></a></td>
                        <td><button type="submit" name="delete" class="btn btn-danger">Supprimer <i class="fa fa-trash"></i></button></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Libellé</th>
                        <th>Voir</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('additional-js')
    <script src="{{url('front/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('front/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#surveillances').DataTable({
                "scrollX": true,
                "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                },
                colReorder: {
                realtime: false
                }
            });
        });
    </script>
@endsection