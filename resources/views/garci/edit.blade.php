@include('intranet.header')

<h2>Editar Vídeo Qué grande es el cine</h2>

@if (count($errors) > 0)
    echo "No existe ese registro";
@endif

<?php
$arrPeliculas = array();
foreach ($peliculas as $item) {
    $arrPeliculas[$item["id"]] = $item["nom_pel_youtube"];
}

$arrCineastas = array();
foreach ($cineastas as $item) {
    $arrCineastas[$item["id"]] = $item["nom_art_youtube"];
}
$arrCineastas[0] = "";
?>

{!! Form::model($vidGarci, ['method' => 'PATCH','route' => ['garci.update', $vidGarci->id], 'files' => true]) !!}
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
            {{ Form::select('id_pelicula', $arrPeliculas, $vidGarci->id_pelicula) }}
        </div>
        <div class="form-group">
            <strong>Director:</strong>
            {{ Form::select('id_director', $arrCineastas, $vidGarci->id_director) }}
        </div>
        <div class="form-group">
            <strong>Actor 1:</strong>
            {{ Form::select('id_actor1', $arrCineastas, $vidGarci->id_actor1) }}
        </div>
        <div class="form-group">
            <strong>Actor 2:</strong>
            {{ Form::select('id_actor2', $arrCineastas, $vidGarci->id_actor2) }}
        </div>
        <div class="form-group">
            <strong>Actor 3:</strong>
            {{ Form::select('id_actor3', $arrCineastas, $vidGarci->id_actor3) }}
        </div>
        <div class="form-group">
            <strong>Slug:</strong>
            {!! Form::text('urlCorta', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>


        <div class="form-group">
            {{ Form::button('Modificar Vídeo Garci', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
        </div>

    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')