@include('intranet.header')

<h2>Editar Slider</h2>

@if (count($errors) > 0)
    echo "No existe ese registro";
@endif

{!! Form::model($slider, ['method' => 'PATCH','route' => ['sliders.update', $slider->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Texto Slider:</strong>
            {!! Form::text('texto_slider', null, array('placeholder' => 'Texto del slider','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Link Slider:</strong>
            {!! Form::text('link_slider', null, array('placeholder' => 'Link del slider','class' => 'form-control')) !!}
        </div>

    </div>
    <div class="form-group">
        <p><img class="imgCineasta" src="{!! asset('images/sliders/'.$slider->dc_slider) !!}"></p>
        {{ Form::file('dc_slider', $attributes = array('enctype' => 'multipart/form-data')) }}
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        {{ Form::button('Modificar Slider', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')