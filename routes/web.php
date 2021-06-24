<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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
	dd('falta en front de la app');
});


Route::get('/admin', function () {
	return view('index');
});
Route::resource('admin/autor', AutorController::class);
Route::resource('admin/category', CategoryController::class);
Route::resource('admin/book', BookController::class);

