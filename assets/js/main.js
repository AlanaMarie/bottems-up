var drink = angular.module('drink', ['ngRoute', 'ngResource', 'ngStorage'])

.config(['$routeProvider',
	function($routeProvider) {
		$routeProvider.
		when('/', {
			templateUrl: 'partials/home.html',
			controller: 'HomeCtrl'
		}).
		when('/settings', {
			templateUrl: 'partials/settings.html',
			controller: 'SettingsCtrl'
		}).
		when('/start', {
			templateUrl: 'partials/start.html',
			controller: 'StartCtrl'
		}).
		when('/list', {
			templateUrl: 'partials/list.html',
			controller: 'ListCtrl'
		}).
		otherwise({
			redirectTo: '/'
		});
	}
])

.controller('MainCtrl', ['$scope', '$localStorage', '$resource', '$location',
	function($scope, $localStorage, $resource, $location) {
		$scope.stor = $localStorage;

		var Categories = $resource('/backend/drinks/categories');
		$scope.categories = Categories.query();

		var Drinks = $resource('/backend/drinks');
		$scope.drinks = Drinks.query();

		$scope.go = function(type) {
			$scope.stor.user = {
				type: type
			};
			$location.path('/settings');
		};
	}
])

.controller('HomeCtrl', ['$scope',
	function($scope) {

	}
])

.controller('StartCtrl', ['$scope',
	function($scope) {
		var Random = $resource('/backend/random');
		$scope.random = Drinks.get({
			category: $scope.stor.d
		});
	}
])

.controller('SettingsCtrl', ['$scope',
	function($scope) {

	}
])

.controller('ListCtrl', ['$scope',
	function($scope) {

	}
]);
