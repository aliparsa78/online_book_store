<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CatagoryController;

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


Route::middleware(['auth','isAdmin'])->group(function(){
    // Main page of admin part
    Route::get('/',[AdminController::class,'index']);
    //Catagory Part 
    Route::get('catagories',[CatagoryController::class,'index']);
    Route::get('/add-catagory',[CatagoryController::class,'add_catagory']);
    Route::post('/add-catagory',[CatagoryController::class,'insert_catagory']);
    Route::get('/edite-catagory/{id}',[CatagoryController::class,'edite_catagory']);
    Route::post('/update-catagory/{id}',[CatagoryController::class,'update_catagory']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

