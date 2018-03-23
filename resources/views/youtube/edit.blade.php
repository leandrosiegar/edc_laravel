@include('intranet.header')

<h2>Editar Película YouTube</h2>

@if (count($errors) > 0)
    echo "No existe ese registro";
@endif

{!! Form::model($pelYoutube, ['method' => 'PATCH','route' => ['youtube.update', $pelYoutube->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {!! Form::text('nom_pel_youtube', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>URL:</strong>
            {!! Form::text('url_pel_youtube', null, array('placeholder' => 'URL','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Año:</strong>
            {!! Form::text('anno', null, array('placeholder' => 'Año','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Slug:</strong>
            {!! Form::text('urlCorta', null, array('placeholder' => 'Slug','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Fecha alta:</strong>
            {!! Form::text('fecha_alta_youtube', null, array('placeholder' => 'Fecha alta','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Link Amazón:</strong>
            {!! Form::text('link_amazon', null, array('placeholder' => 'Link Amazon','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            {{ Form::button('Modificar Película YouTube', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
        </div>


    </div>


</div>
{!! Form::close() !!}

@include('intranet.footer')