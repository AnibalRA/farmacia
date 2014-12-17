angular.module('farmaciaServices',[])

.factory('apiService',['$http', '$q', function ($http, $q){

	function get(url){
		defer = $q.defer();

		$http.get('api/' + url)
			.success(function (data){
				defer.resolve(data);
			})
			.error(function (data){
				defer.reject();
			})
		return defer.promise; 
	}

	function post(url, data){
		defer = $q.defer();
		$http.post('api/' + url, data)
			.success(function (data, code){
				if(code==201)
					defer.resolve(data);
				else
					defer.reject(data);
				
			})
			.error( function (data){
				defer.reject(JSON.parse({'type':'warning', 'msg':'no hay conexión al servidor'}));
			})
		return defer.promise;
	}
	return {
		get		: get,
		post	: post
	}
}])


.factory('clienteService', ['apiService',  function (apiService){
	function all(){
		return apiService.get('clientes')
	}

	function add(cliente){
		return apiService.post('clientes', cliente)
	}
	return {
		all : all,
		add : add
	}
}])

.factory('proveedorService', ['apiService', function (apiService){
	function all(){
		return apiService.get('proveedores')
	}

	function add(proveedor){
		return apiService.post('proveedores', proveedor)
	}
	return {
		all : all,
		add : add
	}
}])

.factory('productoService',['apiService', function (apiService){

	function all(){
		return apiService.get('productos')
	}

	function add(producto){
		return apiService.post('productos', producto)
	}

	function categorias(){
		return apiService.get('categorias');
	}
	function subCategorias(idCat){
		return apiService.get('categorias/' + idCat);
	}

	return {
		all 			: all,
		add 			: add,
		categorias 		: categorias,
		subCategorias	: subCategorias,
	}
}])

//para la direccion 

.factory('direccionService', ['apiService', function(apiService){
	function departamentos(){
		return apiService.get('direccion/departamentos');
	}

	function municipios(id){
		return apiService.get('direccion/municipios/' + id);
	}
	return {
		departamentos: departamentos,
		municipios: municipios
	}
}])

.factory('farmaciaService', ['apiService', function (apiService){
	function all(){
		return apiService.get('farmacias');
	}
	function add(farmacia){
		return apiService.post('farmacias', farmacia)
	}
	function sucursales(idFarmacia){
		return apiService.get('sucursales/' + idFarmacia);
	}
	return {
		all			: all,
		add 		: add,
		sucursales 	: sucursales
	}
}])

.factory('sucursalService', ['apiService', function(apiService){
	function add(sucursal){
		return apiService.post('sucursales', sucursal);
	}
	return {
		add : add
	}
}])






















