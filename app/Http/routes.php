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
*/
/*
Route::get('/', function(){
	return view('index');
});
// Route home page
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


// Routes artiststest.dev and artiststest.dev/home show the index page which contains general information about the Outdoor Artists services.
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

// About page’s URL artiststest.dev/about. This route shows the history, vision, and mission of the company.
Route::get('/about', 'HomeController@about');

// Services page’s URL artiststest.dev/services. 
// This route shows all services offered by the Outdoor Artists and it also contains a shared gallery which covers all 5 services
Route::get('/services', 'ServicesController@services');

// Contact’s URL will be artiststest.dev/contact. 
// This route shows a contact form which allows new or existing clients fill out first name, last name, phone number, email and comments
Route::get('/contact', 'ContactController@contact');

// Admin Edit URL will be artiststest.dev/admin-edit. 
// This route shows the interface where admin can add, edit and modify their posts within the Outdoor Arts website.
Route::get('/admin-edit', 'adminController@admin_edit');
Route::get('/admin-dave', 'adminController@admin_dave');


/*
// Tempo Page route
Route::get('/test', function(){
	return view('test');
});*/

// artiststest.dev/test route shows the new html/css template TEMPO for the website.
Route::get('/test', 'HomeController@test');

// artiststest.dev/page-dave route shows the page.blade.php from professor David
Route::get('/page-dave', 'HomeController@page_dave');
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

Route::group(['middleware' => ['web']], function () {
    //
});
