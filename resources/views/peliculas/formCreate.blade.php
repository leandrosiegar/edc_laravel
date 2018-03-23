@include('intranet.header')
<?php
$arrAux = array();
foreach ($cineastas as $item) {
    $arrAux[$item["id"]] = $item["nombre"];
}
?>
{!! Form::open(array('route' => 'peliculas.store', 'files'=>true)) !!}
        {{ csrf_field() }}
        <p>@lang('messages.titulo'): <input type="text" name="titulo"></p>
        <p>@lang('messages.anno'): <input type="text" name="anno"></p>
        <p>@lang('messages.director'): {{ Form::select('id_director', $arrAux, "") }}</p>
        <p>Actor 1: {{ Form::select('id_actor1', $arrAux, "") }}</p>
        <p>Actor 2: {{ Form::select('id_actor2', $arrAux, "") }}</p>
        <p>{!! Form::file('fotoPelicula', array('class' => 'form-control')) !!}</p>
        {{ Form::button('Dar Alta Película', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}
{!! Form::close() !!}
@include('intranet.footer')