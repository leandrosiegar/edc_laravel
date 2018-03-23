@include('intranet.header')

<h1>Alta Cineasta YouTube</h1>
{!! Form::open(array('route' => 'artYoutube.store', 'files'=>true)) !!}
{{ csrf_field() }}
<p>Nombre cineasta: <input type="text" name="nom_art_youtube"></p>
<p>Num Referencias: <input type="text" name="num_referencias"></p>
<p>{!! Form::file('nomFoto', array('class' => 'form-control')) !!}</p>

<p><input type="submit" value="Dar de alta Cineasta Youtube"></p>
{!! Form::close() !!}

@include('intranet.footer')