@extends('template')

@section('titre')
    <title>Étape - EB Connections</title>
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{url('front/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('contenu-header')
    <h1>
        Étape
        <small>Gestion des étapes</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Étape</li>
    </ol>
@endsection

@section('contenu')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Étape</h3>
            <button type="submit" class="btn btn-primary">Créer <i class="fa fa-plus"></i></button>
        </div>
        <div class="box-body">
            <table id="etapes" class="table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Étape</th>
                        <th>Affectation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fake Étape</td>
                        <td>Fake Affectation</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Étape</th>
                        <th>Affectation</th>
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
            $('#etapes').DataTable({
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