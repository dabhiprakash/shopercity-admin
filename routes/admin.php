<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/9215', function () {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    echo "cache cleared";
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'front_page')->name('admin');
    Route::get('/login', 'index')->name('admin.login');
    Route::post('/login', 'login')->name('admin.login.submit');
    Route::get('/logout', 'logout')->name('admin.logout');
    Route::get('/forgot-password', 'forgot_password')->name('admin.password.forgot');
    Route::post('/forgot-password', 'forgot_password')->name('admin.password.forgot.submit');
    Route::get('/reset-password/{token}', 'reset_password')->name('admin.password.reset');
    Route::post('/reset-password', 'reset_password')->name('admin.password.update');
});


Route::middleware(['admin'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/profile', 'profile')->name('admin.profile');;
        Route::post('/update-profile', 'update');
        Route::post('/update-password', 'password_update');
        Route::post('/duplicate', 'duplicate');
    });
});
