@include('intranet.header')

<h1>Datos del cineasta</h1>
<h2>
<p><img class="imgCineasta" src="{!! asset('images/'.$cineasta->fotoCineasta) !!}"></p>
<p>Nombre: {{ $cineasta->nombre }}</p>

</h2>
@include('intranet.footer')