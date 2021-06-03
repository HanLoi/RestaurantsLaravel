<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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



Route::get('/',[RestaurantController::class,'index']);

Route::get('/restaurant/show/{id}', [RestaurantController::class,'show']);

Route::get('/restaurant/create', function () {
    return view('restaurants.create');
});


