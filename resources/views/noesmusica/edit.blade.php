@include('intranet.header')

<h2>Modificar concierto</h2>

@if (count($errors) > 0)
    echo "No existe ese registro";
@endif

<?php
$arrPeliculas = array();
$arrPeliculas[0] = "";
foreach ($peliculas as $item) {
    $arrPeliculas[$item["id"]] = $item["nom_pel_youtube"];
}

$arrCineastas = array();
$arrCineastas[0] = "";
foreach ($cineastas as $item) {
    $arrCineastas[$item["id"]] = $item["nom_art_youtube"];
}

?>

{!! Form::model($noesmusica, ['method' => 'PATCH','route' => ['noesmusica.update', $noesmusica->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nom Video música:</strong>
            {!! Form::text('nom_video_musica', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Foto Video música:</strong>
            {!! Form::text('foto_video_musica', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Película:</strong>
            {{ Form::select('id_pelicula', $arrPeliculas, $noesmusica->id_pelicula) }}
        </div>
        <div class="form-group">
            <strong>Compositor:</strong>
            {{ Form::select('id_compositor', $arrCineastas, $noesmusica->id_compositor) }}
        </div>
        <div class="form-group">
            <strong>Slug:</strong>
            {!! Form::text('urlCorta', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>


        <div class="form-group">
            {{ Form::button('Modificar Concierto', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
        </div>

    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')
