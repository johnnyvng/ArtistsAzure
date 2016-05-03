<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* 
// Basic routes without controllers
Route::get('/', function () {
    return view('welcome');
});
// Route home page
Route::get('/home', function(){
	return view('index');
});
// Route about page
Route::get('/about', function() {
	return view('about');
});
// Route about page
Route::get('/contact', function(){
	return view('contact');
});
// Route contact page
Route::get('/service', function(){
	return view('service');
});
// Route service page
Route::get('/admin', function(){
	return view('admin');
});
*/


// Home page
Route::get('/', 'PageController@index'); 
// Route::get('/', 'PageController@pageImage');
// About page
Route::get('/about', 'PageController@about'); 
// Service page 
Route::get('/service', 'ServiceController@index');
// Clients pages
// Route::get('/services', 'ServicesController@services');
Route::get('/service/Government Landscaping', 'CategoryController@government');
Route::get('/service/Estate Landscaping', 'CategoryController@estate');
Route::get('/service/Commercial Landscaping', 'CategoryController@commercial');
// Gallery page
Route::get('/gallery', 'GalleryController@index');
// Gallery for S3
// Route::get('/galleryS3/{id?}', 'GalleryS3Controller@index');
Route::get('/gallery/list', 'GalleryController@viewGalleryList');
Route::get('/gallery/view/{id?}', 'GalleryController@viewGalleryPics');
// Contact page
Route::get('/contact', 'PageController@contact');
Route::post('/contact/{id?}', 'PageController@save_contact_form');

// Extra route for tempo page
Route::get('/test', function(){
	return view('test');
});
/*Test upload status of dropzone*/
// Route::post('upload-file', function() {
// 	return response('Success', 200);
// });

// Test uploading file to AWS S3
// use Illuminate\Support\Facades\Storage;
/*This route used to upload a text file for testing*/
// Route::get('uploadaws', function() {
// 	echo 123;
// 	$s3 = Storage::disk('s3');
// 	$s3->put('myfile2.txt', 'This is my 2nd time upload to aws bucket', 'public');
// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
  
/*
|--------------------------------------------------------------------------
| Routes to edit from admin site
|--------------------------------------------------------------------------
*/
    Route::get('/admin','AdminController@index');
	Route::resource('ajax/page', 'PageAdminController');
    Route::resource('ajax/service', 'ServiceAdminController');
    Route::resource('ajax/gallery', 'GalleryAdminController');
    Route::resource('ajax/galleryS3', 'GalleryS3AdminController');
	Route::resource('ajax/image', 'ImageAdminController');
	Route::resource('ajax/submission','SubmissionAdminController');

	/*upload file using GalleryS3AdminController with uploadImage function*/
	Route::post('ajax/upload-file', 'GalleryS3AdminController@uploadImage');
	Route::post('ajax/delete-single-image', 'GalleryS3AdminController@deleteSingleImage');


});
