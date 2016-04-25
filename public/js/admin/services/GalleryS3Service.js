app.factory('GalleryS3Service', ['$http', function($http) {
    return {
        saveGallery: function(galleryData) {
            return $http({
                headers: {
                    'Content-Type': 'application/json'
                },
                url: baseUrl + '/ajax/galleryS3',
                method: "POST",
                data: {
                    name: galleryData.name
                }
            });
        },
        getAllGalleries: function() {
            return $http.get(baseUrl + '/ajax/galleryS3');
        },
        getGalleryById: function(id) {
            return $http.get(baseUrl + '/ajax/galleryS3/' + id);
        },
        deleteSingleImage: function(data) {
            return $http({
                headers: {
                    'Content-Type': 'application/json'
                },
                url: baseUrl + 'ajax/delete-single-image',
                method: "POST",
                data: {
                    id: data.imageId,
                    galleryId: data.galleryId
                }
            });
        }
    };
}])
