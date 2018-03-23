@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table id="tablaLSG" class="table table-bordered">
    <thead>
    <tr>
        <th> Nombre </th>
        <th> Num Referencias</th>
        <th> Imagen</th>
        <th width="280px"></th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th> Nombre </th>
        <th> Num Referencias</th>
        <th> Imagen</th>
        <th width="280px"></th>
    </tr>
    </tfoot>
    <tbody>
        @foreach ($arrArtYoutube as $item)
            <tr>
                <td>{{ $item->nom_art_youtube}}</td>
                <td>{{ $item->num_referencias}}</td>
                <td><img src="{!! asset('images/cineastas/'.$item->nom_foto) !!}"></td>
                <td>
                    <a href="{{ route('artYoutube.edit',$item->id) }}">Editar</a>
                    <a onclick="checkConfirmDelete('{{ route('borrar-art-youtube',$item->id) }}', '{{ $item->nom_art_youtube}}');" href="javascript:void(0);">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $arrArtYoutube->links() }}

@include('intranet.footer')

<script>

</script>