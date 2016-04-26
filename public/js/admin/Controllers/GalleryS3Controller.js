app.controller('GalleryS3Controller', ['$scope', '$location', 'GalleryS3Service', '$timeout', '$routeParams', 'Lightbox', 

    function($scope, $location, GalleryS3Service, $timeout, $routeParams, Lightbox, data) {

        /*Show the logs all the galleries*/
        GalleryS3Service.getAllGalleries().success(function(response) {
            // $scope.galleries = response;
            // console.log(response);
            // Adding timeout like loading page
            $timeout(function() {
                $scope.galleries = response;
                $scope.showGallery = true;
            }, 1000);

        });

        /* Single Gallery Page with $routeParams. If the param is present, load the single gallery data*/
        if ($routeParams.id) {
            // console.log('Single gallery page' + $routeParams.id);
            GalleryS3Service.getGalleryById($routeParams.id).success(function(response) 
            {
                $scope.singleGallery = response;
                // console.log($scope.singleGallery);
            });
        }

        /*Getting all the galleries*/
        if (data && data.galleries != undefined) {
            data.galleries.success(function(response) {
                $scope.galleries = response;
                console.log('Galleries loaded', $scope.galleries);
                $scope.showGallery = true;
            });
        }

        /*Fetch a single gallery on the view gallery page*/
        if (data && data.singleGallery != undefined) {
            data.singleGallery.success(function(response) {
                console.log('Gallery details', response);
                $scope.singleGallery = response;
            });
        }

        $scope.$on('imageAdded', function(event, args) {
            $scope.singleGallery = args;
            console.log('Inside event', $scope.singleGallery);
            $scope.$apply();
        });

        /*Variables*/
        angular.extend($scope, {
            newGallery: {},
            errorDiv: false,
            errorMessages: [],
            singleGallery: {},
            dropzoneConfig: {
                'options': {
                    'url': baseUrl + 'ajax/upload-file'
                },
                'eventHandlers': {
                    'sending': function(file, xhr, formData) {
                        console.log('Sending');
                        formData.append('_token', csrfToken);
                        formData.append('galleryId', $routeParams.id);
                    },
                    'success': function(file, response) {
                        // console.log('Success');
                        console.log(response);
                        $scope.singleGallery.images.push(response);
                        console.log($scope.singleGallery);
                        $scope.$emit('imageAdded', $scope.singleGallery);
                    }
                }
            }
        });

        /*Functions*/
        angular.extend($scope, {
            saveNewGallery: function(addGalleryForm) {
                console.log(addGalleryForm);
                if (addGalleryForm.$valid) {
                    $scope.formSubmitted = false;
                    GalleryS3Service.saveGallery($scope.newGallery).success(function(response) {
                        $location.path('/galleryS3/view');
                    });
                } else {
                    $scope.formSubmitted = true;
                    console.log('Error');
                }
            },
            viewGallery: function(id) {
                $location.path('/galleryS3/view/' + id);
            },
            openLightboxModal: function(index) {
                Lightbox.openModal($scope.singleGallery.images, index);
            },
            deleteImage: function(imageId) {
                var data = {
                    imageId: imageId,
                    galleryId: $routeParams.id
                };
                GalleryS3Service.deleteSingleImage(data).success(function(response) {
                    console.log('response', response);
                    $scope.singleGallery = response;
                });
            }
        });
    }
]);
