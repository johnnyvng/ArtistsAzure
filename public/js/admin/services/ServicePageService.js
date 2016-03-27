app.factory('Service', function ($http) {

	return {

		// Get all services from server / DB
		list: function () {
			return $http.get('/ajax/service');
		},

		// Get a single service from the server / DB
		get: function (id) {
			return $http.get('/ajax/service/'+id);
		},

		// Save a new service to the server / DB
		save: function (data) {
			return $http.post('/ajax/service', data);
		},

		// Update a service on the server / DB
		update: function (id, data) {
			return $http.put('/ajax/service/'+id, data);
		}

	}

});