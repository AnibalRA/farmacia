<?php

class ApiMovilController extends BaseController {

// Farmacia
	public function getFarmacias(){
		
		$farmacias = Farmacia::orderBy('nombre', 'desc')->paginate(6);

		return Response::json($farmacias, 200, array('content-type' => 'application/json', 'Access-Control-Allow-Origin' => '*'));
	}

	public function getFarmacia($id)
	{
		$farmacias = Farmacia::find($id);

		return Response::json( $farmacias, 200, array('content-type' => 'application/json', 'Access-Control-Allow-Origin' => '*'));
	}

	public function getFarmaciaproductos($id)
	{
		$farmacias = ProductoFarmacia::where('productos_id', '=', $id)->get();

		return Response::json( $farmacias, 200, array('content-type' => 'application/json', 'Access-Control-Allow-Origin' => '*'));
	}

// Productos
	public function getProductos(){

		$productos = Producto::paginate(6);

		return Response::json( $productos, 200, array('content-type' => 'application/json', 'Access-Control-Allow-Origin' => '*'));
	}

	public function getProducto($id)
	{
		$productos = Producto::find($id);

		return Response::json( $productos, 200, array('content-type' => 'application/json', 'Access-Control-Allow-Origin' => '*'));
	}

// Sucursales
	public function getSucursales($id){

		$sucursales = Sucursal::where('farmacia_id', '=', $id)->get();

		return Response::json( $sucursales, 200, array('content-type' => 'application/json', 'Access-Control-Allow-Origin' => '*'));
	}

	public function getSucursal($id){

		$sucursal = Sucursal::find($id);

		// $sucursal->municipio = $sucursal->municipio->nombre;

		return Response::json( $sucursal, 200, array('content-type' => 'application/json', 'Access-Control-Allow-Origin' => '*'));
	}

// Busqueda de Productos
	public function getBusquedaproductos($valor) {
		
		$productos = Producto::where('nombre','LIKE',"%".$valor."%")
	        ->orderBy('nombre','asc')
	        ->get();
	    
	    return Response::json( $productos, 200, array('content-type' => 'application/json', 'Access-Control-Allow-Origin' => '*'));

	}

}