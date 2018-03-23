@include('intranet.header')
<?php
$arrPeliculas = array();
foreach ($peliculas as $item) {
    $arrPeliculas[$item["id"]] = $item["nom_pel_youtube"];
}
$arrPeliculas[0] = ""; // por si no selecciona ninguno

$arrCineastas = array();
foreach ($cineastas as $item) {
    $arrCineastas[$item["id"]] = $item["nom_art_youtube"];
}
$arrCineastas[0] = ""; // por si no selecciona ninguno
?>

<h1>Alta Película Garci</h1>
{!! Form::open(array('route' => 'garci.store', 'files'=>true)) !!}
{{ csrf_field() }}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Foto vídeo 1:</strong>
            {!! Form::text('foto_video_garci', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Foto vídeo 2:</strong>
            {!! Form::text('foto_video_garci2', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Foto vídeo 3:</strong>
            {!! Form::text('foto_video_garci3', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Foto vídeo 4:</strong>
            {!! Form::text('foto_video_garci4', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Foto vídeo 5:</strong>
            {!! Form::text('foto_video_garci5', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Foto vídeo 6:</strong>
            {!! Form::text('foto_video_garci6', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Foto vídeo 7:</strong>
            {!! Form::text('foto_video_garci7', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Año:</strong>
            {!! Form::text('anno', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Película:</strong>
            {{ Form::select('id_pelicula', $arrPeliculas, "") }}
        </div>
        <div class="form-group">
            <strong>Director:</strong>
            {{ Form::select('id_director', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor 1:</strong>
            {{ Form::select('id_actor1', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor 2:</strong>
            {{ Form::select('id_actor2', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor 3:</strong>
            {{ Form::select('id_actor3', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            {{ Form::button('Alta vídeo Garci', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}
        </div>
    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')