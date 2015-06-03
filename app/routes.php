<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Pagina Bienvenida y Login*/
Route::get('/',array('uses' => 'HomeController@showLogin'));

Route::when('*', 'csrf', array('post', 'put', 'delete'));

/*login*/
Route::get ('login' , array('uses'   => 'AuthController@index'));
Route::post('login' , array('before' => 'csrf','uses' => 'AuthController@postLogin','as'=>'user.login'));
Route::get ('logout',  array('uses'  => 'AuthController@getLogout','as'=>'user.logout'));

/* Redirecciona a una pagina de error personalizada y ofrece la opcion de ir a inicio o regresar*/
App::missing(function($excepcion)
{
	return Response::view('error.error404',array(),404);
});

Route::group(array('before' => 'auth'), function()
{
	
	/*Pagina Home*/
    Route::get('dashboard', array('uses' => 'HomeController@showDashboard'));

    /*Seccion catalago*/
	Route::get('catalago',array('uses'             => 'CatalagoController@index'));
	Route::post('catalago',array('uses'            => 'CatalagoController@store','as'=>'user.store'));
	Route::post('catalago/edit/{id}',array('uses'  => 'CatalagoController@edit','as'=>'user.data'));
	Route::post('catalago/update',array('uses'     => 'CatalagoController@update','as'=>'user.update'));
	Route::get('catalago/delete/{id}',array('uses' => 'CatalagoController@destroy','as'=>'user.delete'));


	
	

});
