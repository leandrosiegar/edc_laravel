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

<h1>Alta Película Doblaje</h1>
{!! Form::open(array('route' => 'doblaje.store', 'files'=>true)) !!}
{{ csrf_field() }}
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
            {{ Form::select('id_pelicula', $arrPeliculas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor original 1:</strong>
            {{ Form::select('id_actor_orig1', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor doblaje 1:</strong>
            {{ Form::select('id_actor_doblaje1', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor original 2:</strong>
            {{ Form::select('id_actor_orig2', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor doblaje 2:</strong>
            {{ Form::select('id_actor_doblaje2', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor original 3:</strong>
            {{ Form::select('id_actor_orig3', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor doblaje 3:</strong>
            {{ Form::select('id_actor_doblaje3', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor original 4:</strong>
            {{ Form::select('id_actor_orig4', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Actor doblaje 4:</strong>
            {{ Form::select('id_actor_doblaje4', $arrCineastas, "") }}
        </div>

        <div class="form-group">
            {{ Form::button('Alta doblaje', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}
        </div>
    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')