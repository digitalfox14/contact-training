<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'contact'], function () {
        //  Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
        //  Route::get('/create', [App\Http\Controllers\HomeController::class, 'create']);
         Route::post('/store', [App\Http\Controllers\HomeController::class, 'store']);
          Route::get('/list', [App\Http\Controllers\HomeController::class, 'index']);
     
    });
});