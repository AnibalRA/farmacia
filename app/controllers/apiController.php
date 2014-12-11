<?php

class apiController extends BaseController{

	function getDepartamentos(){
		$departamentos = Departamentos::all();
		return Response::json($departamentos, 200);
	}

	function getMunicipios($id){
		$municipios = Municipios::where('departamentos_id', $id)->get();
		return Response::json($municipios, 200);
	}
}