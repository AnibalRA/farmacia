angular.module('farmaciaDirectives', [])

.directive('addCliente', function(){
	return {
		restrict: 'E',
		templateUrl: 'assets/js/views/add-cliente.html'
	}
})
.directive('listaCliente', function(){
	return {
		restrict: 'E',
		templateUrl: 'assets/js/views/lista-cliente.html'
	}
})

.directive('addFarmacia', function(){
	return {
		restrict: 'E',
		templateUrl: 'assets/js/views/add-farmacia.html'
	}
})
.directive('addProveedor', function(){
	return {
		restrict: 'E',
		templateUrl: 'assets/js/views/proveedor/add-proveedor.html'
	}
}).directive('listaProveedor', function(){
	return {
		restrict: 'E',
		templateUrl: 'assets/js/views/proveedor/lista-proveedor.html'
	}
})




.directive('alerts',function(){
	return {
		restrict: "E",
		template: "<alert ng-repeat='alert in alerts' type='{{alert.type}}' close='closeAlert($index)'>{{alert.msg}}</alert>"
	}
})


