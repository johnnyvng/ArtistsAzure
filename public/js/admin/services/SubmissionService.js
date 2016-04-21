app.factory('Submission', function ($http) {

	return {

		// Get all submissions from server / DB
		list: function () {
			return $http.get('/ajax/submission');
		},

		// Get a single submission from the server / DB
		get: function (id) {
			return $http.get('/ajax/submission/'+id);
		},

		// Save a new submission to the server / DB
		save: function (data) {
			return $http.post('/ajax/submission', data);
		},

		// Update a submission on the server / DB
		update: function (id, data) {
			return $http.put('/ajax/submission/'+id, data);
		}

	}

});