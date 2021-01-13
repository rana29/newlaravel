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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/***********************logincontroller*************************************/


Route::group(['middleware'=>['auth','admin','login','verified']],function(){

Route::prefix('admin')->name('admin.')->group(function(){

Route::get('/dashbord','AdminController@dashbord')->name('dashbord');

});

}); 


Route::group(['middleware'=>['auth','author','login']],function(){

Route::prefix('author')->name('author.')->group(function(){

Route::get('/dashbord','AuthorController@dashbord')->name('dashbord');

	
});
});


/******************Productcontroller***********************/


Route::prefix('brand')->name('brand.')->group(function(){

    
	Route::get('/create','BrandController@create')->name('create');
	Route::post('/store','Brandcontroller@store')->name('store');
	Route::get('/manage','BrandController@manage')->name('manage');
	Route::get('/active/{id}/{status}','BrandController@active')->name('active');
	Route::get('/edit/{id}','BrandController@edit')->name('edit');
	Route::post('/update/{id}','BrandController@update')->name('update');
	Route::get('/delete/{id}','BrandController@delete')->name('delete');
	
}); 



/************************cartcontroller**************************/





