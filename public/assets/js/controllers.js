angular.module('farmaciaControllers', []).

	controller('inicioController', function(){

	}).
	controller('menuLeftController', function (){
		
	})

	.controller('clienteController', 
	['clientesService', '$scope', '$log', '$modal', 
	function (clientesService, $scope, $log, $modal){
		$scope.clientes = [];
		$scope.alerts = []
		$scope.cliente = {};

		clientesService.all().then(function(data){
				$scope.clientes = data;
			}, function (data){
				$scope.clientes = [];
			}
		);

		$scope.open = function () {
		    var modalInstance = $modal.open({
		      templateUrl: 'addClienteModal.html',
		      controller: 'clienteController'
		      
	    	});
		}
		
		$scope.guardar = function(){
			$log.info('guardando cliente')
			clientesService.add($scope.cliente).then(
				function (data){					
					$scope.alerts = [
						{
							'type' 	: 'success',
							'msg'	: 'Proceso exitoso!!!'
						}
					]
					$scope.clientes.push(data)
					$scope.cliente = [];
		    		$scope.cancel();
				},
				function (data){
					$scope.alerts = data;
				}
			)
		}

		$scope.cancel = function () {
		    $modalInstance.dismiss('cancel');
		  };

		  // alertas
		 $scope.closeAlert = function(index) {
		   $scope.alerts.splice(index, 1);
		 };
		 // $scope.loadMore()
	}])

	.controller('proveedorController',
		['proveedorService', '$scope',  '$modal', '$log',
		function (proveedorService, $scope, $modal, $log){
			$scope.proveedores = []
			if(!$scope.proveedores.length){
				proveedorService.all().then(
					function (data){
						$scope.proveedores = data;
					},
					function (data){
						//agregar un mensaje de error por que no se han podido descargar todos los proveedores
						$scope.proveedores = [];
					}
				)
			};
		$scope.open = function () {
		    var modalInstance = $modal.open({
		      templateUrl: 'addProveedorModal.html',
		      controller: 'proveedorController'
		      
	    	});
		}
			
	}])

	.controller('productoController', ['productoService','$scope', function(productoService, $scope){
		$scope.productos = [];
		productoService.all().then(function (data){
			$scope.productos = data;
		})
	}])














