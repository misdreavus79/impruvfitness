<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home', ['page_title' => 'Home', 'registration_date' => date('m/d/Y')]);
});

Route::get('/', function(){
	return view('temphome', ['page_title' => 'Impruv Fitness']);
});

Route::get('/about', function () {
    return view('about', ['page_title' => 'About']);
});

Route::get('/team', function () {
    return view('team', ['page_title' => 'Team']);
});

Route::get('/services', function () {
    return view('services', ['page_title' => 'Services']);
});

Route::get('/events', function () {
    return view('workshops', ['page_title' => 'Workshops']);
});

Route::get('/nutrition', function () {
    return view('nutritioncounseling', ['page_title' => 'Nutrition Counseling']);
});

Route::group(['prefix' => 'training'], function(){
	Route::get('group', function () {
	    return view('grouptraining', ['page_title' => 'Small Group Training']);
	});
	Route::get('personal', function () {
	    return view('personaltraining', ['page_title' => 'Personal Training']);
	});
	Route::get('youth', function () {
	    return view('youthtraining', ['page_title' => 'Youth Training']);
	});
	Route::get('online', function () {
	    return view('onlinetraining', ['page_title' => 'Online Training']);
	});
});

//Asset Routes
Route::group(['prefix' => 'asset'], function(){
	Route::get('new', function () {
	    return view('newasset', ['page_title' => 'Upload New Asset']);
	});
	Route::get('edit/{id}', function () {
	    return view('editasset', ['page_title' => 'Edit Asset']);
	});
	Route::post('new', 'AssetController@create');
	Route::put('edit', 'AssetController@update');
});

//Post Routes
Route::group(['prefix' => 'post'], function(){
	Route::get('new', function () {
	    return view('newpost', ['page_title' => 'New Post']);
	});
	Route::get('edit/{id}', function () {
	    return view('editpost', ['page_title' => 'Edit Post']);
	});
	Route::post('new', 'PostController@create');
	Route::put('edit', 'PostController@update');
	Route::get('{slug}', 'PostController@display');
});

Route::get('styles', function () {
    // return view('welcome');
    return view('styleguide', ['page_title' => 'Style Guide']);
});

// Auth::routes();

// Route::get('/home', 'HomeController@index');
