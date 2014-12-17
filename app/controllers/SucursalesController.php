<?php

class SucursalesController extends \BaseController {

   /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
        //
        $sucursales = Sucursal::where('farmacia_id', $id)// Auth::user()->sucursal->id)
                                ->orderBy('created_at','dsc')
                                ->get();
                return Response::json($sucursales, 200);
   }


   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
        //
        $sucursal = new Sucursal;
        return Response::json($sucursal, 200);
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
        if(!empty($data['id']))   
          $sucursal = Sucursal::find($data['id']);
        else
          $sucursal = new Sucursal;
        
        if($sucursal->guardar($data))
            return Response::json($sucursal, 201);
        $errores = [];
        foreach ($sucursal->errores->all() as $error) {
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
      // $sucursal = Sucursal::find($id)->get();
      // return Response::json($sucursal, 200);

    $sucursales = Sucursal::where('farmacia_id', $id)// Auth::user()->sucursal->id)
                            ->orderBy('created_at','dsc')
                            ->get();
    return Response::json($sucursales, 200);
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
      $sucursal = Sucursal::find($id)->get();
      return Response::json($sucursal, 200);
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
        $sucursal = Sucursal::find($id);
        if($sucursal->guardar($data))
            return Response::json($sucursal, 202);
        $errores = [];
        foreach ($sucursal->errores->all() as $error) {
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
