<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\Admin\BooksController;
use App\Http\Controllers\Frontend\ProductController;

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



// Route::get('/',[ProductController::class,'index']);
Route::get('/',function(){
    return view('welcome');
});
Auth::routes();

Route::middleware(['isAdmin'])->group(function(){
    // Main page of admin part
    Route::get('admin',[AdminController::class,'index']);
    Route::get('/user',[AdminController::class,'user']);
    Route::get('/change-password/{id}',[AdminController::class,'change_password']);
    Route::post('/change_password/{id}',[AdminController::class,'update_password']);
    Route::get('/edite-user/{id}',[AdminController::class,'edite_user']);
    Route::post('/update_user/{id}',[AdminController::class,'update_user']);
    Route::get('/delete_user/{id}',[AdminController::class,'delete_user']);
    //Catagory Part 
    Route::get('catagories',[CatagoryController::class,'index']);
    Route::get('/add-catagory',[CatagoryController::class,'add_catagory']);
    Route::post('/add-catagory',[CatagoryController::class,'insert_catagory']);
    Route::get('/edite-catagory/{id}',[CatagoryController::class,'edite_catagory']);
    Route::post('/update-catagory/{id}',[CatagoryController::class,'update_catagory']);
    Route::get('/delete-catagory/{id}',[CatagoryController::class,'delete_catagory']);
    // Books Route
    Route::get('/book',[BooksController::class,'index']);
    Route::get('/add-book',[BooksController::class,'add_book']);
    Route::post('/add-book',[BooksController::class,'insert']);
    Route::get('/edite-book/{id}',[BooksController::class,'edite']);
    Route::post('/edite-book/{id}',[BooksController::class,'update']);
    Route::get('/delete-book/{id}',[BooksController::class,'delete']);
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
