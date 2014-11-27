@extends('index')
@section('content')
<h3><i class="glyphicon glyphicon-user"></i> Cliente</h3>
<hr/>
<div class="row">
    <div class="col-md-offset-3 col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Formulario De Cliente</div>
            <div class="panel-body">
                <div class="form-group">
                    {{ Form::label('nombre', 'Nombre Completo *', array('class' => 'control-label col-md-4 col-sm-4')) }}
                    <div class="col-md-7 col-sm-7 input-group">
                        <span class="input-group-addon glyphicon glyphicon-font"> </span>
                        {{ Form::text('nombre', null, array('placeholder' => 'Nombre Completo', 'class' => 'form-control')) }}
                            @if( $errors->has('nombre') )
                            <span class="input-group-addon glyphicon glyphicon-remove alert-danger"> </span>
                        @endif
                    </div>
                </div>
<div class="form-group">
                            {{ Form::label('email', 'Correo Electrónico *', array('class' => 'control-label col-md-4 col-sm-4')) }}
                            <div class="col-md-7 col-sm-7 input-group">
                                <span class="input-group-addon glyphicon glyphicon-envelope"> </span>
                                {{ Form::text('email', null, array('placeholder' => 'Correo Electrónico', 'class' => 'form-control')) }}
                                @if( $errors->has('email') )
                                    <span class="input-group-addon glyphicon glyphicon-remove alert-danger"> </span>
                                @endif
                            </div>
                        </div>
            </div>
        </div>
        </div>
    </div>
</div>
@stop