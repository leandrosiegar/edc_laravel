@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th> Nombre </th>
        <th> URL</th>
        <th> Año</th>
        <th> Slug</th>
        <th> Fecha</th>
        <th>link_amazon</th>
        <th width="280px"></th>
    </tr>
    @foreach ($arrPelYoutube as $item)
        <tr>
            <td>{{ $item->nom_pel_youtube}}</td>
            <td>{{ $item->url_pel_youtube}}</td>
            <td>{{ $item->anno}}</td>
            <td>{{ $item->urlCorta}}</td>
            <td>{{ $item->fecha_alta_youtube}}</td>
            <td>{{ $item->link_amazon}}</td>
            <td>
                <a href="{{ route('youtube.edit',$item->id) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-pel-youtube',$item->id) }}', '{{ $item->link_slider}}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $arrPelYoutube->links() }}

@include('intranet.footer')