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
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarBookingController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\PackageTypeController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\LocalRideController;
use App\Http\Controllers\AirportRideController;
use App\Http\Controllers\OutStationController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\HolidayPackageController;
use App\Http\Controllers\HolidayPackageMainController;
use App\Http\Controllers\DynamicWebPageController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\SEOMetaController;

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

Route::get('/', [HomeController::class, 'index', 'as' => 'home.index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact', 'as' => 'home.contact'])->name('contact');
Route::get('/office-ride-enterprise', [HomeController::class, 'office', 'as' => 'home.office'])->name('office');
Route::get('/about-us', [HomeController::class, 'about', 'as' => 'home.about'])->name('about');
Route::get('/become-a-partner', [HomeController::class, 'partner', 'as' => 'home.partner'])->name('partner');
Route::get('/consumer-complaints', [HomeController::class, 'complaint', 'as' => 'home.complaint'])->name('complaint');
Route::get('/car-booking', [CarBookingController::class, 'index', 'as' => 'car_booking.index'])->name('car_booking');
Route::get('/car-detail', [CarBookingController::class, 'detail', 'as' => 'car_booking.detail'])->name('car_detail');
Route::get('/car-checkout', [CarBookingController::class, 'checkout', 'as' => 'car_booking.checkout'])->name('car_checkout');
Route::get('/car-booking-complete', [CarBookingController::class, 'complete', 'as' => 'car_booking.complete'])->name('car_complete');
Route::get('/holiday-packages', [HolidayPackageMainController::class, 'index', 'as' => 'holiday_package.index'])->name('holiday_package');
Route::get('/holiday-packages/{url}', [HolidayPackageMainController::class, 'detail', 'as' => 'holiday_package.detail'])->name('holiday_package_detail');

Route::post('/insert-enquiry', [EnquiryController::class, 'insert_enquiry', 'as' => 'insert_enquiry.insert_enquiry'])->name('insert_enquiry');
Route::post('/insert-complaint', [ComplaintController::class, 'insert_complaint', 'as' => 'insert_complaint.insert_complaint'])->name('insert_complaint');

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
        Route::get('/sub-city-all-ajax/{id}', [SubCityController::class, 'subcity_all_ajax', 'as' => 'admin.subcity.subcity_all_ajax'])->name('subcity_all_ajax');
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

    Route::prefix('/vehicle')->group(function () {
        Route::get('/', [VehicleController::class, 'view', 'as' => 'admin.vehicle.view'])->name('vehicle_view');
        Route::get('/view/{id}', [VehicleController::class, 'display', 'as' => 'admin.vehicle.display'])->name('vehicle_display');
        Route::get('/vehicle-all-ajax/{id}', [VehicleController::class, 'vehicle_all_ajax', 'as' => 'admin.city.vehicle_all_ajax'])->name('vehicle_all_ajax');
        Route::get('/create', [VehicleController::class, 'create', 'as' => 'admin.vehicle.create'])->name('vehicle_create');
        Route::post('/create', [VehicleController::class, 'store', 'as' => 'admin.vehicle.store'])->name('vehicle_store');
        Route::get('/excel', [VehicleController::class, 'excel', 'as' => 'admin.vehicle.excel'])->name('vehicle_excel');
        Route::get('/edit/{id}', [VehicleController::class, 'edit', 'as' => 'admin.vehicle.edit'])->name('vehicle_edit');
        Route::post('/edit/{id}', [VehicleController::class, 'update', 'as' => 'admin.vehicle.update'])->name('vehicle_update');
        Route::get('/delete/{id}', [VehicleController::class, 'delete', 'as' => 'admin.vehicle.delete'])->name('vehicle_delete');
        Route::get('/delete-upload-image/{id}', [VehicleController::class, 'delete_upload_image', 'as' => 'admin.vehicle.delete_upload_image'])->name('vehicle_delete_upload_image');
    });

    Route::prefix('/enquiry')->group(function () {
        Route::get('/', [EnquiryController::class, 'view', 'as' => 'admin.enquiry.view'])->name('enquiry_view');
        Route::get('/view/{id}', [EnquiryController::class, 'display', 'as' => 'admin.enquiry.display'])->name('enquiry_display');
        Route::get('/excel', [EnquiryController::class, 'excel', 'as' => 'admin.enquiry.excel'])->name('enquiry_excel');
        Route::get('/delete/{id}', [EnquiryController::class, 'delete', 'as' => 'admin.enquiry.delete'])->name('enquiry_delete');
    });
    
    Route::prefix('/complaint')->group(function () {
        Route::get('/', [ComplaintController::class, 'view', 'as' => 'admin.complaint.view'])->name('complaint_view');
        Route::get('/view/{id}', [ComplaintController::class, 'display', 'as' => 'admin.complaint.display'])->name('complaint_display');
        Route::get('/excel', [ComplaintController::class, 'excel', 'as' => 'admin.complaint.excel'])->name('complaint_excel');
        Route::get('/delete/{id}', [ComplaintController::class, 'delete', 'as' => 'admin.complaint.delete'])->name('complaint_delete');
    });

    Route::prefix('/package-type')->group(function () {
        Route::get('/', [PackageTypeController::class, 'view', 'as' => 'admin.packagetype.view'])->name('packagetype_view');
        Route::get('/view/{id}', [PackageTypeController::class, 'display', 'as' => 'admin.packagetype.display'])->name('packagetype_display');
        Route::get('/create', [PackageTypeController::class, 'create', 'as' => 'admin.packagetype.create'])->name('packagetype_create');
        Route::post('/create', [PackageTypeController::class, 'store', 'as' => 'admin.packagetype.store'])->name('packagetype_store');
        Route::get('/excel', [PackageTypeController::class, 'excel', 'as' => 'admin.packagetype.excel'])->name('packagetype_excel');
        Route::get('/edit/{id}', [PackageTypeController::class, 'edit', 'as' => 'admin.packagetype.edit'])->name('packagetype_edit');
        Route::post('/edit/{id}', [PackageTypeController::class, 'update', 'as' => 'admin.packagetype.update'])->name('packagetype_update');
        Route::get('/delete/{id}', [PackageTypeController::class, 'delete', 'as' => 'admin.packagetype.delete'])->name('packagetype_delete');
    });

    Route::prefix('/common-terms-condition')->group(function () {
        Route::get('/edit', [CommonController::class, 'terms_condition_edit', 'as' => 'admin.local_ride_terms_condition.edit'])->name('terms_condition_edit');
        Route::post('/edit', [CommonController::class, 'terms_condition_update', 'as' => 'admin.local_ride_terms_condition.update'])->name('terms_condition_edit');
    });

    Route::prefix('/common-include-exclude')->group(function () {
        Route::get('/edit', [CommonController::class, 'include_exclude_edit', 'as' => 'admin.local_ride_include_exclude.edit'])->name('include_exclude_edit');
        Route::post('/edit', [CommonController::class, 'include_exclude_update', 'as' => 'admin.local_ride_include_exclude.update'])->name('include_exclude_update');
    });

    Route::prefix('/common-description')->group(function () {
        Route::get('/edit', [CommonController::class, 'description_edit', 'as' => 'admin.local_ride_description.edit'])->name('description_edit');
        Route::post('/edit', [CommonController::class, 'description_update', 'as' => 'admin.local_ride_description.update'])->name('description_update');
    });
    
    Route::prefix('/common-notes')->group(function () {
        Route::get('/edit', [CommonController::class, 'note_edit', 'as' => 'admin.local_ride_note.edit'])->name('note_edit');
        Route::post('/edit', [CommonController::class, 'note_update', 'as' => 'admin.local_ride_note.update'])->name('note_update');
    });
    
    Route::prefix('/common-holiday-package-terms-condition')->group(function () {
        Route::get('/edit', [CommonController::class, 'holidaypackage_terms_condition_edit', 'as' => 'admin.local_ride_note.edit'])->name('holidaypackage_terms_condition_edit');
        Route::post('/edit', [CommonController::class, 'holidaypackage_terms_condition_update', 'as' => 'admin.local_ride_note.update'])->name('holidaypackage_terms_condition_update');
    });
    
    Route::prefix('/common-holiday-package-policy')->group(function () {
        Route::get('/edit', [CommonController::class, 'holidaypackage_policy_edit', 'as' => 'admin.local_ride_note.edit'])->name('holidaypackage_policy_edit');
        Route::post('/edit', [CommonController::class, 'holidaypackage_policy_update', 'as' => 'admin.local_ride_note.update'])->name('holidaypackage_policy_update');
    });

    Route::prefix('/local-ride')->group(function () {
        Route::get('/', [LocalRideController::class, 'view', 'as' => 'admin.localride.view'])->name('localride_view');
        Route::get('/view/{id}', [LocalRideController::class, 'display', 'as' => 'admin.localride.display'])->name('localride_display');
        Route::get('/create', [LocalRideController::class, 'create', 'as' => 'admin.localride.create'])->name('localride_create');
        Route::post('/create', [LocalRideController::class, 'store', 'as' => 'admin.localride.store'])->name('localride_store');
        Route::get('/excel', [LocalRideController::class, 'excel', 'as' => 'admin.localride.excel'])->name('localride_excel');
        Route::get('/edit/{id}', [LocalRideController::class, 'edit', 'as' => 'admin.localride.edit'])->name('localride_edit');
        Route::post('/edit/{id}', [LocalRideController::class, 'update', 'as' => 'admin.localride.update'])->name('localride_update');
        Route::get('/delete/{id}', [LocalRideController::class, 'delete', 'as' => 'admin.localride.delete'])->name('localride_delete');
    });
    
    Route::prefix('/outstation')->group(function () {
        Route::get('/', [OutStationController::class, 'view', 'as' => 'admin.outstation.view'])->name('outstation_view');
        Route::get('/view/{id}', [OutStationController::class, 'display', 'as' => 'admin.outstation.display'])->name('outstation_display');
        Route::get('/create', [OutStationController::class, 'create', 'as' => 'admin.outstation.create'])->name('outstation_create');
        Route::post('/create', [OutStationController::class, 'store', 'as' => 'admin.outstation.store'])->name('outstation_store');
        Route::get('/excel', [OutStationController::class, 'excel', 'as' => 'admin.outstation.excel'])->name('outstation_excel');
        Route::get('/edit/{id}', [OutStationController::class, 'edit', 'as' => 'admin.outstation.edit'])->name('outstation_edit');
        Route::post('/edit/{id}', [OutStationController::class, 'update', 'as' => 'admin.outstation.update'])->name('outstation_update');
        Route::get('/delete/{id}', [OutStationController::class, 'delete', 'as' => 'admin.outstation.delete'])->name('outstation_delete');
    });
    
    Route::prefix('/airport-ride')->group(function () {
        Route::get('/', [AirportRideController::class, 'view', 'as' => 'admin.airportride.view'])->name('airportride_view');
        Route::get('/view/{id}', [AirportRideController::class, 'display', 'as' => 'admin.airportride.display'])->name('airportride_display');
        Route::get('/create', [AirportRideController::class, 'create', 'as' => 'admin.airportride.create'])->name('airportride_create');
        Route::post('/create', [AirportRideController::class, 'store', 'as' => 'admin.airportride.store'])->name('airportride_store');
        Route::get('/excel', [AirportRideController::class, 'excel', 'as' => 'admin.airportride.excel'])->name('airportride_excel');
        Route::get('/edit/{id}', [AirportRideController::class, 'edit', 'as' => 'admin.airportride.edit'])->name('airportride_edit');
        Route::post('/edit/{id}', [AirportRideController::class, 'update', 'as' => 'admin.airportride.update'])->name('airportride_update');
        Route::get('/delete/{id}', [AirportRideController::class, 'delete', 'as' => 'admin.airportride.delete'])->name('airportride_delete');
    });

    Route::prefix('/coupon')->group(function () {
        Route::get('/', [CouponController::class, 'view', 'as' => 'admin.coupon.view'])->name('coupon_view');
        Route::get('/view/{id}', [CouponController::class, 'display', 'as' => 'admin.coupon.display'])->name('coupon_display');
        Route::get('/create', [CouponController::class, 'create', 'as' => 'admin.coupon.create'])->name('coupon_create');
        Route::post('/create', [CouponController::class, 'store', 'as' => 'admin.coupon.store'])->name('coupon_store');
        Route::get('/excel', [CouponController::class, 'excel', 'as' => 'admin.coupon.excel'])->name('coupon_excel');
        Route::get('/edit/{id}', [CouponController::class, 'edit', 'as' => 'admin.coupon.edit'])->name('coupon_edit');
        Route::post('/edit/{id}', [CouponController::class, 'update', 'as' => 'admin.coupon.update'])->name('coupon_update');
        Route::get('/delete/{id}', [CouponController::class, 'delete', 'as' => 'admin.coupon.delete'])->name('coupon_delete');
    });
    
    Route::prefix('/airport')->group(function () {
        Route::get('/', [AirportController::class, 'view', 'as' => 'admin.airport.view'])->name('airport_view');
        Route::get('/view/{id}', [AirportController::class, 'display', 'as' => 'admin.airport.display'])->name('airport_display');
        Route::get('/airport-all-ajax/{id}', [AirportController::class, 'airport_all_ajax', 'as' => 'admin.airport.airport_all_ajax'])->name('airport_all_ajax');
        Route::get('/create', [AirportController::class, 'create', 'as' => 'admin.airport.create'])->name('airport_create');
        Route::post('/create', [AirportController::class, 'store', 'as' => 'admin.airport.store'])->name('airport_store');
        Route::get('/excel', [AirportController::class, 'excel', 'as' => 'admin.airport.excel'])->name('airport_excel');
        Route::get('/edit/{id}', [AirportController::class, 'edit', 'as' => 'admin.airport.edit'])->name('airport_edit');
        Route::post('/edit/{id}', [AirportController::class, 'update', 'as' => 'admin.airport.update'])->name('airport_update');
        Route::get('/delete/{id}', [AirportController::class, 'delete', 'as' => 'admin.airport.delete'])->name('airport_delete');
    });
    
    Route::prefix('/sub-admin')->group(function () {
        Route::get('/', [SubAdminController::class, 'view', 'as' => 'admin.subadmin.view'])->name('subadmin_view');
        Route::get('/view/{id}', [SubAdminController::class, 'display', 'as' => 'admin.subadmin.display'])->name('subadmin_display');
        Route::get('/create', [SubAdminController::class, 'create', 'as' => 'admin.subadmin.create'])->name('subadmin_create');
        Route::post('/create', [SubAdminController::class, 'store', 'as' => 'admin.subadmin.store'])->name('subadmin_store');
        Route::get('/excel', [SubAdminController::class, 'excel', 'as' => 'admin.subadmin.excel'])->name('subadmin_excel');
        Route::get('/edit/{id}', [SubAdminController::class, 'edit', 'as' => 'admin.subadmin.edit'])->name('subadmin_edit');
        Route::post('/edit/{id}', [SubAdminController::class, 'update', 'as' => 'admin.subadmin.update'])->name('subadmin_update');
        Route::get('/delete/{id}', [SubAdminController::class, 'delete', 'as' => 'admin.subadmin.delete'])->name('subadmin_delete');
    });
    
    Route::prefix('/festival')->group(function () {
        Route::get('/', [FestivalController::class, 'view', 'as' => 'admin.festival.view'])->name('festival_view');
        Route::get('/view/{id}', [FestivalController::class, 'display', 'as' => 'admin.festival.display'])->name('festival_display');
        Route::get('/create', [FestivalController::class, 'create', 'as' => 'admin.festival.create'])->name('festival_create');
        Route::post('/create', [FestivalController::class, 'store', 'as' => 'admin.festival.store'])->name('festival_store');
        Route::get('/excel', [FestivalController::class, 'excel', 'as' => 'admin.festival.excel'])->name('festival_excel');
        Route::get('/edit/{id}', [FestivalController::class, 'edit', 'as' => 'admin.festival.edit'])->name('festival_edit');
        Route::post('/edit/{id}', [FestivalController::class, 'update', 'as' => 'admin.festival.update'])->name('festival_update');
        Route::get('/delete/{id}', [FestivalController::class, 'delete', 'as' => 'admin.festival.delete'])->name('festival_delete');
    });
    
    Route::prefix('/holiday-package')->group(function () {
        Route::get('/', [HolidayPackageController::class, 'view', 'as' => 'admin.holidaypackage.view'])->name('holidaypackage_view');
        Route::get('/view/{id}', [HolidayPackageController::class, 'display', 'as' => 'admin.holidaypackage.display'])->name('holidaypackage_display');
        Route::get('/preview/{url}', [HolidayPackageController::class, 'preview', 'as' => 'admin.holidaypackage.preview'])->name('holidaypackage_preview');
        Route::get('/create', [HolidayPackageController::class, 'create', 'as' => 'admin.holidaypackage.create'])->name('holidaypackage_create');
        Route::post('/create', [HolidayPackageController::class, 'store', 'as' => 'admin.holidaypackage.store'])->name('holidaypackage_store');
        Route::get('/excel', [HolidayPackageController::class, 'excel', 'as' => 'admin.holidaypackage.excel'])->name('holidaypackage_excel');
        Route::get('/edit/{id}', [HolidayPackageController::class, 'edit', 'as' => 'admin.holidaypackage.edit'])->name('holidaypackage_edit');
        Route::post('/edit/{id}', [HolidayPackageController::class, 'update', 'as' => 'admin.holidaypackage.update'])->name('holidaypackage_update');
        Route::get('/delete/{id}', [HolidayPackageController::class, 'delete', 'as' => 'admin.holidaypackage.delete'])->name('holidaypackage_delete');
    });
    
    Route::prefix('/dynamic-web-pages')->group(function () {
        Route::get('/', [DynamicWebPageController::class, 'view', 'as' => 'admin.dynamicwebpage.view'])->name('dynamicwebpage_view');
        Route::get('/view/{id}', [DynamicWebPageController::class, 'display', 'as' => 'admin.dynamicwebpage.display'])->name('dynamicwebpage_display');
        Route::get('/create', [DynamicWebPageController::class, 'create', 'as' => 'admin.dynamicwebpage.create'])->name('dynamicwebpage_create');
        Route::post('/create', [DynamicWebPageController::class, 'store', 'as' => 'admin.dynamicwebpage.store'])->name('dynamicwebpage_store');
        Route::get('/excel', [DynamicWebPageController::class, 'excel', 'as' => 'admin.dynamicwebpage.excel'])->name('dynamicwebpage_excel');
        Route::get('/edit/{id}', [DynamicWebPageController::class, 'edit', 'as' => 'admin.dynamicwebpage.edit'])->name('dynamicwebpage_edit');
        Route::post('/edit/{id}', [DynamicWebPageController::class, 'update', 'as' => 'admin.dynamicwebpage.update'])->name('dynamicwebpage_update');
        Route::get('/delete/{id}', [DynamicWebPageController::class, 'delete', 'as' => 'admin.dynamicwebpage.delete'])->name('dynamicwebpage_delete');
    });

    Route::prefix('/seo-meta')->group(function () {
        Route::get('/', [SEOMetaController::class, 'view', 'as' => 'admin.seometa.view'])->name('seometa_view');
        Route::get('/view/{id}', [SEOMetaController::class, 'display', 'as' => 'admin.seometa.display'])->name('seometa_display');
        Route::get('/excel', [SEOMetaController::class, 'excel', 'as' => 'admin.seometa.excel'])->name('seometa_excel');
        Route::get('/edit/{id}', [SEOMetaController::class, 'edit', 'as' => 'admin.seometa.edit'])->name('seometa_edit');
        Route::post('/edit/{id}', [SEOMetaController::class, 'update', 'as' => 'admin.seometa.update'])->name('seometa_update');
    });
    
    Route::prefix('/faq')->group(function () {
        Route::get('/', [FAQController::class, 'view', 'as' => 'admin.faq.view'])->name('faq_view');
        Route::get('/view/{id}', [FAQController::class, 'display', 'as' => 'admin.faq.display'])->name('faq_display');
        Route::get('/create', [FAQController::class, 'create', 'as' => 'admin.faq.create'])->name('faq_create');
        Route::post('/create', [FAQController::class, 'store', 'as' => 'admin.faq.store'])->name('faq_store');
        Route::get('/excel', [FAQController::class, 'excel', 'as' => 'admin.faq.excel'])->name('faq_excel');
        Route::get('/edit/{id}', [FAQController::class, 'edit', 'as' => 'admin.faq.edit'])->name('faq_edit');
        Route::post('/edit/{id}', [FAQController::class, 'update', 'as' => 'admin.faq.update'])->name('faq_update');
        Route::get('/delete/{id}', [FAQController::class, 'delete', 'as' => 'admin.faq.delete'])->name('faq_delete');
    });

    Route::get('/logout', [DashboardController::class, 'logout', 'as' => 'admin.logout'])->name('logout');
});