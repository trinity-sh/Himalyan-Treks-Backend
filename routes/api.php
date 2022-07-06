<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookNowController;
use App\Http\Controllers\TreksController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\TrekFormController;
use Laravel\Sanctum\Sanctum;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// public routes
Route::post('register', [AuthController::class, "register"]);
Route::post('login', [AuthController::class, "login"]);
Route::post('bookNow', [BookNowController::class, "bookNow"]);
Route::get("blogList", [BlogController::class, "blogList"]);
Route::get("treksList", [TreksController::class, "treksList"]);
Route::get('discountList', [DiscountController::class, "discountList"]);

// needs authontication
Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthController::class, "user"]);
    Route::get("bookNowList", [BookNowController::class, "bookNowList"]);

    Route::post('addTreks', [TrekFormController::class, "addTreks"]);
    Route::post('blogForm', [BlogController::class, "blogForm"]);
    Route::post('discountForm', [DiscountController::class, "discountForm"]);
    Route::post('logout', [AuthController::class, 'logout']);

    Route::delete('trekDelete/{id}', [TreksController::class, "trekDelete"]);
    Route::delete('blogDelete/{id}', [BlogController::class, "blogDelete"]);
    Route::delete('discountDelete/{id}', [DiscountController::class, "discountDelete"]);
    Route::delete('bookingDelete/{id}', [BookNowController::class, "bookingDelete"]);

    Route::get('updateTreks/{id}', [TreksController::class, "updateTreks"]);
    Route::get('updateBlogs/{id}', [BlogController::class, "updateBlogs"]);
    Route::get('updateDiscount/{id}', [DiscountController::class, "updateDiscount"]);
});
