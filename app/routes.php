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

/* PAGE CONTROLLER */
Route::get('/', array(
	'as' => 'home',
	'uses' => 'PageController@home'
));

Route::get('/products', array(
	'as' => 'products',
	'uses' => 'PageController@products'
));

Route::get('/services', array(
	'as' => 'services',
	'uses' => 'PageController@services'
));

Route::get('/contact', array(
	'as' => 'contact',
	'uses' => 'PageController@contact'
));

Route::get('/people', array(
	'as' => 'people',
	'uses' => 'PageController@people'
));

/* API ROUTES */

Route::get('api/products', function(){
	$products = Categorygroup::with('categories')->get();
	return $products;
});

/* API ROUTES END HERE */
