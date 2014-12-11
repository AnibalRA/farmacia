angular.module('farmaciaServices',[])

.factory('apiService',['$http', '$q', function ($http, $q){

	function get(url){
		defer = $q.defer();

		$http.get(url)
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
		$http.post(url, data)
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
		return apiService.get('api/clientes')
	}

	function add(cliente){
		return apiService.post('api/clientes', cliente)
	}
	return {
		all : all,
		add : add
	}
}])

.factory('proveedorService', ['apiService', function (apiService){
	function all(){
		return apiService.get('api/proveedores')
	}

	function add(proveedor){
		return apiService.post('api/proveedores', proveedor)
	}
	return {
		all : all,
		add : add
	}
}])

.factory('productoService',['apiService', function (apiService){

	function all(){
		return apiService.get('api/productos')
	}

	function add(producto){
		return apiService.post('api/productos', producto)
	}
	return {
		all : all,
		add : add
	}
}])

//para la direccion 

.factory('direccionService', ['apiService', function(apiService){
	function departamentos(){
		return apiService.get('api/direccion/departamentos');
	}

	function municipios(id){
		return apiService.get('api/direccion/municipios/' + id);
	}
	return {
		departamentos: departamentos,
		municipios: municipios
	}
}])

.factory('farmaciaService', ['apiService', function (apiService){
	function all(){
		return apiService.get('api/farmacias');
	}
	function add(farmacia){
		return apiService.post('api/farmacias', farmacia)
	}
	return {
		all	: all,
		add : add
	}
}])