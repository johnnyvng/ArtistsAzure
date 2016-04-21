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
// About page
Route::get('/about', 'PageController@about'); 
// Service page 
// Route::get('/services', 'ServicesController@services');
Route::get('/service', 'ServiceController@service');
// Clients pages
Route::get('/government', 'ServiceController@government');
Route::get('/largeestate', 'ServiceController@largeestate');
Route::get('/commercial', 'ServiceController@commercial');
// Gallery page
Route::get('/gallery/{id?}', 'GalleryController@index');
// Contact page
Route::get('/contact', 'ContactController@contact');
Route::post('/contact', 'ContactController@save_contact_form');

// Extra route for tempo page
Route::get('/test', function(){
	return view('test');
});


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
    Route::resource('ajax/request', 'RequestAdminController');
    Route::resource('ajax/gallery', 'GalleryAdminController');
	Route::resource('ajax/image', 'ImageAdminController');
	Route::resource('ajax/submission','SubmissionAdminController');

	

});
