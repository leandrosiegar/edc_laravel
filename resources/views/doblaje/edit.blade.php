@include('intranet.header')

<h2>Editar Doblaje</h2>

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

{!! Form::model($doblaje, ['method' => 'PATCH','route' => ['doblaje.update', $doblaje->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Foto doblaje:</strong>
            {!! Form::text('foto_pel_doblaje', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Año:</strong>
            {!! Form::text('anno', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Película:</strong>
            {{ Form::select('id_pelicula', $arrPeliculas, $doblaje->id_pelicula) }}
        </div>
        <div class="form-group">
            <strong>Actor orig 1:</strong>
            {{ Form::select('id_actor_orig1', $arrCineastas, $doblaje->id_actor_orig1) }}
        </div>
        <div class="form-group">
            <strong>Actor doblaje 1:</strong>
            {{ Form::select('id_actor_doblaje1', $arrCineastas, $doblaje->id_actor_doblaje1) }}
        </div>
        <div class="form-group">
            <strong>Actor orig 2:</strong>
            {{ Form::select('id_actor_orig2', $arrCineastas, $doblaje->id_actor_orig2) }}
        </div>
        <div class="form-group">
            <strong>Actor doblaje 2:</strong>
            {{ Form::select('id_actor_doblaje2', $arrCineastas, $doblaje->id_actor_doblaje2) }}
        </div>
        <div class="form-group">
            <strong>Actor orig 3:</strong>
            {{ Form::select('id_actor_orig3', $arrCineastas, $doblaje->id_actor_orig3) }}
        </div>
        <div class="form-group">
            <strong>Actor doblaje 3:</strong>
            {{ Form::select('id_actor_doblaje3', $arrCineastas, $doblaje->id_actor_doblaje3) }}
        </div>
        <div class="form-group">
            <strong>Actor orig 4:</strong>
            {{ Form::select('id_actor_orig4', $arrCineastas, $doblaje->id_actor_orig4) }}
        </div>
        <div class="form-group">
            <strong>Actor doblaje 4:</strong>
            {{ Form::select('id_actor_doblaje4', $arrCineastas, $doblaje->id_actor_doblaje4) }}
        </div>
        <div class="form-group">
            <strong>Slug:</strong>
            {!! Form::text('urlCorta', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>


        <div class="form-group">
            {{ Form::button('Modificar Doblaje', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
        </div>

    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')
