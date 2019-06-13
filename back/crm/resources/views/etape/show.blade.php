@extends('template')

@section('titre')
    <title>Voir une étape - EB Connections</title>
@endsection

@section('contenu-header')
    <h1>
        Voir une étape
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> EB Connections</a></li>
        <li class="active">Voir une étape</li>
    </ol>
@endsection

@section('contenu')
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Voir une étape</h3>
        </div>
        <div class="box-body">
            <dl class="dl-horizontal">
                <dt>Description lists</dt>
                <dd>A description list is perfect for defining terms.</dd>
                <dt>Euismod</dt>
                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                <dt>Malesuada porta</dt>
                <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                <dt>Felis euismod semper eget lacinia</dt>
                <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus.
                </dd>
            </dl>
        </div>
    </div>
@endsection