<?php

class pFarmaciaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $pfarmacia = ProductoFarmacia::where('farmacia_id', Auth::user()->farmacia->id)
            ->orderBy('created_at','dsc')
            ->get();
        return Response::json($pfarmacias, 200);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$pfarmacia = new ProductoFarmacia;
		if($pfarmacia->guardar($data))
			return Response::json($pfarmacia,201);
		$errores = [];
		foreach ($pfarmacia->errores->all() as $error) {
			$errores[] = array(
					'type' => "danger",
					'msg'	=> $error
				);
		}
		return Response::json($errores, 200);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $data = Input::all();
		$pfarmacia = ProdutoFarmacia::find($id);
		if($pfarmacia->guardar($data))
			return Response::json($farmacia,202);
		$errores = [];
		foreach ($pfarmacia->errores->all() as $error) {
			$errores[] = array(
					'type' => "danger",
					'msg'	=> $error
				);
		}
		return Response::json($errores, 200);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $pfarmacia = ProductoFarmacia::find($id);
		$pfarmacia->delete();
        return Response::json($pfarmacia,202);
	}


}
