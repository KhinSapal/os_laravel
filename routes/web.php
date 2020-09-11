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

// Route::get('/', function () {
//     return view('welcome');

// });

// Route::get('testing/{id}/{name}','PageController@testingfun')->name('testingpage');

Route::get('/','PageController@mainfun')->name('mainpage');
Route::get('subcategory/{id}','PageController@subcategoryfun')->name('subcategorypage');
Route::get('promotion','PageController@promotionfun')->name('promotionpage');
Route::get('shoppingcart','PageController@shoppingcartfun')->name('shoppingcartpage');
Route::get('itemdetail/{id}','PageController@itemdetailfun')->name('itemdetailpage');
Route::get('brand/{id}','PageController@brandfun')->name('brandpage');
//backend
// Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

//oreder controller
Route::resource('orders','OrderController');

Route::get('login','PageController@loginfun')->name('loginpage');


Route::middleware('role:Admin')->group(function ()
{
	Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
	Route::resource('items','ItemController');

	//brand
	Route::resource('brands','BrandController');

	//category
	Route::resource('categories','CategoryController');

	//subcategory
	Route::resource('subcategories','SubcategoryController');

	

});

//item




Auth::routes();
Route::get('loginform','PageController@loginfun')->name('loginpage');
Route::get('registerform','PageController@registerfun')->name('registerpage');

// Route::get('loginform','PageController@loginfun')->name('loginpage');

Route::get('/home', 'HomeController@index')->name('home');


 Route::get('backendroute','BackendController@backendfun')->name('backendpage');
 Route::get('index','BackendController@orderlist')->name('index');
 Route::get('orderdetail/{id}','BackendController@orderdetail')->name('orderdetail');
