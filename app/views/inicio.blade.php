@extends('index')
@section('content')
<h3><i class="glyphicon glyphicon-dashboard"></i> Historial</h3>
<hr/>
<div class="row">
    <div class="col-md-3">
        <div class="well">Ventas del Mes<span class="badge pull-right">20</span></div>
        <div class="clearfix"></div>
    </div>
    <div class="col-md-3">
        <div class="well">Nuevas Requisiciones<span class="badge pull-right">2</span></div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-3">
        <div class="well">Nuevas Requisiciones<span class="badge pull-right">2</span></div>
    </div>
    <div class="col-md-3">
        <div class="well">Nuevas Requisiciones<span class="badge pull-right">2</span></div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
			<div class="panel-heading">Últimas Ventas</div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Hora</th>
                            <th>Fecha</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cliente 1</td>
                            <td>11:10 p.m</td>
                            <td>26/11/14</td>
                            <td>$15.50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop