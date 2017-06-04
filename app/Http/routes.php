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
	Route::get('/query_news', 'adminController@search_news');

	//users
	Route::get('/add_users', 'adminController@create_users');
	Route::get('/biodata1', 'adminController@biodata1');
	Route::get('/biodata2', 'adminController@biodata2');
	Route::get('/biodata3', 'adminController@biodata3');
	Route::get('/biodata4', 'adminController@biodata4');
	Route::get('/test', 'userController@biodata');
	Route::get('/add_biodata/{id}', 'adminController@biodata');
	Route::get('/edit_biodata/{id}', 'adminController@editbiodata');
	Route::get('/edit_lamaran/{id}', 'adminController@edit_lamaran');
	Route::post('/update_biodata/{id_user}', 'adminController@updatebiodata');
	Route::post('/lamaran_kerja/', 'adminController@lamaran');
	Route::get('/view_users', 'adminController@views_users');
	Route::get('/edit_users/{id}', 'adminController@edit_users');
	Route::post('/update_users/{id}', 'adminController@update_users');
	Route::get('/query_users', 'adminController@search_user');
	Route::post('/users_insert', 'adminController@register1');
	Route::get('/delete_user/{id}', 'adminController@destroy_user');
	Route::post('/insert_biodata', 'adminController@insert_biodata');
	Route::post('/insert_biodata1', 'adminController@insert_biodata1');
	Route::post('/insert_biodata2', 'adminController@insert_biodata2');
	Route::post('/insert_biodata3', 'adminController@insert_biodata3');
	
	Route::post('/lamaran', 'adminController@insert_lamaran');
	Route::get('/kirim_email/{id}', 'MailController@html_email');
	Route::post('/lamaran1', 'adminController@insert_lamaran1');
	Route::get('/lamaran3', 'adminController@lamaran_view');

	//jobs
	Route::get('/add_jobs', 'adminController@create_jobs');
	Route::post('/jobs_insert', 'adminController@insert_jobs');
	Route::get('/view_jobs', 'adminController@views_jobs');
	Route::get('/delete_jobs/{id}', 'adminController@destroy_jobs');
	Route::get('/edit_jobs/{id}', 'adminController@edit_jobs');
	Route::post('/update_jobs/{id}', 'adminController@update_jobs');
	/*login*/
	//home
	Route::get('/search_lowongan/{id}', 'adminController@cari_lowongan');
	Route::get('/search_lowongan1/', 'adminController@cari_lowongan1');
	//biodata//
Route::get('sendbasicemail','MailController@postmakeInsuranceClaim') ;
Route::get('sendhtmlemail','MailController@html_email') ;
Route::get('sendattachmentemail','MailController@attachment_email') ;
	
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

