var drink = angular.module('drink', ['ngRoute','ngStorage'])

.config(['$routeProvider',
	function($routeProvider) {
		$routeProvider.
		when('/', {
			templateUrl: 'partials/home.html',
			controller: 'HomeCtrl'
		}).
		otherwise({
			redirectTo: '/'
		});
	}
])

.controller('HomeCtrl', ['$scope','$localStorage', function($scope, $localStorage) {
	$scope.stor = $localStorage;
}]);