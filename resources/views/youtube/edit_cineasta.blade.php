@include('intranet.header')

<h2>Editar Cineasta YouTube</h2>

@if (count($errors) > 0)
    echo "No existe ese registro";
@endif

{!! Form::model($artYoutube, ['method' => 'PATCH','route' => ['artYoutube.update', $artYoutube->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('nom_art_youtube', null, array('placeholder' => 'Nombre cineasta','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Surname:</strong>
            {!! Form::text('surname', null, array('placeholder' => 'Surname','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Num Referencias:</strong>
            {!! Form::text('num_referencias', null, array('placeholder' => 'Num Referencias','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <p><img class="imgCineasta" src="{!! asset('images/cineastas/'.$artYoutube->nom_foto) !!}"></p>
            {{ Form::file('nomFoto', $attributes = array('enctype' => 'multipart/form-data')) }}
        </div>
        <div class="form-group">
            {{ Form::button('Modificar Cineasta YouTube', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
        </div>


    </div>


</div>
{!! Form::close() !!}

@include('intranet.footer')