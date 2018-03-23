@include('intranet.header')

<h1>Alta Película YouTube</h1>
{!! Form::open(array('route' => 'youtube.store', 'files'=>true)) !!}
{{ csrf_field() }}
<p>Título película: <input type="text" name="nom_pel_youtube"></p>
<p>URL Youtube(http://www.youtube.com/embed/LCJydwIHz0k): <input type="text" name="url_pel_youtube"></p>
<p>Año: <input type="text" name="anno"></p>
<p>Link Amazón: <input type="text" name="link_amazon"></p>

<p><input type="submit" value="Dar de alta Película Youtube"></p>
{!! Form::close() !!}

@include('intranet.footer')