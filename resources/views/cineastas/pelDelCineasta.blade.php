@include('intranet.header')

<?php
   // print_r($cineasta[0]);
?>


<h1>Películas del cineasta  {{ $cineasta[0]->nombre }}</h1>
<table border="1">
    <tr>
        <th>Título</th>
        <th>Año</th>
    </tr>

    @foreach ($arrPel as $item)
        <tr>
            <td><a href="{{ route('peliculas.show',$item->id) }}">{{ $item->titulo }}</a></td>
            <td>{{ $item->anno }}</td>
        </tr>
    @endforeach


</table>

@include('intranet.footer')