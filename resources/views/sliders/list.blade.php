@include('intranet.header')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th> Texto Slider </th>
        <th> Link Slider</th>
        <th>Imagen</th>
        <th width="280px"></th>
    </tr>
    @foreach ($sliders as $slider)
        <tr>
            <td>{{ $slider->texto_slider}}</td>
            <th>{{ $slider->link_slider}}</th>
            <td><img class="imgCineasta" src="{!! asset('images/sliders/'.$slider->dc_slider) !!}"></td>
            <td>
                <!-- <a href="{{ route('sliders.show',$slider->id) }}">Mostrarr</a> -->
                <a href="{{ route('sliders.edit',$slider->id) }}">Editar</a>
                <a onclick="checkConfirmDelete('{{ route('borrar-slider',$slider->id) }}', '{{ $slider->link_slider}}');" href="javascript:void(0);">Borrar</a>
            </td>
        </tr>
    @endforeach
</table>

{{ $sliders->links() }}

@include('intranet.footer')

