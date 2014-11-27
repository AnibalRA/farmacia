@extends('index')
@section('content')
<h3><i class="glyphicon glyphicon-user"></i> Cliente</h3>
<hr/>
<table class="table table-striped">
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Direción</th>
        <th>Correo Electrónio</th>
    </tr>
    @foreach ($cliente as $clientes)
    <tr>
        <td>{{ $clientes->nombre }}</td>
        <td>{{ $clientes->telefono }}</td>
        <td>{{ $clientes->direccion }}</td>
        <td>{{ $clientes->email }}</td>
        <td></td>
    </tr>
    @endforeach
</table>
@stop