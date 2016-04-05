app.controller('ServiceController', function ($scope, $routeParams, Service) {

	$scope.service_list = [];			// Variable for all pages
	$scope.current_service = null;		// Variable for the page shown in the form

	// At startup, check to see if a specific page was requested
	function init() {
		if ($routeParams.id) {
			$scope.getService($routeParams.id);
		};
		$scope.getAllServices();
	}

	// Go and get the list of all pages
	$scope.getAllServices = function () {
		Service.list().success(function (data) {
			$scope.service_list = data;
		});
	}

	// Gets a specific page from the database
	$scope.getService = function (service_id) {
		Service.get(service_id).success(function (data) {
			$scope.current_service = data;
		});
	}

	// Saves what is in the form
	$scope.saveService = function () {
		
		if ($scope.current_service.id) {
			Service.update($scope.current_service.id, $scope.current_service).success(function (data) {
				$scope.current_service = data;
			});
		} else {
			Service.save($scope.current_service).success(function (data) {
				$scope.current_service = data[0];				
			});
		};
		$scope.getAllServices();
	}

	// Resets the form
	$scope.clearService = function () {
		$scope.current_service = null;
	}

	// Call the startup script
	init();


});