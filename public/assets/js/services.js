angular.module('farmaciaServices',[])

.factory('clientesService',['$http', '$q', function ($http, $q){

	function all(){
		defer = $q.defer();

		$http.get('api/clientes')
			.success(function (data){
				defer.resolve(data);
			})
			.error(function (data){
				defer.reject();
			})
		return defer.promise; 
	}

	function add($cliente){
		defer = $q.defer();
		$http.post('api/clientes', $cliente)
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
		all:all,
		add:add
	}
}])

.factory('proveedorService', ['$http', '$q', function ($http, $q){
	function all(){
		defer = $q.defer();
		$http.get('api/proveedores')
			.success (function(data){
				defer.resolve(data);
			})
			.error(function (data){
				defer.reject(data);
			})
		return defer.promise;
	}

	return {
		all:all
	}
}])