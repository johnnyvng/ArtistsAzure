var app = angular.module('adminApp', ['ngRoute',  'ui.bootstrap', 'bootstrapLightbox','angular-loading-bar']);

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
        .when('/galleryS3/add', {
            templateUrl: 'js/admin/partials/gallery/gallery-add.html',
            controller: 'GalleryS3Controller'
        })  
        // Gallery for DropzoneJS
        .when('/galleryS3/view', {
            templateUrl: 'js/admin/partials/gallery/gallery-view.html',
            controller: 'GalleryS3Controller'
        })
        .when('/galleryS3/view/:id?', {
            templateUrl: 'js/admin/partials/gallery/gallery-single.html',
            controller: 'GalleryS3Controller'
        })        
		.when('/submissions/:id?', {
			controller: 'SubmissionController',
			templateUrl: '/js/admin/partials/submissionTmpl.html'
		})
		.otherwise({ redirectTo: '/' });	

}]);

app.directive('dropzone', function() {
    return function(scope, element, attrs) {
        var config, dropzone;

        config = scope[attrs.dropzone];

        // create a Dropzone for the element with the given options
        dropzone = new Dropzone(element[0], config.options);

        // bind the given event handlers
        angular.forEach(config.eventHandlers, function(handler, event) {
            dropzone.on(event, handler);
        });
    };
});

