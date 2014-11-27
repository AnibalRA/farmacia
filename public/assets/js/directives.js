angular.module('farmaciaDirectives', [])

.directive('addCliente', function(){
	return {
		restrict: 'E',
		templateUrl: 'assets/js/views/add-cliente.html'
	}
})