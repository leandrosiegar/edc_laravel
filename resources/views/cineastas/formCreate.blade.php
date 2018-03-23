@include('intranet.header')

<?php
$arrDecada = array('1920', '1930', '1940', '1950', '1960', '1970', '1980', '1990', '2000', '2010');
?>
<h1>Alta Cineasta</h1>
{!! Form::open(array('route' => 'cineastas.store', 'files'=>true)) !!}
{{ csrf_field() }}
<p>@lang('messages.nombre'): <input type="text" name="nombre"></p>
<p>@lang('messages.ganador_oscar'): {{ Form::checkbox('es_oscar_winner', '1') }}</p>
<p>Década del Oscar:<br>
    @foreach ($arrDecada as $item)
        {{ Form::radio('decada_oscar', $item) }} {{ $item }}<br>
    @endforeach
</p>

<p>{!! Form::file('fotoCineasta', array('class' => 'form-control')) !!}</p>

<p><input type="submit" value="Dar de alta cineasta"></p>
{!! Form::close() !!}

@include('intranet.footer')