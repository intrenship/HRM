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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'web'], function (){
	Route::auth();
});
Route::group(['middleware' => ['web','auth']], function(){
	/*superadmin*/
	Route::get('/home', 'HomeController@index');
	Route::get('/superadmin', 'HomeController@superadmin');
	//news
	Route::get('/add_news', 'adminController@create_news');
	Route::post('/store', 'adminController@insert_news');
	Route::get('/view_news', 'adminController@views_news');
	Route::get('/edit_news/{id}', 'adminController@edit_news');
	Route::post('/update_news/{id}', 'adminController@update_news');
	Route::get('/delete/{id}', 'adminController@destroy');

	//users
	Route::get('/add_users', 'adminController@create_users');
	Route::get('/view_users', 'adminController@views_users');
	Route::get('/edit_users/{id}', 'adminController@edit_users');
	Route::post('/update_users/{id}', 'adminController@update_users');
	Route::get('/query_users', 'adminController@search_user');
	Route::post('/users_insert', 'adminController@register1');
	Route::get('/delete_user/{id}', 'adminController@destroy_user');

	//jobs
	Route::get('/add_jobs', 'adminController@create_jobs');
	Route::post('/jobs', 'adminController@insert_jobs');
	Route::get('/view_jobs', 'adminController@views_jobs');
	Route::get('/delete_jobs/{id}', 'adminController@destroy_jobs');
	Route::get('/edit_jobs/{id}', 'adminController@edit_jobs');
	Route::post('/update_jobs/{id}', 'adminController@update_jobs');

	/*login*/
	Route::get('/login1', function(){
		if (Auth::user()->id_group == 1){
			return view('superadmin/superadmin');
		}elseif (Auth::user()->id_group == 2){
			return view('admin/admin_home');
		}else{
			return view ('user/user_home');
		}
	});
});
Route::get('/add', 'adminController@create_news');

Route::get('admin', ['middleware' => ['web','auth','admin'], function(){
	return view('admin/admin_home');
	
}]);

