<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::group(['middleware'=>['web']],function(){
	//Auth routes
	
	
	Route::auth();

	Route::get('/home', 'HomeController@index');	

	
	Route::get('/', function () {    return view('welcome');
	});

	Route::get('/fullArticle/{id}','ArticleController@show');
	
//	Route::get('/create','PostController@store');
//	Route::post('upload','PostController@upload');

	Route::resource('posts','PostController');
	Route::get('contactus',function(){return view('partials._contactus');});


});
// Route::get('/fullArticle','PostController@full'); //for tests


