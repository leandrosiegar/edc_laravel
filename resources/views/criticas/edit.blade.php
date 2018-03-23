@include('intranet.header')
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

$arrColab = array();
$arrColab[0] = "";
foreach ($colaboradores as $item) {
    $arrColab[$item["id"]] = $item["nom_colaborador"];
}

$arrBoolean = array();
$arrBoolean[0] = "No";
$arrBoolean[1] = "Sí";

?>
<h1>Modificar Crítica</h1>
{!! Form::model($critica, ['method' => 'PATCH','route' => ['criticas.update', $critica->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Película:</strong>
            {{ Form::select('id_pel_youtube', $arrPeliculas, $critica->id_pel_youtube) }}
        </div>
        <div class="form-group">
            <strong>Director:</strong>
            {{ Form::select('id_director', $arrCineastas, $critica->id_director) }}
        </div>
        <div class="form-group">
            <strong>Colaborador:</strong>
            {{ Form::select('id_colab', $arrColab, $critica->id_colab) }}
        </div>
        <div class="form-group">
            <strong>Crítica:</strong>
            {{ Form::textarea('critica') }}
        </div>
        <div class="form-group">
            <img src="{!! asset('images/criticas/'.$critica->fotoCritica) !!}">
            <strong>Foto crítica:</strong>
            {!! Form::file('fotoCritica', array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Es artículo:</strong>
            {{ Form::select('esArticulo', $arrBoolean, $critica->esArticulo) }}
        </div>
        <div class="form-group">
            <strong>Votos:</strong>
            {!! Form::text('votos', $critica->votos, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Total Punt:</strong>
            {!! Form::text('totalPunt', $critica->totalPunt, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>YouTube:</strong>
            {!! Form::text('youtube', $critica->youtube, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Hits:</strong>
            {!! Form::text('hits', $critica->hits, array('placeholder' => '','class' => 'form-control')) !!}
        </div>



        <div class="form-group">
            {{ Form::button('Modificar Crítica', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
        </div>

    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')
