@extends('template')

@section('titre')
    <title>Contact - EB Connections</title>
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{url('front/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('contenu-header')
    <h1>
        Clients & Prospects
        <small>Gestion des clients et des prospects</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Client & Prospects</li>
    </ol>
@endsection

@section('contenu')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Clients</h3>
            <a href="{{route('contact.create')}}"><button class="btn btn-primary">Créer <i class="fa fa-plus"></i></button></a>
        </div>
        <div class="box-body">
            <table id="clients" class="table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Entreprise</th>
                        <th>Contact</th>
                        <th>Fixe</th>
                        <th>Mobile</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($contacts as $contact)
                            @if($contact->groupe->libelle == "client")
                    <tr>
                            <td>{{$contact->entreprise }}</td>
                            <td>{{$contact->contact}}</td>
                            <td>{{$contact->fix}}</td>
                            <td>{{$contact->mobile}}</td>
                            <td><a href="{{route('contact.show',['contact'=>$contact->id])}}"><button class="btn btn-success">Voir <i class="fa fa-eye"></i></button></a></td>
                            <td><a href="{{route('contact.edit',['contact'=>$contact->id])}}"><button class="btn btn-warning">Modifier <i class="fa fa-edit"></i></button></a></td>
                            <td>{!!Form::open(['route'=>['contact.destroy',$contact->id],'method'=>'delete'])!!}
                            <button class="btn btn-danger">Supprimer <i class="fa fa-trash"></i></button>
                        {!!Form::close()!!}</td>
                    </tr>
                            @endif
                        @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Entreprise</th>
                        <th>Contact</th>
                        <th>Fixe</th>
                        <th>Mobile</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Prospects</h3>
            <button type="submit" class="btn btn-primary">Créer <i class="fa fa-plus"></i></button>
        </div>
        <div class="box-body">
            <table id="prospects" class="table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Entreprise</th>
                        <th>Contact</th>
                        <th>Fixe</th>
                        <th>Mobile</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                            @if($contact->groupe->libelle == "prospect")
                    <tr>
                            <td>{{$contact->entreprise }}</td>
                            <td>{{$contact->contact}}</td>
                            <td>{{$contact->fix}}</td>
                            <td>{{$contact->mobile}}</td>
                            <td><a href="{{route('contact.show',['contact'=>$contact->id])}}"><button class="btn btn-success">Voir <i class="fa fa-eye"></i></button></a></td>
                            <td><a href="{{route('contact.edit',['contact'=>$contact->id])}}"><button class="btn btn-warning">Modifier <i class="fa fa-edit"></i></button></a></td>
                            <td>{!!Form::open(['route'=>['contact.destroy',$contact->id],'method'=>'delete'])!!}
                            <button class="btn btn-danger">Supprimer <i class="fa fa-trash"></i></button>
                        {!!Form::close()!!}</td>
                    </tr>
                            @endif
                        @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Entreprise</th>
                        <th>Contact</th>
                        <th>Fixe</th>
                        <th>Mobile</th>
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