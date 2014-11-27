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
                    <label class="control-label col-md-4 col-sm-4" for="nombre">Nombre Completo *</label>
                    <div class="col-md-7 col-sm-7 input-group">
                        <span class="input-group-addon glyphicon glyphicon-font"> </span>
                        <input type="text" class="form-control" placeholder="Nombre Completo" id="nombre">
                        @if( $errors->has('nombre') )
                        <span class="input-group-addon glyphicon glyphicon-remove alert-danger"> </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="telefono">Teléfono</label>
                    <div class="col-md-7 col-sm-7 input-group">
                        <span class="input-group-addon glyphicon glyphicon-envelope"> </span>
                        <input type="text" class="form-control" placeholder="Teléfono" id="telefono">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="dirección">Dirección *</label>
                    <div class="col-md-7 col-sm-7 input-group">
                        <span class="input-group-addon glyphicon glyphicon-envelope"> </span>
                        <textarea rows="5" class="form-control" placeholder="Dirección" id="direccion"></textarea>
                        @if( $errors->has('direccion') )
                        <span class="input-group-addon glyphicon glyphicon-remove alert-danger"> </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 col-sm-4" for="email">Correo Electrónico *</label>
                    <div class="col-md-7 col-sm-7 input-group">
                        <span class="input-group-addon glyphicon glyphicon-envelope"> </span>
                        <input type="text" class="form-control" placeholder="Correo Electrónico" id="email">
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