@extends('template')

@section('titre')
    <title>Agenda - EB Connections</title>
@endsection

@section('additional-css')
  <link rel="stylesheet" href="{{url('front/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
  <link rel="stylesheet" href="{{url('front/bower_components/fullcalendar/dist/fullcalendar.print.min.css')}}" media="print">
@endsection

@section('contenu')
    
<div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ajouter une activitée</h3>
        </div>
        <form role="form" action="{{route('agenda.store')}}" method="post">
        @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="libelle">Libelle</label>
                    <input type="text" class="form-control" name="libelle" id="libelle" placeholder="libelle">
                </div>
                
                <div class="form-group">
                    <label for="date">Date</label>
                    <input required="required" name="date" type="date" class="form-control" id="date" >
                </div>
                
                <div class="form-group">
                    <label for="heure">Heure</label>
                    <input required="required" name="heure" type="time" class="form-control" id="heure" >
                </div>
                
                <div class="form-group">
                    <label for="note">Note</label>
                    <input type="text" class="form-control" id="note" name="note" placeholder="note">
                </div>
                
               
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Créer</button>
            </div>
        </form>
    </div>
@endsection

