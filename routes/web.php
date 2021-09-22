<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
Route::get('/', [WelcomeController::class, "welcome"]);

Route::get('/about', [WelcomeController::class, "about"]);

Route::get('/home', [WelcomeController::class, "index"]);

Route::get('/services', [WelcomeController::class, "services"]);

Route::get('/show/{id}', [WelcomeController::class, "show_product"]);
