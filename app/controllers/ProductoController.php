<?


class ProductoController extends BaseController{
	function all(){
		$productos = Producto::where('farmacia_id',1)->get();
    	return Response::json($productos, 200);
	}
}