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
		
	}
	return {
		all:all,
		add:add
	}
}])