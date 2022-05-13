<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\SubCityController;
use App\Http\Controllers\VehicleTypeController;

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
        Route::post('/ajax_create', [CountryController::class, 'ajax_store', 'as' => 'admin.country.ajax_store'])->name('country_ajax_store');
        Route::get('/edit/{id}', [CountryController::class, 'edit', 'as' => 'admin.country.edit'])->name('country_edit');
        Route::post('/edit/{id}', [CountryController::class, 'update', 'as' => 'admin.country.update'])->name('country_update');
        Route::get('/delete/{id}', [CountryController::class, 'delete', 'as' => 'admin.country.delete'])->name('country_delete');
    });

    Route::prefix('/state')->group(function () {
        Route::get('/', [StateController::class, 'view', 'as' => 'admin.state.view'])->name('state_view');
        Route::get('/view/{id}', [StateController::class, 'display', 'as' => 'admin.state.display'])->name('state_display');
        Route::get('/state-all-ajax/{id}', [StateController::class, 'state_all_ajax', 'as' => 'admin.state.state_all_ajax'])->name('state_all_ajax');
        Route::get('/create', [StateController::class, 'create', 'as' => 'admin.state.create'])->name('state_create');
        Route::post('/create', [StateController::class, 'store', 'as' => 'admin.state.store'])->name('state_store');
        Route::post('/ajax_create', [StateController::class, 'ajax_store', 'as' => 'admin.state.ajax_store'])->name('state_ajax_store');
        Route::get('/edit/{id}', [StateController::class, 'edit', 'as' => 'admin.state.edit'])->name('state_edit');
        Route::post('/edit/{id}', [StateController::class, 'update', 'as' => 'admin.state.update'])->name('state_update');
        Route::get('/delete/{id}', [StateController::class, 'delete', 'as' => 'admin.state.delete'])->name('state_delete');
    });

    Route::prefix('/city')->group(function () {
        Route::get('/', [CityController::class, 'view', 'as' => 'admin.city.view'])->name('city_view');
        Route::get('/view/{id}', [CityController::class, 'display', 'as' => 'admin.city.display'])->name('city_display');
        Route::get('/city-all-ajax/{id}', [CityController::class, 'city_all_ajax', 'as' => 'admin.city.city_all_ajax'])->name('city_all_ajax');
        Route::get('/create', [CityController::class, 'create', 'as' => 'admin.city.create'])->name('city_create');
        Route::post('/create', [CityController::class, 'store', 'as' => 'admin.city.store'])->name('city_store');
        Route::get('/edit/{id}', [CityController::class, 'edit', 'as' => 'admin.city.edit'])->name('city_edit');
        Route::post('/edit/{id}', [CityController::class, 'update', 'as' => 'admin.city.update'])->name('city_update');
        Route::get('/delete/{id}', [CityController::class, 'delete', 'as' => 'admin.city.delete'])->name('city_delete');
    });

    Route::prefix('/sub-city')->group(function () {
        Route::get('/', [SubCityController::class, 'view', 'as' => 'admin.subcity.view'])->name('subcity_view');
        Route::get('/view/{id}', [SubCityController::class, 'display', 'as' => 'admin.subcity.display'])->name('subcity_display');
        Route::get('/create', [SubCityController::class, 'create', 'as' => 'admin.subcity.create'])->name('subcity_create');
        Route::post('/create', [SubCityController::class, 'store', 'as' => 'admin.subcity.store'])->name('subcity_store');
        Route::get('/edit/{id}', [SubCityController::class, 'edit', 'as' => 'admin.subcity.edit'])->name('subcity_edit');
        Route::post('/edit/{id}', [SubCityController::class, 'update', 'as' => 'admin.subcity.update'])->name('subcity_update');
        Route::get('/delete/{id}', [SubCityController::class, 'delete', 'as' => 'admin.subcity.delete'])->name('subcity_delete');
    });

    Route::prefix('/vehicle-type')->group(function () {
        Route::get('/', [VehicleTypeController::class, 'view', 'as' => 'admin.vehicletype.view'])->name('vehicletype_view');
        Route::get('/view/{id}', [VehicleTypeController::class, 'display', 'as' => 'admin.vehicletype.display'])->name('vehicletype_display');
        Route::get('/create', [VehicleTypeController::class, 'create', 'as' => 'admin.vehicletype.create'])->name('vehicletype_create');
        Route::post('/create', [VehicleTypeController::class, 'store', 'as' => 'admin.vehicletype.store'])->name('vehicletype_store');
        Route::get('/edit/{id}', [VehicleTypeController::class, 'edit', 'as' => 'admin.vehicletype.edit'])->name('vehicletype_edit');
        Route::post('/edit/{id}', [VehicleTypeController::class, 'update', 'as' => 'admin.vehicletype.update'])->name('vehicletype_update');
        Route::get('/delete/{id}', [VehicleTypeController::class, 'delete', 'as' => 'admin.vehicletype.delete'])->name('vehicletype_delete');
    });

    Route::get('/logout', [DashboardController::class, 'logout', 'as' => 'admin.logout'])->name('logout');
});