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
			// $scope.proveedores = []
			proveedorService.all().then(
				function (data){
					$log.info(data)
					$scope.proveedores = data;
				},
				function (data){
					$log.info('error')
					//agregar un mensaje de error por que no se han podido descargar todos los proveedores
					$scope.proveedores = [];
				}
			)

			$scope.show = function (id){
				result = $scope.proveedores.filter(function (proveedor){
					return proveedor.id === id;
				});
				$scope.proveedor = result[0];
				// $scope.proveedor = $scope.proveedores[id]
				$log.info(id)
				$log.info($scope.proveedor)
			}
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

	.controller('productoController', ['productoService','$scope','$modal', '$log', function(productoService, $scope, $modal, $log){
		$scope.productos = [];
		$scope.mostrar = 'lista' 
		productoService.all().then(function (data){
			$scope.productos = data;
			productoService.categorias().then(function (data){
				$scope.categorias = data;
			})
		})
		$scope.subCats = function(idCat){
			productoService.subCategorias(idCat).then(function (data){
				$scope.subCategorias = data;
				$log.info(data)
			})
		}

		$scope.guardar = function(){
			$scope.producto.subcategoria_id = $scope.subCategoria.id;
			$log.info($scope.producto)
			productoService.add($scope.producto).then(function (data){
				$scope.producto = {};
				$log.info(data)
			},function (data){
				$scope.alerts = data
			})
		}
		$scope.show = function (visible){
			$scope.mostrar = visible;
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
		
		function init(){
			accion = 'nuevo';
			$scope.options = false;
			$scope.action = 'sucursales';
			$scope.farmacias = [];
			$scope.farmacia = {};
			
			farmaciaService.all().then(function(data){
				$scope.farmacias = data;
				$scope.farmacia = $scope.farmacias[0];
				showSucursales($scope.farmacia.id);
			})
		}

		$scope.show  = function (show, id){
			$scope.action = show;
			// $log.info(id)
			if(show == 'sucursales')
				showSucursales(id);
			// else
				edit(id)
		}

		function showSucursales(id){
			farmaciaService.sucursales(id).then(function(data){
				$scope.sucursales = data;
			})
		}

		function edit (id){
			// $scope.farmacia = $scope.farmacias[index];
			// accion = 'editar'
			result = $scope.farmacias.filter(function (farmacia){
				return farmacia.id === id;
			});
			$scope.farmacia = result[0];

			$log.info(id)
			$log.info($scope.farmacia)

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

		$scope.visible  = function(visible){
			this.options = visible;
		}

		init() //Inicializando todas las variasbles

	}])


	.controller('sucursalController',['$scope','$log', 'sucursalService', function($scope, $log, sucursalService){
		$scope.action = 'lista';
		$scope.opciones = false;
		$scope.sucursal = {
			// 'nombre'	: 'Sucursal 1'
		};
		$scope.show = function (show){
			$scope.action = show
		}

		$scope.cancel = function(){
			$scope.show('lista')
		}
		$scope.edit = function(id){
			result = $scope.sucursales.filter(function (sucursal){
						return sucursal.id === id;
					});
			$scope.sucursal = result[0]
			$log.info($scope.sucursal + " sdf " + id);
			$scope.show('add')
		}

		$scope.visible = function(visible){
			this.opciones = visible;
		}
		//function para guardar la sucursal
		$scope.save = function () {
			$log.info('saving...')
			$scope.sucursal.farmacia_id = $scope.farmacia.id;
			$scope.sucursal.municipios_id = 1;
			// $log.info($scope.sucursal)
			sucursalService.add($scope.sucursal).then(function(data){
				// $log.info(data)
				$scope.sucursales = $scope.sucursales.concat(data)
				// $scope.farmacia = {};
				$log.info(data)
				$scope.show('lista')
			},function(data){
				$log.info('ERROR: ' + data);
				$scope.alerts = data
			})	
		}
	}])











