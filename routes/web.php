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


Route::get('/', [WelcomeController::class,'index']);
Route::get('/about', [WelcomeController::class,'about']);
Route::get('/services/{name}/{id}', [WelcomeController::class,'services']);
Route::get('/show/{id}', [WelcomeController::class,'show']);
Route::get('/create', [WelcomeController::class,'create']);
Route::post('/createPost', [WelcomeController::class,'createPost']);

Route::get('/edit/{id}', [WelcomeController::class,'edit']);

Route::post('/editProduct', [WelcomeController::class,'editProduct']);
Route::get('/delete/{id}', [WelcomeController::class,'delete']);