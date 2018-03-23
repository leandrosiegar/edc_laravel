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

$arrColab = array();
$arrColab[0] = ""; // por si no selecciona ninguno
foreach ($colaboradores as $item) {
    $arrColab[$item["id"]] = $item["nom_colaborador"];
}

$arrBoolean = array();
$arrBoolean[0] = "No";
$arrBoolean[1] = "Sí";
?>


<h1>Alta Crítica</h1>
{!! Form::open(array('route' => 'criticas.store', 'files'=>true)) !!}
{{ csrf_field() }}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Película:</strong>
            {{ Form::select('id_pel_youtube', $arrPeliculas, "") }}
        </div>
        <div class="form-group">
            <strong>Director:</strong>
            {{ Form::select('id_director', $arrCineastas, "") }}
        </div>
        <div class="form-group">
            <strong>Colaborador:</strong>
            {{ Form::select('id_colab', $arrColab, "") }}
        </div>
        <div class="form-group">
            <strong>Nombre colaborador:</strong>
            {{ Form::textarea('critica') }}
        </div>
        <div class="form-group">
            <strong>Foto crítica:</strong>
            {!! Form::file('fotoCritica', array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Es artículo:</strong>
            {{ Form::select('esArticulo', $arrBoolean, "") }}
        </div>
        <div class="form-group">
            <strong>YouTube:</strong>
            {!! Form::text('youtube', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>


        <div class="form-group">
            {{ Form::button('Alta crítica', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}
        </div>
    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')