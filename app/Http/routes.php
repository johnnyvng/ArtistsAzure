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
// Blade::setContentTags('<%', '%>');				// for variables and all things Blade
// Blade::setEscapedContentTags('<%%', '%%>');		// for escaped data


/*
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
// Route::get('/testNewTemp', 'HomeController@test');


/*
|--------------------------------------------------------------------------
| // Route for admin sites (Pages)
|--------------------------------------------------------------------------
*/
Route::get('/about', 'PageController@about'); // Edit the about page
// Route::get('/home', 'PageController@index'); // Edit the home page*/
Route::get('/', 'PageController@index'); // Edit the home page


/*
|--------------------------------------------------------------------------
| // Route to edit home and about pages using the admin site (Pages)
|--------------------------------------------------------------------------
*/
/*
Route::get('/service', 'ServiceController@service');
Route::resource('ajax/service', 'ServiceAdminController');
*/

/*
|--------------------------------------------------------------------------
| Project.app Routes
|--------------------------------------------------------------------------
*/

Route::get('/government', 'ServiceController@government');
Route::get('/largeestate', 'ServiceController@largeestate');
Route::get('/commercial', 'ServiceController@commercial');

// Routes project.app and project.app/home show the index page which contains general information about the Outdoor Artists services.
// Route::get('/home', 'HomeController@index');
// Route::get('/', 'HomeController@index');

// About page’s URL project.app/about. This route shows the history, vision, and mission of the company.
//Route::get('/about', 'HomeController@about');

// Services page’s URL project.app/services. 
// This route shows all services offered by the Outdoor Artists and it also contains a shared gallery which covers all 5 services
// Route::get('/services', 'ServicesController@services');

// Contact’s URL will be project.app/contact. 
// This route shows a contact form which allows new or existing clients fill out first name, last name, phone number, email and comments
Route::get('/contact', 'ContactController@contact');

// Admin Edit URL will be project.app/admin-edit. 
// This route shows the interface where admin can add, edit and modify their posts within the Outdoor Arts website.
//Route::get('/admin-edit', 'adminController@admin_edit');

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
    Route::get('/admin','AdminController@index');

	Route::resource('ajax/page', 'PageAdminController');
    Route::resource('ajax/service', 'ServiceAdminController');

    Route::get('/service', 'ServiceController@service');
    

    // Create the new Gallery and Images function
	Route::get('gallery/list', 'GalleryController@viewGalleryList');
	Route::post('gallery/save', 'GalleryController@saveGallery');
	Route::get('gallery/view/{id}', 'GalleryController@viewGalleryPics');
	Route::post('image/do-upload', 'GalleryController@doImageUpload');

});
