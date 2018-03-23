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


?>


<h2>Editar hist_youtube</h2>

@if (count($errors) > 0)
    echo "No existe ese registro";
@endif

{!! Form::model($arrHistPelYoutube, ['method' => 'POST','route' => ['youtube.update-hist-youtube', $arrHistPelYoutube[0]->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Película:</strong>
            {{ Form::select('id_pel_youtube', $arrPeliculas, $arrHistPelYoutube[0]->id_pel_youtube) }}
        </div>

        <div class="form-group">
            <strong>Director:</strong>
            <?php
            $idSelected = 0;
            if (isset($arrHistPelYoutube[0])) {
                $idSelected = $arrHistPelYoutube[0]->id_art_youtube;
            }
            ?>
            {{ Form::select('id_director', $arrCineastas, $idSelected) }}
        </div>


        <div class="form-group">
            <strong>Actor 1:</strong>
            <?php
            $idSelected = 0;
            if (isset($arrHistPelYoutube[1])) {
                $idSelected = $arrHistPelYoutube[1]->id_art_youtube;
            }
            ?>
            {{ Form::select('id_actor1', $arrCineastas, $idSelected) }}
        </div>

        <div class="form-group">
            <strong>Actor 2:</strong>
            <?php
            $idSelected = 0;
            if (isset($arrHistPelYoutube[2])) {
                $idSelected = $arrHistPelYoutube[2]->id_art_youtube;
            }
            ?>
            {{ Form::select('id_actor2', $arrCineastas, $idSelected) }}
        </div>

        <div class="form-group">
            <strong>Actor 3:</strong>
            <?php
            $idSelected = 0;
            if (isset($arrHistPelYoutube[3])) {
                $idSelected = $arrHistPelYoutube[3]->id_art_youtube;
            }
            ?>
            {{ Form::select('id_actor3', $arrCineastas, $idSelected) }}
        </div>

        <div class="form-group">
            <strong>Actor 4:</strong>
            <?php
            $idSelected = 0;
            if (isset($arrHistPelYoutube[4])) {
                $idSelected = $arrHistPelYoutube[4]->id_art_youtube;
            }
            ?>
            {{ Form::select('id_actor4', $arrCineastas, $idSelected) }}
        </div>


        <div class="form-group">
            {{ Form::button('Modificar hist_YouTube', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
        </div>


    </div>


</div>
{!! Form::close() !!}

@include('intranet.footer')