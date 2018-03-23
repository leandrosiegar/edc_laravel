@include('intranet.header')


{!! Form::open(array('route' => 'colaborador.checkPW', 'files'=>true)) !!}
    {{ csrf_field() }}
    {!! Form::password('pw', null, array('placeholder' => '','class' => 'form-control')) !!}
    {{ Form::button('Check Password', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}

{!! Form::close() !!}



<h1>Alta Colaborador</h1>
{!! Form::open(array('route' => 'colaborador.store', 'files'=>true)) !!}
{{ csrf_field() }}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre colaborador:</strong>
            {!! Form::text('nom_colaborador', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('pw', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => '','class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {{ Form::button('Alta colaborador', array('type' => 'submit', 'class' => 'btn btn-default btn-sm', 'onclick' => '')) }}
        </div>
    </div>
</div>
{!! Form::close() !!}

@include('intranet.footer')