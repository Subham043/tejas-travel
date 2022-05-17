<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\SubCityController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\TransporterController;

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
        Route::get('/excel', [CountryController::class, 'excel', 'as' => 'admin.country.excel'])->name('country_excel');
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
        Route::get('/excel', [StateController::class, 'excel', 'as' => 'admin.state.excel'])->name('state_excel');
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
        Route::get('/excel', [CityController::class, 'excel', 'as' => 'admin.city.excel'])->name('city_excel');
        Route::get('/edit/{id}', [CityController::class, 'edit', 'as' => 'admin.city.edit'])->name('city_edit');
        Route::post('/edit/{id}', [CityController::class, 'update', 'as' => 'admin.city.update'])->name('city_update');
        Route::get('/delete/{id}', [CityController::class, 'delete', 'as' => 'admin.city.delete'])->name('city_delete');
    });

    Route::prefix('/sub-city')->group(function () {
        Route::get('/', [SubCityController::class, 'view', 'as' => 'admin.subcity.view'])->name('subcity_view');
        Route::get('/view/{id}', [SubCityController::class, 'display', 'as' => 'admin.subcity.display'])->name('subcity_display');
        Route::get('/create', [SubCityController::class, 'create', 'as' => 'admin.subcity.create'])->name('subcity_create');
        Route::post('/create', [SubCityController::class, 'store', 'as' => 'admin.subcity.store'])->name('subcity_store');
        Route::get('/excel', [SubCityController::class, 'excel', 'as' => 'admin.subcity.excel'])->name('subcity_excel');
        Route::get('/edit/{id}', [SubCityController::class, 'edit', 'as' => 'admin.subcity.edit'])->name('subcity_edit');
        Route::post('/edit/{id}', [SubCityController::class, 'update', 'as' => 'admin.subcity.update'])->name('subcity_update');
        Route::get('/delete/{id}', [SubCityController::class, 'delete', 'as' => 'admin.subcity.delete'])->name('subcity_delete');
    });

    Route::prefix('/vehicle-type')->group(function () {
        Route::get('/', [VehicleTypeController::class, 'view', 'as' => 'admin.vehicletype.view'])->name('vehicletype_view');
        Route::get('/view/{id}', [VehicleTypeController::class, 'display', 'as' => 'admin.vehicletype.display'])->name('vehicletype_display');
        Route::get('/create', [VehicleTypeController::class, 'create', 'as' => 'admin.vehicletype.create'])->name('vehicletype_create');
        Route::post('/create', [VehicleTypeController::class, 'store', 'as' => 'admin.vehicletype.store'])->name('vehicletype_store');
        Route::get('/excel', [VehicleTypeController::class, 'excel', 'as' => 'admin.vehicletype.excel'])->name('vehicletype_excel');
        Route::get('/edit/{id}', [VehicleTypeController::class, 'edit', 'as' => 'admin.vehicletype.edit'])->name('vehicletype_edit');
        Route::post('/edit/{id}', [VehicleTypeController::class, 'update', 'as' => 'admin.vehicletype.update'])->name('vehicletype_update');
        Route::get('/delete/{id}', [VehicleTypeController::class, 'delete', 'as' => 'admin.vehicletype.delete'])->name('vehicletype_delete');
    });

    Route::prefix('/amenity')->group(function () {
        Route::get('/', [AmenityController::class, 'view', 'as' => 'admin.amenity.view'])->name('amenity_view');
        Route::get('/view/{id}', [AmenityController::class, 'display', 'as' => 'admin.amenity.display'])->name('amenity_display');
        Route::get('/create', [AmenityController::class, 'create', 'as' => 'admin.amenity.create'])->name('amenity_create');
        Route::post('/create', [AmenityController::class, 'store', 'as' => 'admin.amenity.store'])->name('amenity_store');
        Route::get('/excel', [AmenityController::class, 'excel', 'as' => 'admin.amenity.excel'])->name('amenity_excel');
        Route::get('/edit/{id}', [AmenityController::class, 'edit', 'as' => 'admin.amenity.edit'])->name('amenity_edit');
        Route::post('/edit/{id}', [AmenityController::class, 'update', 'as' => 'admin.amenity.update'])->name('amenity_update');
        Route::get('/delete/{id}', [AmenityController::class, 'delete', 'as' => 'admin.amenity.delete'])->name('amenity_delete');
    });

    Route::prefix('/accommodation')->group(function () {
        Route::get('/', [AccommodationController::class, 'view', 'as' => 'admin.accommodation.view'])->name('accommodation_view');
        Route::get('/view/{id}', [AccommodationController::class, 'display', 'as' => 'admin.accommodation.display'])->name('accommodation_display');
        Route::get('/create', [AccommodationController::class, 'create', 'as' => 'admin.accommodation.create'])->name('accommodation_create');
        Route::post('/create', [AccommodationController::class, 'store', 'as' => 'admin.accommodation.store'])->name('accommodation_store');
        Route::get('/excel', [AccommodationController::class, 'excel', 'as' => 'admin.accommodation.excel'])->name('accommodation_excel');
        Route::get('/edit/{id}', [AccommodationController::class, 'edit', 'as' => 'admin.accommodation.edit'])->name('accommodation_edit');
        Route::post('/edit/{id}', [AccommodationController::class, 'update', 'as' => 'admin.accommodation.update'])->name('accommodation_update');
        Route::get('/delete/{id}', [AccommodationController::class, 'delete', 'as' => 'admin.accommodation.delete'])->name('accommodation_delete');
    });

    Route::prefix('/transporter')->group(function () {
        Route::get('/', [TransporterController::class, 'view', 'as' => 'admin.transporter.view'])->name('transporter_view');
        Route::get('/view/{id}', [TransporterController::class, 'display', 'as' => 'admin.transporter.display'])->name('transporter_display');
        Route::get('/create', [TransporterController::class, 'create', 'as' => 'admin.transporter.create'])->name('transporter_create');
        Route::post('/create', [TransporterController::class, 'store', 'as' => 'admin.transporter.store'])->name('transporter_store');
        Route::get('/excel', [TransporterController::class, 'excel', 'as' => 'admin.transporter.excel'])->name('transporter_excel');
        Route::get('/edit/{id}', [TransporterController::class, 'edit', 'as' => 'admin.transporter.edit'])->name('transporter_edit');
        Route::post('/edit/{id}', [TransporterController::class, 'update', 'as' => 'admin.transporter.update'])->name('transporter_update');
        Route::get('/delete/{id}', [TransporterController::class, 'delete', 'as' => 'admin.transporter.delete'])->name('transporter_delete');
    });

    Route::get('/logout', [DashboardController::class, 'logout', 'as' => 'admin.logout'])->name('logout');
});