@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th> @lang('messages.nombre') </th>
        <th> @lang('messages.ganador_oscar')</th>
        <th>Década de su Primer Oscar</th>
        <th>Imagen</th>
        <th width="280px"></th>
    </tr>
    @foreach ($cineastas as $cineasta)
        <tr>
            <td>{{ $cineasta->nombre}}</td>
            <td>
                @if ( $cineasta->es_oscar_winner == 1)
                    Sí
                @else
                    No
                @endif
            </td>
            <th>{{ $cineasta->decada_oscar}}</th>
            <td><img class="imgCineasta" src="{!! asset('images/cineastas/'.$cineasta->fotoCineasta) !!}"></td>
            <td>

                <a href="{{ route('cineastas.show',$cineasta->id) }}">Mostrar</a>
                <a href="{{ route('cineastas.edit',$cineasta->id) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-cineasta',$cineasta->id) }}', '{{ $cineasta->nombre}}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $cineastas->links() }}

@include('intranet.footer')

