@include('intranet.header')

<h1>Datos de la película</h1>
<h2>
<p><img class="imgPelicula" src="{!! asset('images/peliculas/'.$pelicula->fotoPelicula) !!}"></p>
<p>Título: {{ $pelicula->titulo}}</p>
<p>Año: {{ $pelicula->anno}}</p>
<p><a href="{{ route('peliculas-del-cineasta', $pelicula->id_director) }}">{{ $pelicula->getNombreCineasta($pelicula->id_director) }}</a></p>
<p><a href="{{ route('peliculas-del-cineasta', $pelicula->id_actor1) }}">{{ $pelicula->getNombreCineasta($pelicula->id_actor1) }}</a></p>
<p><a href="{{ route('peliculas-del-cineasta', $pelicula->id_actor2) }}">{{ $pelicula->getNombreCineasta($pelicula->id_actor2) }}</a></p>
</h2>


@include('intranet.footer')