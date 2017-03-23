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
	Route::get('/add_news', 'adminController@create_news');
	Route::get('/add_users', 'adminController@create_users');
	Route::post('/store', 'adminController@insert_news');
	Route::post('/users_insert', 'adminController@register1');
	Route::get('/view_news', 'adminController@views_news');
	Route::get('/edit_news/{id}', 'adminController@edit_news');
	Route::get('/delete/{id}', 'adminController@destroy');
	Route::post('/update_news/{id}', 'adminController@update_news');

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

