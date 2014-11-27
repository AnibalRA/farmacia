angular.module('farmaciaControllers', []).

	controller('inicioController', function(){

	}).
	controller('menuLeftController', function (){
		
	})

	.controller('clienteController', ['clientesService', '$scope', '$log', function (clientesService, $scope, $log){
		$scope.clientes = [];
		clientesService.all().then(function(data){
				$scope.clientes = data;
			}, function (data){
				$scope.clientes = [];
			}
		);
		
	}])