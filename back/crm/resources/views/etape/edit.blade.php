@extends('template')

@section('titre')
    <title>Éditer une étape - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Éditer une étape
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Éditer une étape</li>
    </ol>
@endsection

@section('contenu')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Éditer une étape</h3>
        </div>
        <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label for="etape">Étape</label>
                    <input type="text" class="form-control" id="etape" placeholder="Étape">
                </div>
                <div class="form-group">
                    <label for="affectation">Affectation</label>
                    <input type="text" class="form-control" id="affectation" placeholder="Affectation">
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection