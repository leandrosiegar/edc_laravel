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

<h1>Alta Documental</h1>
{!! Form::open(array('route' => 'documental.store', 'files'=>true)) !!}
{{ csrf_field() }}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre documental:</strong>
            {!! Form::text('nom_documental', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Foto documental:</strong>
            {!! Form::text('foto_documental', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Película:</strong>
            {{ Form::select('id_pelicula', $arrPeliculas, "") }}
        </div>
        <div class="form-group">
            <strong>Cineasta:</strong>
            {{ Form::select('id_cineasta', $arrCineastas, "") }}
        </div>

        <div class="form-group">
            {{ Form::button('Alta documental', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}
        </div>
    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')