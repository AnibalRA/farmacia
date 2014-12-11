<?php

class ProductoController extends \BaseController {

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
        //
        $productos = Producto::where('farmacia_id', 1)//Auth::user()->sucursal->id)
                            ->orderBy('created_at','dsc')
                            ->get();
        return Response::json($productos, 200);
   }


   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
        //
        $producto = new Producto;
        return Response::json($producto, 200);
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
        $producto = new Producto;
        if($producto->guardar($data))
            return Response::json($producto, 201);
        $errores = [];
        foreach ($producto->errores->all() as $error) {
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
      $producto = Producto::find($id)->get();
      return Response::json($producto, 200);
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
      $producto = Producto::find($id)->get();
      return Response::json($producto, 200);
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
        $producto = Producto::find($id);
        if($producto->guardar($data))
            return Response::json($producto, 202);
        $errores = [];
        foreach ($producto->errores->all() as $error) {
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
   }


}
