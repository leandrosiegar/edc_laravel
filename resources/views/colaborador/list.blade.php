@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th> Nombre colaborador </th>
        <th> Email </th>
        <th> Slug </th>

        <th width="280px"></th>
    </tr>
    @foreach ($arrColab as $clave=>$item)
        <tr>
            <td>{{ $item->nom_colaborador }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->slug }}</td>
            <td>
                <a href="{{ route('colaborador.edit',$item->id) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-colaborador',$item->id) }}', '{{ $item->nom_colaborador }}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $arrColab->links() }}

@include('intranet.footer')