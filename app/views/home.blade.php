@extends('layout')
@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    @if (Auth::check())
    <div class="container">
        <h1>Connecting Hearts</h1>
        <p>Este es un sistema de información administrativa de la Fundación Corazones En Acción Colombia, Si usted llego a este sitio y no tiene usuario y contraseña solicitelo en el siguiente link Gracias!</p>
        <p>
            <a href="{{ route('panel') }}" class="btn btn-primary btn-lg" role="button">
                Panel de Control &raquo;</a>
        </p>
    </div>
    @else
    <div class="container">
        <h1>Connecting Hearts</h1>
        <p>Este es un sistema de información administrativa de la Fundación Corazones En Acción Colombia, Si usted llego a este sitio y no tiene usuario y contraseña solicitelo en el siguiente link Gracias!</p>
        <p>
            <a href="{{ route('sign_up') }}" class="btn btn-primary btn-lg" role="button">
                Solicitar Acceso &raquo;</a>
        </p>
    </div>
    @endif
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>
</div>

@stop