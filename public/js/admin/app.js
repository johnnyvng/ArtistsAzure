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
/*    	.when('/contact/:id?', {
			controller: 'ContactController',
			templateUrl: '/js/admin/partials/contactTmpl.html'
		})*/
		.when('/galleries/:id?', {
			controller: 'GalleryController',
			templateUrl: '/js/admin/partials/galleryTmpl.html'
		})
		.when('/submissions/:id?', {
			controller: 'SubmissionController',
			templateUrl: '/js/admin/partials/submissionTmpl.html'
		})
		.otherwise({ redirectTo: '/pages' });

}]);

