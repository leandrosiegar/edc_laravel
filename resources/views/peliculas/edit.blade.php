@include('intranet.header')

<h2>Editar Película</h2>

@if (count($errors) > 0)
    echo "No existe ese registro";
@endif


{!! Form::model($pelicula, ['method' => 'PATCH','route' => ['peliculas.update', $pelicula->id], 'files' => true]) !!}
<?php
$cad = "";
$arrAux = array();
foreach ($cineastas as $item) {
    $arrAux[$item["id"]] = $item["nombre"];
}
?>
<p><img class="imgCineasta" src="{!! asset('images/peliculas/'.$pelicula->fotoPelicula) !!}"></p>
{{ Form::file('fotoPelicula', $attributes = array('enctype' => 'multipart/form-data')) }}
<p>
    <strong>Título:</strong>
    {{ Form::text('titulo', null, array('placeholder' => 'Título','class' => 'form-control')) }}
</p>
<p>
    <strong>Año:</strong>
    {{ Form::text('anno', null, array('placeholder' => 'Año','class' => 'form-control')) }}
</p>
<p>
    <strong>Director:</strong>
    {{ Form::select('id_director', $arrAux, $pelicula->id_director) }}
    <a href="{{route('cineastas.create')}}">Pulsa aquí para añadir un nuevo director</a>
</p>
<p>
    <strong>Actor1:</strong>
    {{ Form::select('id_actor1', $arrAux, $pelicula->id_actor1) }}
    <a href="{{route('cineastas.create')}}">Pulsa aquí para añadir un nuevo actor</a>
</p>
<p>
    <strong>Actor2:</strong>
    {{ Form::select('id_actor2', $arrAux, $pelicula->id_actor2) }}
    <a href="{{route('cineastas.create')}}">Pulsa aquí para añadir un nuevo actor</a>
</p>
<p>
    {{ Form::button('Modificar pelicula', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}
</p>
{!! Form::close() !!}

@include('intranet.footer')