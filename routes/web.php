<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;

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

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'index', 'as' => 'admin.login'])->name('login');
    Route::post('/authenticate', [AuthenticationController::class, 'authenticate', 'as' => 'admin.authenticate'])->name('authenticate');
    Route::get('/forgot-password', [AuthenticationController::class, 'forgotPassword', 'as' => 'admin.forgotPassword'])->name('forgotPassword');
    Route::post('/forgot-password', [AuthenticationController::class, 'requestForgotPassword', 'as' => 'admin.requestForgotPassword'])->name('requestForgotPassword');
    Route::get('/reset-password/{id}', [AuthenticationController::class, 'resetPassword', 'as' => 'admin.resetPassword'])->name('resetPassword');
    Route::post('/reset-password/{id}', [AuthenticationController::class, 'requestResetPassword', 'as' => 'admin.requestResetPassword'])->name('requestResetPassword');
    // Route::get('/dashboard', [DashboardController::class, 'index', 'as' => 'admin.dasboard'])->name('dashboard');
});

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index', 'as' => 'admin.dasboard'])->name('dashboard');

    Route::prefix('/country')->group(function () {
        Route::get('/', [CountryController::class, 'view', 'as' => 'admin.country.view'])->name('country_view');
        Route::get('/view/{id}', [CountryController::class, 'display', 'as' => 'admin.country.display'])->name('country_display');
        Route::get('/create', [CountryController::class, 'create', 'as' => 'admin.country.create'])->name('country_create');
        Route::post('/create', [CountryController::class, 'store', 'as' => 'admin.country.store'])->name('country_store');
        Route::get('/edit/{id}', [CountryController::class, 'edit', 'as' => 'admin.country.edit'])->name('country_edit');
        Route::post('/edit/{id}', [CountryController::class, 'update', 'as' => 'admin.country.update'])->name('country_update');
        Route::get('/delete/{id}', [CountryController::class, 'delete', 'as' => 'admin.country.delete'])->name('country_delete');
    });

    Route::prefix('/state')->group(function () {
        Route::get('/', [StateController::class, 'view', 'as' => 'admin.state.view'])->name('state_view');
        Route::get('/view/{id}', [StateController::class, 'display', 'as' => 'admin.state.display'])->name('state_display');
        Route::get('/create', [StateController::class, 'create', 'as' => 'admin.state.create'])->name('state_create');
        Route::post('/create', [StateController::class, 'store', 'as' => 'admin.state.store'])->name('state_store');
        Route::get('/edit/{id}', [StateController::class, 'edit', 'as' => 'admin.state.edit'])->name('state_edit');
        Route::post('/edit/{id}', [StateController::class, 'update', 'as' => 'admin.state.update'])->name('state_update');
        Route::get('/delete/{id}', [StateController::class, 'delete', 'as' => 'admin.state.delete'])->name('state_delete');
    });

    Route::get('/logout', [DashboardController::class, 'logout', 'as' => 'admin.logout'])->name('logout');
});