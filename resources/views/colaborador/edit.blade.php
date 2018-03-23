@include('intranet.header')

<h2>Editar Colaborador</h2>

@if (count($errors) > 0)
    echo "No existe ese registro";
@endif

{!! Form::model($colaborador, ['method' => 'PATCH','route' => ['colaborador.update', $colaborador->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre colaborador:</strong>
            {!! Form::text('nom_colaborador', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Nuevo PW (solo rellenar si se quiere cambiar el PW):</strong>
            {!! Form::password('new_pw', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Slug:</strong>
            {!! Form::text('slug', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>



        <div class="form-group">
            {{ Form::button('Modificar Colaborador', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => 'return checkFormCineasta()')) }}
        </div>

    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')
