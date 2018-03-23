@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th> Película </th>
        <th> Director </th>
        <th> Colaborador </th>
        <th>Crítica</th>
        <th>Foto crítica</th>
        <th>Fecha</th>
        <th>Es Artículo</th>
        <th>Votos</th>
        <th>Total Punt</th>
        <th>YouTube</th>
        <th>Hits</th>


        <th width="280px"></th>
    </tr>
    @foreach ($arrCriticas as $clave=>$item)
        <tr>
            <td>{{ $item->nom_pel_youtube }}</td>
            <td>{{ $item->nom_art_youtube }}</td>
            <td>{{ $item->nom_colaborador }}</td>
            <td><?=substr($item->critica,0,100);?></td>
            <td>{{ $item->fotoCritica }}</td>
            <td>{{ $item->fecha }}</td>
            <td>{{ $item->esArticulo }}</td>
            <td>{{ $item->votos }}</td>
            <td>{{ $item->totalPunt }}</td>
            <td>{{ $item->youtube }}</td>
            <td>{{ $item->hits }}</td>
            <td>
                <a href="{{ route('criticas.edit',$item->idCritica) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-critica',$item->id) }}', '{{ $item->nom_pel_youtube}}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $arrCriticas->links() }}

@include('intranet.footer')