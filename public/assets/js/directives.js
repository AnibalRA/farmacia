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


//productos
.directive('addProducto', function(){
	return{
		restrict: 'E',
		templateUrl: 'assets/js/views/producto/add-producto.html'
	}
})
//productos
.directive('listaProductos', function(){
	return{
		restrict: 'E',
		templateUrl: 'assets/js/views/producto/lista-productos.html'
	}
})

.directive('alerts',function(){
	return {
		restrict: "E",
		template: "<alert ng-repeat='alert in alerts' type='{{alert.type}}' close='closeAlert($index)'>{{alert.msg}}</alert>"
	}
})


.directive('addFarmacia', function(){
	return {
		restrict 	: 'E',
		templateUrl : 'assets/js/views/farmacia/add-farmacia.html'
	}
})


.directive('sucursales', function(){
	return {
		restrict : 'E',
		templateUrl : 'assets/js/templates/sucursales.html'
	}
})
.directive('addSucursal', function(){
	return{
		restrict 	: 'E',
		templateUrl	: 'assets/js/views/sucursal/add-sucursal.html'
	}
})
.directive('listaSucursal', function(){
	return{
		restrict 	: 'E',
		templateUrl	: 'assets/js/views/sucursal/lista-sucursales.html'
	}
})


