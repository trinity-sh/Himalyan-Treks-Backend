<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookNowController;
use App\Http\Controllers\TreksController;
use App\Http\Controllers\BlogController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// post apis
Route::post('bookNow', [BookNowController::class, "bookNow"]);
Route::post('treksForm', [TreksController::class, "treksForm"]);
Route::post('blogForm', [BlogController::class, "blogForm"]);

// get apis
Route::get("bookNowList", [BookNowController::class, "bookNowList"]);