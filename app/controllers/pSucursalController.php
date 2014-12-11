<?php

class pSucursalController extends \BaseController {

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
        //
        $productosSucursal = ProductoSucursal::where('sucursales_id', 1)//Auth::user()->sucursal->id)
                            ->orderBy('created_at','dsc')
                            ->get();
        return Response::json($productosSucursal, 200);
   }


   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
        //
        $productoSucursal = new ProductoSucursal;
        return Response::json($productoSucursal, 200);
   }


   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
      //
        $data = Input::all();
        $productoSucursal = new ProductoSucursal;
        if($productoSucursal->guardar($data))
            return Response::json($productoSucursal, 201);
        $errores = [];
        foreach ($productoSucursal->errores->all() as $error) {
            $errores[] = array('type' => 'danger', 'msg' => $error);
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
      $productoSucursal = ProductoSucursal::find($id)->get();
      return Response::json($productoSucursal, 200);
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
      $productoSucursal = ProductoSucursal::find($id)->get();
      return Response::json($productoSucursal, 200);
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
        $productoSucursal = ProductoSucursal::find($id);
        if($productoSucursal->guardar($data))
            return Response::json($productoSucursal, 202);
        $errores = [];
        foreach ($productoSucursal->errores->all() as $error) {
            $errores[] = array('type' => 'danger', 'msg' => $error);
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
        //
        $productoSucursal = ProductoSucursal::find($id);
        $productoSucursal->delete();
        return Response::json($productoSucursal,202);
   }


}
