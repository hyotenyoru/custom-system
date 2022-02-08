<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProductController;



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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/plans', function(){
    return view('plan.index');
})->name('plans')->middleware('auth');

Route::resource('/plan',PlanController::class)->middleware('auth');

Route::get('/products',function(){
    return view('product.index');
})->name('products')->middleware('auth');

Route::resource('/product',ProductController::class)->middleware('auth');


