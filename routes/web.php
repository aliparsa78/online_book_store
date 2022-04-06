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
    Route::get('dashboard',function(){
        return view('admin.index');
    });
    Route::get('/catagory',[CatagoryController::class,'index']);
    Route::get('/add-catagory',[CatagoryController::class,'add_catagory']);
    Route::post('/add-catagory',[CatagoryController::class,'insert_catagory']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

