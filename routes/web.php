<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UpdateProductController;
use App\Http\Controllers\ResourceController;

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
Route::get('/', [WelcomeController::class, "index"]);

Route::get('/about', [WelcomeController::class, "about"]);

Route::get('/home', [WelcomeController::class, "index"]);

Route::get('/services', [WelcomeController::class, "services"]);

Route::get('/show/{id}', [WelcomeController::class, "show_product"]);

Route::get('/create', [ProductController::class, "create"]);

Route::post('/saveproduct', [ProductController::class, "saveproduct"]);

// {{---Edit and Delete Routes Start---}}

Route::get('/edit/{id}', [UpdateProductController::class, "edit"]);
Route::post('/edit_product/{id}' , [UpdateProductController::class, "edit_product"]);

Route::get('/delete/{id}', [UpdateProductController::class, "delete_product"]);

//{{---Edit and Delete Routes End}}

Route::resource('resource', 'ResourceController');

// route jab banaty hain to bar bar commands dalni prti hain... phir route chalti hain
// laravel guard ka pta hh? nope
// user types ka han
// is project ma hain usertypes?nai,ok,ok,ok,okay
// or ak chez welcome ki jaga koi or page kasy link krey