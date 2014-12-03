<?php

class FarmaciaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $farmacias = Farmacia::where('farmacia_id', 1)
        				->orderBy('created_at','dsc')
        				->get();
        return Response::json($farmacias, 200);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$farmacia = new Farmacia;
        return Response::json($farmacia, 200);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$farmacia = new Farmacia;
		if($farmacia->guardar($data))
			return Response::json($farmacia,201);
		$errores = [];
		foreach ($farmacia->errores->all() as $error) {
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
        $farmacia = Farmacia::find($id);
        return Response::json($farmacia, 200);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$farmacia = Farmacia::find($id);
        return Response::json($farmacia, 200);
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
		$farmacia = Farmacia::find($id);
		if($farmacia->guardar($data))
			return Response::json($farmacia,202);
		$errores = [];
		foreach ($farmacia->errores->all() as $error) {
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
        $farmacia = Farmacia::find($id);
		$farmacia->delete();
        return Response::json($farmacia,202);
	}


}
