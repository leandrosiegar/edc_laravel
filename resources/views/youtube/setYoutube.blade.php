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
<h1>Linkar Youtube con cineastas</h1>
{!! Form::open(array('route' => 'youtube.store_setYoutube', 'files'=>true)) !!}
{{ csrf_field() }}

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
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
            <strong>Actor 4:</strong>
            {{ Form::select('id_actor4', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            {{ Form::button('Linkar cineastas', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}
        </div>
    </div>
</div>

{!! Form::close() !!}

@include('intranet.footer')