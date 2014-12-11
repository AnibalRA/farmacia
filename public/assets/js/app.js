
var app = angular.module('farmacia', [
			'ngRoute',
			'ui.bootstrap',
			'infinite-scroll',
			'farmaciaControllers',
			'farmaciaServices',
			'farmaciaDirectives'
			]).


		config(['$routeProvider', function ($routeProvider){
			$routeProvider
				.when('/',{
					controller: 'inicioController',
					templateUrl: 'assets/js/templates/inicio.html'
				})
				.when('/clientes',{
					controller:'clienteController',
					templateUrl: 'assets/js/templates/clientes.html'
				})
				.when('/proveedores',{
					controller:'proveedorController',
					templateUrl: 'assets/js/templates/proveedor.html'
				})
				.when('/productos',{
					controller:'productoController',
					templateUrl: 'assets/js/templates/productos.html'
				})
				.when('/farmacias',{
					controller 	: 'farmaciaController',
					templateUrl	: 'assets/js/templates/farmacias.html'
 				})
				.otherwise({
					redirectTo: '/'
				})
		}]);