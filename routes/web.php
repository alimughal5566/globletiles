<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontendController@Welcome')->name('welcome');
Route::get('/about-us', 'FrontendController@aboutUs')->name('aboutUs');
Route::get('/view-cart', 'HomeController@viewCart')->name('viewCart');
Route::get('/contect-us', 'FrontendController@contectUs')->name('contectUs');
Route::get('/terms', 'FrontendController@terms')->name('terms');
Route::get('/add-to-cart{id}', 'ProductController@addToCart')->name('addToCart');
Route::get('/delete-cart{id}', 'ProductController@deleteCart')->name('deleteCart');
Route::get('/checkOut', 'ProductController@checkOut')->name('checkOut');
Route::post('/place-order', 'OrderController@placeOrder')->name('placeOrder');
Route::get('/order-home', 'OrderController@orderHome')->name('orderHome');
Route::get('/order-approve/{id}', 'OrderController@orderApprove')->name('orderApprove');
Route::get('/order-history', 'OrderController@orderHistory')->name('orderHistory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/company-details{id}', 'CompanyController@companyDetails')->name('companyDetails');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

//	Company

	Route::get('/company-home', 'CompanyController@companyHome')->name('companyHome');
	Route::get('/add-company', 'CompanyController@addCompany')->name('addCompany');
	Route::get('/company-edit{id}', 'CompanyController@companyEdit')->name('companyEdit');
	Route::get('/company-delete{id}', 'CompanyController@companyDelete')->name('companyDelete');
	Route::post('/create-company', 'CompanyController@createCompany')->name('createCompany');
	Route::post('/update-company{id}', 'CompanyController@updateCompany')->name('updateCompany');

//	category

    Route::get('/category-home', 'CategoryController@categoryHome')->name('categoryHome');
    Route::get('/add-category', 'CategoryController@addCategory')->name('addCategory');
    Route::get('/category-edit{id}', 'CategoryController@categoryEdit')->name('categoryEdit');
    Route::get('/category-delete{id}', 'CategoryController@categoryDelete')->name('categoryDelete');
    Route::post('/create-category', 'CategoryController@createCategory')->name('createCategory');
    Route::post('/update-category{id}', 'CategoryController@updateCategory')->name('updateCategory');
    Route::get('/update-detail{id}', 'CategoryController@categoryDetail')->name('categoryDetail');

//	Product

	Route::get('/product-home', 'ProductController@productHome')->name('productHome');
	Route::get('/add-Products', 'ProductController@addProducts')->name('addProducts');
    Route::post('/product-edit{id}', 'ProductController@productEdit')->name('productEdit');
    Route::get('/product-delete{id}', 'ProductController@productDelete')->name('productDelete');
    Route::post('/create-product', 'ProductController@createProduct')->name('createProduct');
    Route::get('/update-product/{id}', 'ProductController@updateProduct')->name('updateProduct');
    Route::get('/product-details/{id}', 'ProductController@ProductDetails')->name('ProductDetails');


// staff members
    Route::get('/staff-home', 'StaffController@staffHome')->name('staffHome');
    Route::get('/add-staff', 'StaffController@addStaff')->name('addStaff');
    Route::get('/staff-edit{id}', 'StaffController@staffEdit')->name('staffEdit');
    Route::get('/staff-delete{id}', 'StaffController@staffDelete')->name('staffDelete');
    Route::post('/create-staff', 'StaffController@createStaff')->name('createStaff');
    Route::post('/update-staff{id}', 'StaffController@updateStaff')->name('updateStaff');

});
Route::get('/cliect_home', function (){
    return view('layouts.client.app');
})->name('cliectHome');



