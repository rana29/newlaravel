<?php
use App\Http\controllers\Frontend\SiteController;
use App\Http\controllers\admin\dashbordcontroller;
use App\Http\controllers\admin\catagorycontroller;
use App\Http\controllers\admin\postcontroller;
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



Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('single/post/{slug}',[SiteController::class,'single_post'])->name('post.slug');
//catagory wise post show
Route::get('/catagory/post/{slug}',[SiteController::class,'catagory_post'])->name('catagory.post');
//Route for search
Route::get('/search',[SiteController::class,'search'])->name('post.search');

//route for select division
Route::get('/select',[SiteController::class,'select'])->name('select');

//for district
Route::post('/show/district',[SiteController::class,'district']);


//USER LOGIN REGISTER ROUTE

Route::get('user/register',[SiteController::class,'view_register'])->name('user.view_register');
Route::post('user/register',[SiteController::class,'save_register'])->name('user.save_register');
Route::get('user/login',[SiteController::class,'view_login'])->name('user.view_login');
Route::post('user/login',[SiteController::class,'store_login'])->name('user.store_login');
Route::get('user/logout',[SiteController::class,'logout'])->name('user.logout');





Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){

Route::get('/dashbord',[dashbordcontroller::class,'dashbord'])->name('dashbord');
});



//CATAGORY  ROUTE

Route::prefix('catagory')->name('catagory.')->group(function(){

	Route::get('/create',[catagorycontroller::class,'create'])->name('create');
	Route::post('/store',[catagorycontroller::class,'store'])->name('store');
	Route::get('/manage',[catagorycontroller::class,'manage'])->name('manage');
	Route::get('/view/{id}',[catagorycontroller::class,'view'])->name('view');
	Route::get('/edit/{id}',[catagorycontroller::class,'edit'])->name('edit');
	Route::put('/update/{id}',[catagorycontroller::class,'update'])->name('update');
	Route::delete('/delete/{id}',[catagorycontroller::class,'delete'])->name('delete');

});



//POST  ROUTE

Route::prefix('post')->name('post.')->group(function(){

	
	Route::get('/create',[postcontroller::class,'create'])->name('create');
	Route::post('/store',[postcontroller::class,'store'])->name('store');
	Route::get('/manage',[postcontroller::class,'manage'])->name('manage');
	Route::get('/view/{id}',[postcontroller::class,'view'])->name('view');
	Route::get('/edit/{id}',[postcontroller::class,'edit'])->name('edit');
	Route::put('/update/{id}',[postcontroller::class,'update'])->name('update');
	Route::delete('/delete/{id}',[postcontroller::class,'delete'])->name('delete');

});


