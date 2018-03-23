@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th> Película </th>
        <th> Nombre concierto </th>
        <th> Foto concierto </th>
        <th> Compositor </th>
        <th>urlCorta</th>
        <th width="280px"></th>
    </tr>
    @foreach ($arrNoesmusica as $clave=>$item)
        <tr>
            <td>{{ $item->nom_pel_youtube }}</td>
            <td>{{ $item->nom_video_musica }}</td>
            <td>{{ $item->foto_video_musica }}</td>
            <td>{{ $item->nom_art_youtube }}</td>
            <td>{{ $item->urlCorta }}</td>
            <td>
                <a href="{{ route('noesmusica.edit',$item->id) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-noesmusica',$item->id) }}', '{{ $item->nom_video_musica}}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $arrNoesmusica->links() }}

@include('intranet.footer')