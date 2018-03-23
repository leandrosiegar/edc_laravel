@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif



<table id="tablaLSG" class="table table-bordered">
    <thead>
    <tr>
        <th> Película </th>
        <th> Cineasta </th>
        <th></th>

        <th width="280px"></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($arrHistYoutube as $item)
        <tr>
            <td>{{ $item->nom_pel_youtube}} </td>
            <td> <img src="{!! asset('images/cineastas/'.$item->nom_foto) !!}"> <br>{{ $item->nom_art_youtube }}</td>
            <td>
                @if ($item->qEs == "D")
                    Director
                @else
                    Intérprete
                @endif
            </td>
            <td>
                <a href="{{ route('youtube.edit-histyoutube',$item->id_pel_youtube) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-hist-youtube',$item->id_pel_youtube) }}', '{{ $item->nom_pel_youtube }}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



@include('intranet.footer')