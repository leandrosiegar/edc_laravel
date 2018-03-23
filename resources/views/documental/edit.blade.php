@include('intranet.header')

<h2>Modificar documental</h2>

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

{!! Form::model($documental, ['method' => 'PATCH','route' => ['documental.update', $documental->id], 'files' => true]) !!}
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
            {{ Form::select('id_pelicula', $arrPeliculas, $documental->id_pelicula) }}
        </div>
        <div class="form-group">
            <strong>Cineasta:</strong>
            {{ Form::select('id_cineasta', $arrCineastas, $documental->id_cineasta) }}
        </div>
        <div class="form-group">
            <strong>Slug:</strong>
            {!! Form::text('urlCorta', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>


        <div class="form-group">
            {{ Form::button('Modificar Documental', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
        </div>

    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')
