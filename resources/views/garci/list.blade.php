@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th> Foto Vídeo 1 </th>
        <th> Año </th>
        <th>Título</th>
        <th>Director</th>
        <th>Actor 1</th>
        <th>Actor 2</th>
        <th>Actor 3</th>
        <th width="280px"></th>
    </tr>
    @foreach ($arrGarci as $clave=>$item)
        <tr>
            <td>{{ $item->foto_video_garci}}</td>

            <td>{{ $item->anno}}</td>
            <td>{{ $item->nom_pel_youtube}}</td>
            <td>{{ $item->nom_director }}</td>
            <td>{{ $item->nom_actor1 }}</td>
            <td>{{ $item->nom_actor2 }}</td>
            <td>{{ $item->nom_actor3 }}</td>
            <td>
                <a href="{{ route('garci.edit',$item->id) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-vid-garci',$item->id) }}', '{{ $item->nom_pel_youtube}}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $arrGarci->links() }}

@include('intranet.footer')