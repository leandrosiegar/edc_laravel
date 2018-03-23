@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Imagen</th>
        <th>@lang('messages.titulo')</th>
        <th>Año</th>
        <th>Director</th>
        <th>Actor 1</th>
        <th>Actor 2</th>
        <th ></th>
    </tr>
    @foreach ($peliculas as $pelicula)
        <tr>
            <td><img class="imgPelicula" src="{!! asset('images/peliculas/'.$pelicula->fotoPelicula) !!}"></td>
            <td>{{ $pelicula->titulo}}</td>
            <td>{{ $pelicula->anno}}</td>
            <td><a href="{{ route('peliculas-del-cineasta', $pelicula->id_director) }}">{{ $pelicula->getNombreCineasta($pelicula->id_director) }}</a></td>
            <td><a href="{{ route('peliculas-del-cineasta', $pelicula->id_actor1) }}">{{ $pelicula->getNombreCineasta($pelicula->id_actor1) }}</a></td>
            <td><a href="{{ route('peliculas-del-cineasta', $pelicula->id_actor2) }}">{{ $pelicula->getNombreCineasta($pelicula->id_actor2) }}</a></td>

            <td>
                <a href="{{ route('peliculas.show',$pelicula->id) }}">Mostrar</a>
                <a href="{{ route('peliculas.edit',$pelicula->id) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-pelicula',$pelicula->id) }}', '{{ $pelicula->titulo}}');" href="javascript:void(0);">Borrar</a>
                {{--
                {!! Form::open(['method' => 'DELETE','route' => ['peliculas.destroy', $pelicula->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Borrar') !!}
                {!! Form::close() !!}
                --}}

            </td>
        </tr>
    @endforeach
</table>

@include('intranet.footer')