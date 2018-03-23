@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th> Película </th>
        <th> Nombre documental </th>
        <th> Foto documental </th>
        <th> Cineasta </th>
        <th>urlCorta</th>
        <th width="280px"></th>
    </tr>
    @foreach ($arrDocumental as $clave=>$item)
        <tr>
            <td>{{ $item->nom_pel_youtube }}</td>
            <td>{{ $item->nom_documental }}</td>
            <td>{{ $item->foto_documental }}</td>
            <td>{{ $item->nom_art_youtube }}</td>
            <td>{{ $item->urlCorta }}</td>
            <td>
                <a href="{{ route('documental.edit',$item->id) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-documental',$item->id) }}', '{{ $item->nom_documental}}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $arrDocumental->links() }}

@include('intranet.footer')