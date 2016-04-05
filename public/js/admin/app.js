var app = angular.module('adminApp', ['ngRoute']);

app.config(['$routeProvider',function($routeProvider) {
	$routeProvider
		.when('/pages/:id?', {
			controller: 'PageController',
			templateUrl: '/js/admin/partials/pageTmpl.html'
		})
    .when('/services/:id?', {
      controller: 'ServiceController',
      templateUrl: '/js/admin/partials/serviceTmpl.html'
    })
		.otherwise({ redirectTo: '/pages' });

}]);

