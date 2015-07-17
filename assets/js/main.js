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

.controller('MainCtrl', ['$scope', '$localStorage', '$resource',
	function($scope, $localStorage, $resource) {
		$scope.stor = $localStorage;

		var Categories = $resource('drinks/categories');
		$scope.categories = Categories.query();

		var Drinks = $resource('drinks.json');
		$scope.drinks = Drinks.query();
	}
])

.controller('HomeCtrl', ['$scope',
	function($scope) {

	}
])

.controller('StartCtrl', ['$scope',
	function($scope) {

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
