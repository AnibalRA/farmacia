angular.module('farmaciaControllers', []).

	controller('inicioController', function(){

	}).
	controller('menuLeftController', function (){
		
	})

	.controller('clienteController', 
	['clienteService', '$scope', '$log', '$modal', 
	function (clienteService, $scope, $log, $modal){
		$scope.clientes = [];
		$scope.alerts = []
		$scope.cliente = {};

		clienteService.all().then(function(data){
				$log.info(data)
				$scope.clientes = data;
			}, function (data){
				$scope.clientes = [];
			}
		);
		// $scope.clientes = clienteService.all();
		$scope.guardar = function(){
			$scope.cliente.farmacia_id = 1; //Luego hacer esto automatico
			clienteService.add($scope.cliente).then(
				function (data){					
					$scope.alerts = [{
							'type' 	: 'success',
							'msg'	: 'Proceso exitoso!!!'
						}]
					$scope.clientes.push(data)
					$scope.cliente = [];
				},
				function (data){
					$scope.alerts = data;
				}
			)
		}
		$scope.count = 0;
		$scope.$on('MyEvent', function() {
		  $scope.count++;
		  $log.info($scope.count)
		});
		$scope.cancel = function () {
		    $modalInstance.dismiss('cancel');
		  };

		  // alertas
		 $scope.closeAlert = function(index) {
		   $scope.alerts.splice(index, 1);
		 };
		 // $scope.loadMore()
	}])

	.controller('proveedorController',['proveedorService', '$scope',  '$modal', '$log', 'direccionService',
		function (proveedorService, $scope, $modal, $log, direccionService){
			$scope.proveedores = []
			proveedorService.all().then(
				function (data){
					$log.info('inf recibida')
					$scope.proveedores = data;
				},
				function (data){
					$log.info('error')
					//agregar un mensaje de error por que no se han podido descargar todos los proveedores
					$scope.proveedores = [];
				}
			)

			// $scope.departamento = [];
			// $scope.municipio = [];

			// direccionService.departamentos().then(
			// 	function (data){
			// 		$scope.departamento = data;
			// 	})
			// $scope.municipios = function(id){
			// 	direccionService.municipios(id).then(
			// 	function (data){
			// 		$scope.municipio = data;
			// 	})
			// }

	}])

	.controller('productoController', ['productoService','$scope','$modal', function(productoService, $scope, $modal){
		$scope.productos = [];
		productoService.all().then(function (data){
			$scope.productos = data;
		})
		$scope.guardar = function(){
			// clientesService.add($scope.cliente).then(
			// 	function (data){					
			// 		$scope.alerts = [{
			// 				'type' 	: 'success',
			// 				'msg'	: 'Proceso exitoso!!!'
			// 			}]
			// 		$scope.clientes.push(data)
			// 		$scope.cliente = [];
			// 	},
			// 	function (data){
			// 		$scope.alerts = data;
			// 	}
			// )
		}
	}])
	.controller('modalController',['$modal', '$scope', '$log', function($modal, $scope, $log){
		$scope.open = function (template, controller) {

		    var modalInstance = $modal.open({
		      templateUrl: template + '.html',
		      controller: controller
	    	});
		}
		$scope.$on('guardar', function(){
			$log.info('modalController')
		})
	}])
	.controller('guardarController', ['$scope', '$log', function($scope, $log){
		$scope.$on("guardar", function(){
			$log.info('evento iniciado')
		})
	}])

	.controller('farmaciaController', ['$scope', '$log', 'farmaciaService', function($scope, $log, farmaciaService){
		
		accion = 'nuevo';

		$scope.farmacias = [];
		$scope.farmacia = {};
		farmaciaService.all().then(function(data){
			$scope.farmacias = data;
		})

		$scope.edit = function (index){
			$scope.farmacia = $scope.farmacias[index];
			accion = 'editar'
		}	
		$scope.nuevo = function(){
			$scope.farmacia = {};
			accion = 'nuevo';
		}
		$scope.guardar = function(){
			$scope.farmacia.municipios_id = 1;
			$scope.farmacia.activa = 1;
			farmaciaService.add($scope.farmacia).then(function(data){
				// $log.info(data)
				$scope.farmacias = $scope.farmacias.concat(data)
				// $scope.farmacia = {};
			},function(data){
				$scope.alerts = data
			})	
		}

	}])












