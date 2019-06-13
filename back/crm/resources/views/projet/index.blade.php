@extends('template')

@section('titre')
    <title>Projets - EB Connections</title>
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{url('front/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('contenu-header')
    <h1>
        Projets
        <small>Gestion des projets</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Projets</li>
    </ol>
@endsection

@section('contenu')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Projets</h3>
            <button type="submit" class="btn btn-primary">Créer <i class="fa fa-plus"></i></button>
        </div>
        <div class="box-body">
            <table id="projets" class="table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Abeudada</td>
                        <td>20/05/1975</td>
                        <td>20/05/1979</td>
                        <td><button type="submit" class="btn btn-success">Voir <i class="fa fa-eye"></i></button></td>
                        <td><button type="submit" class="btn btn-warning">Modifier <i class="fa fa-edit"></i></button></td>
                        <td><button type="submit" class="btn btn-danger">Supprimer <i class="fa fa-trash"></i></button></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th></th>
                        <th></th>
                        <th></th>
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
            $('#projets').DataTable({
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