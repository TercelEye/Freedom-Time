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


Route::get('/', 'HomeController@homepage');


//secure routes
Route::group(['middleware' => ['auth','web']], function () {
    Route::get('dashboard', 'UserController@dashboard');
	Route::post('invitation/send_invitation', 'InviteController@send_invitation');
	Route::post('invitation/send_affiliate', 'InviteController@send_affiliate');
	Route::get('invitation/my_candidates', 'InviteController@my_candidate');
	Route::get('invitation/my_affilites', 'InviteController@my_affilites');
	
	Route::post('user/edit_information', 'UserController@edit_information');
	Route::post('user/edit_address', 'UserController@edit_address');
	Route::post('user/edit_paypalemail', 'UserController@edit_paypalemail');
	Route::post('user/edit_password', 'UserController@edit_password');
	
	//payment 
	Route::get('user/billing', 'PaymentController@paynow');
	Route::post('user/billing', 'PaymentController@paynow_process');
	Route::get('payment', 'PaymentController@chargeCreditCard');

});
	
Route::group(['middleware' => ['auth','web','admin']], function () {	
	Route::get('admin', 'admin\AdminDashboard@index');
	Route::get('admin/login', 'admin\AdminDashboard@index');
	Route::get('admin/affiliates', 'admin\AffiliatesController@all');
	
	Route::get('admin/training', 'admin\TrainingController@index');
	Route::post('admin/training', 'admin\TrainingController@store_training');
	Route::post('admin/delete_training', 'admin\TrainingController@delete_training');
	Route::get('admin/training/category', 'admin\TrainingController@category');
	Route::post('admin/training/category', 'admin\TrainingController@store_category');
});


Route::get('interest/only-products', 'InterestController@only_product');
Route::post('interest/only-products', 'InterestController@store_only_product');
Route::get('interest/form', 'InterestController@form');
Route::post('interest/form', 'InterestController@store_form');
Route::get('interest/cancel', 'InterestController@cancel_invitation');


Route::post('user/login', 'UserController@login');
Route::get('video', 'InviteController@video');
Route::post('referrer_id_validate', 'InviteController@is_user_exists');
Route::post('can-watch', 'InviteController@video_validate');

//products
Route::get('products/freshair', 'ProductsController@freshair');
Route::get('products/laundrypure', 'ProductsController@laundry');
Route::get('products/livingwater', 'ProductsController@livingwater');
Route::get('products/neutra', 'ProductsController@neutra');
Route::get('products/letter', 'ProductsController@letter');

Route::auth();

// Registration Routes...
Route::get('register/{username}', 'UserController@register');
Route::post('register/{username}', 'Auth\AuthController@register');


