@extends('template')

@section('titre')
    <title>Objectif - EB Connections</title>
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{url('front/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('contenu-header')
    <h1>
        Objectif
        <small>Gestion des objectifs</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Objectifs</li>
    </ol>
@endsection

@section('contenu')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Nouvel objectif</h3>
            <button type="submit" class="btn btn-primary">Créer <i class="fa fa-plus"></i></button>
        </div>
        <div class="box-body">
            <table id="clients" class="table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Libelle</th>
                        <th>Voir</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fake titre</td>
                        <td>Fake date</td>
                        <td>Fake description</td>
                        <td>Fake status</td>
                        <td>Fake libelle</td>
                        <td><button type="submit" name="voir" class="btn btn-success">Voir <i class="fa fa-eye"></i></button></td>
                        <td><button type="submit" name="edit" class="btn btn-warning">Modifier <i class="fa fa-edit"></i></button></td>
                        <td><button type="submit" name="delete" class="btn btn-danger">Supprimer <i class="fa fa-trash"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('additional-js')
    <script src="{{url('front/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('front/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#clients').DataTable({
                "scrollX": true,
                "language": {
                        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                },
                colReorder: {
                realtime: false
                }
            });
            $('#prospects').DataTable({
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