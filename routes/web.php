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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [
	'uses' => 'ClientController@index',
	'as'	=> 'home'
]);
Route::get('/details', [
	'uses' => 'ClientController@details',
	'as'	=> 'details'
]);
Route::get('/contact', [
	'uses' => 'ClientController@contact',
	'as'	=> 'contact'
]);
Route::get('/syarat', [
	'uses' => 'ClientController@syarat',
	'as'	=> 'syarat'
]);
Route::get('/peserta', [
	'uses' => 'ClientController@peserta',
	'as'	=> 'peserta'
]);
Route::get('/gallery', [
	'uses' => 'ClientController@gallery',
	'as'	=> 'gallery'
]);
Route::POST('/contact/store',[
	'uses'	=> 'ClientController@store',
	'as'	=> 'contact.store'
]);
Route::GET('/peserta/kategori/{id}', [
	'uses'	=> 'ClientController@kategori',
	'as'	=> 'peserta.kategori'
]);
Route::GET('/query', [
	'uses'	=> 'ClientController@search',
	'as'	=> 'peserta.search'
]);
Route::GET('/maps/download', [
	'uses'	=> 'ClientController@getDownload',
	'as'	=> 'maps.download'
]);


//register
Route::POST('/join/store',[
	'uses'	=> 'PesertaController@store',
	'as'	=> 'peserta.store'
]);
Route::GET('/join',[
	'uses'	=> 'PesertaController@create',
	'as'	=> 'peserta.create'
]);
Route::GET('/upload/{id}',[
    'uses'  => 'PesertaController@upload',
    'as'    => 'peserta.upload'
]);
Route::POST('/upload/store',[
    'uses'  => 'UploadController@store',
    'as'    => 'upload.store'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');


//Logged in users/seller cannot access or send requests these pages
Route::group(['middleware' => 'seller_guest'], function() {

// Route::get('seller_register', 'SellerAuth\RegisterController@showRegistrationForm');
// Route::post('seller_register', 'SellerAuth\RegisterController@register');
Route::get('seller_login', 'SellerAuth\LoginController@showLoginForm');
Route::post('seller_login', 'SellerAuth\LoginController@login');

//Password reset routes
Route::get('seller_password/reset', 'SellerAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('seller_password/email', 'SellerAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('seller_password/reset/{token}', 'SellerAuth\ResetPasswordController@showResetForm');
Route::post('seller_password/reset', 'SellerAuth\ResetPasswordController@reset');

});


//Only logged in sellers can access or send requests to these pages
Route::group(['prefix' => 'admin','middleware' => 'seller_auth'], function(){

Route::post('seller_logout', 'SellerAuth\LoginController@logout');
// Route::get('/dashboard', function(){
//   return view('seller.home');
// });
	Route::GET('/dashboard', [
		'uses'	=> 'AdminController@index',
		'as'	=> 'dashboard'
	]);
	Route::GET('/request', [
		'uses'	=> 'AdminController@request',
		'as'	=> 'request'
	]);
	Route::GET('/show/{id}', [
		'uses'	=> 'AdminController@show',
		'as'	=> 'admin.show'
	]);
	Route::POST('/users/store',[
		'uses'	=> 'AdminController@store',
		'as'	=> 'admin.store'
	]);
	Route::GET('/details',[
		'uses'	=> 'AdminController@details',
		'as'	=> 'admin.details'
	]);
	Route::GET('/report',[
		'uses'	=> 'AdminController@report',
		'as'	=> 'admin.report'
	]);
	Route::GET('/mail/', [
		'uses'	=> 'AdminController@mail',
		'as'	=> 'admin.mail'
	]);
	Route::GET('/delete/{$id}', [
		'uses'	=> 'AdminConroller@destroy',
		'as'	=> 'admin.delete'
	]);
	Route::GET('/home/edit/{id}', [
		'uses'	=> 'PesertaController@index',
		'as'	=> 'peserta.edit'
	]);
	Route::GET('/tiket', [
		'uses'	=> 'TiketController@index',
		'as'	=> 'tiket'
	]);
	Route::GET('/tiket/edit/{id}', [
		'uses'	=> 'TiketController@edit',
		'as'	=> 'tiket.edit'
	]);
	Route::POST('/tiket/update/{id}', [
		'uses'	=> 'TiketController@update',
		'as'	=> 'tiket.update'
	]);
	Route::GET('/tiket/create', [
		'uses'	=> 'TiketController@create',
		'as'	=> 'tiket.create'
	]);
	Route::POST('/tiket/store', [
		'uses'	=> 'TiketController@store',
		'as'	=> 'tiket.store'
	]);

	Route::GET('/laporan/all', [
		'uses'	=> 'PdfController@laporanall',
		'as'	=> 'laporan.all'
	]);
	Route::GET('/laporan', [
		'uses'	=> 'PdfController@laporan',
		'as'	=> 'laporan'
	]);

	Route::GET('/kategori', [
		'uses'	=> 'KategoriController@index',
		'as'	=> 'kategori'
	]);
	Route::GET('/kategori/create', [
		'uses'	=> 'KategoriController@create',
		'as'	=> 'kategori.create'
	]);
	Route::POST('/kategori/create/store', [
		'uses'	=> 'KategoriController@store',
		'as'	=> 'kategori.store'
	]);
	Route::GET('/kategori/edit/{id}', [
		'uses'	=> 'KategoriController@edit',
		'as'	=> 'kategori.edit'
	]);
	Route::POST('/kategori/update/{id}', [
		'uses'	=> 'KategoriController@update',
		'as'	=> 'kategori.update'
	]);

});

Route::get('/notif', function() {
    $user = \App\User::first();
    $user->notify(new \App\Notifications\Daftar);
});