@include('intranet.header')
<?php
$arrPeliculas = array();
$arrPeliculas[0] = ""; // por si no selecciona ninguno
foreach ($peliculas as $item) {
    $arrPeliculas[$item["id"]] = $item["nom_pel_youtube"];
}


$arrCineastas = array();
$arrCineastas[0] = ""; // por si no selecciona ninguno
foreach ($cineastas as $item) {
    $arrCineastas[$item["id"]] = $item["nom_art_youtube"];
}

?>

<h1>Alta Concierto No es música, es cine</h1>
{!! Form::open(array('route' => 'noesmusica.store', 'files'=>true)) !!}
{{ csrf_field() }}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom Vídeo Música:</strong>
            {!! Form::text('nom_video_musica', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Foto Vídeo Música:</strong>
            {!! Form::text('foto_video_musica', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Película:</strong>
            {{ Form::select('id_pelicula', $arrPeliculas, "") }}
        </div>
        <div class="form-group">
            <strong>Compositor:</strong>
            {{ Form::select('id_compositor', $arrCineastas, "") }}
        </div>

        <div class="form-group">
            {{ Form::button('Alta Concierto', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}
        </div>
    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')