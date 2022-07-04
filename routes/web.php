<?php

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
    return view('welcome');
});
Route::get("bookNowList", [BookNowController::class, "bookNowList"]);
Route::post('treksForm', [TreksController::class, "treksForm"]);
Route::post('blogForm', [BlogController::class, "blogForm"]);
Route::post('discountForm', [DiscountController::class, "discountForm"]);

