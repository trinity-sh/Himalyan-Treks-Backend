<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookNowController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CampController;
use App\Http\Controllers\DiscountTreksController;
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
Route::get("treksList", [TrekFormController::class, "treksList"]);
Route::get('discountList', [DiscountTreksController::class, "discountList"]);
Route::get('campingList', [CampController::class, "campingList"]);

// needs authontication
Route::middleware('auth:sanctum')->group(function () {
});

Route::get('user', [AuthController::class, "user"]);
Route::post('logout', [AuthController::class, 'logout']);

Route::get("bookNowList", [BookNowController::class, "bookNowList"]);

Route::post('addTreks', [TrekFormController::class, "addTreks"]);
Route::post('addCamping', [CampController::class, "addCamping"]);
Route::post('blogForm', [BlogController::class, "blogForm"]);
Route::post('discountForm', [DiscountTreksController::class, "discountForm"]);


Route::delete('trekDelete/{id}', [TrekFormController::class, "trekDelete"]);
Route::delete('campingDelete/{id}', [CampController::class, "campingDelete"]);
Route::delete('blogDelete/{id}', [BlogController::class, "blogDelete"]);
Route::delete('discountDelete/{id}', [DiscountTreksController::class, "discountDelete"]);
Route::delete('bookingDelete/{id}', [BookNowController::class, "bookingDelete"]);

Route::get('getTrek/{id}', [TrekFormController::class, "getTrek"]);
Route::get('getDiscount/{id}', [DiscountTreksController::class, "getDiscount"]);
Route::get('getBlog/{id}', [BlogController::class, "getBlog"]);
Route::get('getCamping/{id}', [CampController::class, "getCamping"]);

Route::put('updateBlog/{id}', [BlogController::class, "updateBlog"]);
Route::put('updateDiscount/{id}', [DiscountTreksController::class, "updateDiscount"]);
Route::put('updateTreks/{id}', [TrekFormController::class, "updateTreks"]);
Route::put('updateCamping/{id}', [CampController::class, "updateCamping"]);
