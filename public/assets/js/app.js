
var app = angular.module('farmacia', ['ngRoute','farmaciaControllers']).


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
				.otherwise({
					redirectTo: '/'
				})
		}]);