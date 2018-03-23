@include('intranet.header')

<h1>Alta Slider</h1>
{!! Form::open(array('route' => 'sliders.store', 'files'=>true)) !!}
{{ csrf_field() }}
<p>Texto slider: <input type="text" name="texto_slider"></p>
<p>Link Slider: <input type="text" name="link_slider"></p>

<p>{!! Form::file('dc_slider', array('class' => 'form-control')) !!}</p>

<p><input type="submit" value="Dar de alta Slider"></p>
{!! Form::close() !!}

@include('intranet.footer')