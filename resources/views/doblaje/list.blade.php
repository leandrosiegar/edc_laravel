@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th> Título </th>
        <th> Foto Doblaje </th>
        <th> Año </th>
        <th>Actor Orig 1</th>
        <th>Actor Doblaje 1</th>
        <th>Actor Orig 2</th>
        <th>Actor Doblaje 2</th>
        <th>Actor Orig 3</th>
        <th>Actor Doblaje 3</th>
        <th>Actor Orig 4</th>
        <th>Actor Doblaje 4</th>


        <th width="280px"></th>
    </tr>
    @foreach ($arrDoblaje as $clave=>$item)
        <tr>
            <td>{{ $item->nom_pel_youtube }}</td>
            <td>{{ $item->foto_pel_doblaje }}</td>
            <td>{{ $item->anno}}</td>
            <td>{{ $item->nom_actor_orig1 }}</td>
            <td>{{ $item->nom_actor_doblaje1 }}</td>
            <td>{{ $item->nom_actor_orig2 }}</td>
            <td>{{ $item->nom_actor_doblaje2 }}</td>
            <td>{{ $item->nom_actor_orig3 }}</td>
            <td>{{ $item->nom_actor_doblaje3 }}</td>
            <td>{{ $item->nom_actor_orig4 }}</td>
            <td>{{ $item->nom_actor_doblaje4 }}</td>
            <td>
                <a href="{{ route('doblaje.edit',$item->id) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-doblaje',$item->id) }}', '{{ $item->nom_pel_youtube}}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $arrDoblaje->links() }}

@include('intranet.footer')