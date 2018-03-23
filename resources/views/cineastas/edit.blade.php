@include('intranet.header')

<h2>Editar Cineasta</h2>

@if (count($errors) > 0)
    echo "No existe ese registro";
@endif

<?php
$arrDecada = array('1920', '1930', '1940', '1950', '1960', '1970', '1980', '1990', '2000', '2010');
?>

{!! Form::model($cineasta, ['method' => 'PATCH','route' => ['cineastas.update', $cineasta->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('nombre', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Es ganador del Oscar:</strong>
            {{ Form::checkbox('es_oscar_winner', '1') }}
        </div>
        <div class="form-group">
            <strong>Década de su primer Oscar:</strong><br>
            @foreach ($arrDecada as $item)
                {{ Form::radio('decada_oscar', $item) }} {{ $item }}<br>
            @endforeach
        </div>
    </div>
    <div class="form-group">
        <p><img class="imgCineasta" src="{!! asset('images/'.$cineasta->fotoCineasta) !!}"></p>
        {{ Form::file('fotoCineasta', $attributes = array('enctype' => 'multipart/form-data')) }}
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {{ Form::button('Modificar Cineasta', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')