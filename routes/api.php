<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\StateController;
use App\Http\Controllers\Api\VendorController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\WishlistController;
use App\Http\Controllers\Api\ContactUsController;
use App\Http\Controllers\Api\DiscountController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/register', [AuthController::class, 'register']);
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);

Route::get('/cities', [CityController::class, 'index']);
Route::get('/state/list', [StateController::class, 'index']);
Route::get('/category/list', [CategoryController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/categories/search', [CategoryController::class, 'search']);
    Route::get('/categories/trending', [CategoryController::class, 'trending']);
    Route::get('/vendors', [VendorController::class, 'index']);
    Route::get('/vendors/{id}', [VendorController::class, 'show']);
    Route::get('/user/plans', [PlanController::class, 'userPlans']);

    Route::get('/plans', [PlanController::class, 'index']);
    Route::get('/plans/{id}', [PlanController::class, 'show']);
    Route::get('/wishlist', [WishlistController::class, 'index']);
    Route::post('/wishlist', [WishlistController::class, 'store']);
    Route::delete('/wishlist', [WishlistController::class, 'destroy']);

    Route::post('/contact-us', [ContactUsController::class, 'store']);
    Route::get('/contact-us', [ContactUsController::class, 'index']);
    Route::get('/discounts', [DiscountController::class, 'index']);
    Route::get('/discounts/{id}', [DiscountController::class, 'show']);   

});
