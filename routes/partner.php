<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\PartnerAuthController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\AreaCoverageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FleetController;
use App\Http\Controllers\BookingController;


/*
|--------------------------------------------------------------------------
| partner Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//auth
Route::get('/login',[PartnerAuthController::class, 'login'])->middleware('partnerLoggedIn');
Route::get('/register',[PartnerAuthController::class, 'register'])->middleware('partnerLoggedIn');
Route::post('/store/succcessfully',[PartnerAuthController::class, 'store'])->name('partner.save');
Route::post('/check',[PartnerAuthController::class, 'check'])->name('partner.check');
Route::get('/logout',[PartnerAuthController::class, 'logout'])->name('partner.logout');
Route::get('/',[PartnerAuthController::class, 'dashboard'])->middleware('isLoggedInPartner');

//Booking

Route::resource('books', BookingController::class);


//bank
Route::resource('banks', BankController::class);

// Billing Address
Route::get('/{bill}/editbilling',[BankController::class, 'editbillingaddress'])->name('edit.billingaddress');
Route::post('/billing/address/successfully/save/{bill}',[BankController::class, 'updatebillingaddress'])->name('billingAddress.update');

//Area Covarage
Route::resource('areacovers', AreaCoverageController::class);


//payment
Route::resource('payments', PaymentController::class);

// by milage 
Route::get('/bymilage/pricing',[PricingController::class, 'bymilage'])->name('bymilages.index');

Route::post('/bymilage/store/succcessfully',[PricingController::class, 'milagestore'])->name('bymilages.store');

Route::get('/bymilage/pricing/edit/{bymilage}',[PricingController::class, 'milageedit'])->name('bymilages.edit');

Route::post('/bymilage/updated/succcessfully/{id}',[PricingController::class, 'milageupdate'])->name('bymilages.update');

Route::post('/bymilage/deleted/succcessfully/{bymilage}',[PricingController::class, 'milagedelete'])->name('bymilages.delete');

// Air fixed price

Route::get('/airfixed/pricing',[PricingController::class, 'airfixprice'])->name('airfixprices.index');

Route::post('/airfixed/store/succcessfully',[PricingController::class, 'airfixpricestore'])->name('airfixprices.store');

Route::get('/airfixed/pricing/edit/{bymilage}',[PricingController::class, 'airfixpriceedit'])->name('airfixprices.edit');

Route::post('/airfixed/updated/succcessfully/{id}',[PricingController::class, 'airfixpriceupdate'])->name('airfixprices.update');

Route::post('/airfixed/deleted/succcessfully/{bymilage}',[PricingController::class, 'airfixpricedelete'])->name('airfixprices.delete');

// Congestion Charges

Route::get('/congestion/charges',[PricingController::class, 'congcharge'])->name('congcharges.index');

Route::post('/congestion/charge/succcessfully',[PricingController::class, 'congchargestore'])->name('congcharges.store');

Route::get('/congestion/charge/edit/{congcharge}',[PricingController::class, 'congchargeedit'])->name('congcharges.edit');

Route::post('/congestion/charge/updated/succcessfully/{id}',[PricingController::class, 'congchargesupdate'])->name('congcharges.update');

Route::post('/congestion/charge/deleted/succcessfully/{congcharge}',[PricingController::class, 'congchargedelete'])->name('congcharges.delete');

// Document licence

Route::resource('licenses', DocumentController::class);

//Document insurance

Route::get('/insurances',[DocumentController::class, 'insurance'])->name('insurances.index');

Route::post('/insurance/add/succcessfully',[DocumentController::class, 'insurancestore'])->name('insurances.store');

Route::get('/insurances/edit/{insurance}',[DocumentController::class, 'insuranceedit'])->name('insurances.edit');

Route::post('/insurance/updated/succcessfully/{id}',[DocumentController::class, 'insuranceupdate'])->name('insuran.update');

Route::post('/insurance/deleted/succcessfully/{insurance}',[DocumentController::class, 'insurancedelete'])->name('insurances.delete');



// Driver Information

Route::get('/drivers',[FleetController::class, 'drivers'])->name('drivers.index');

Route::post('/drivers/store/succcessfully',[FleetController::class, 'driverstore'])->name('drivers.store');

Route::get('/drivers/edit/{driver}',[FleetController::class, 'driveredit'])->name('drivers.edit');

Route::post('/drivers/updated/succcessfully/{id}',[FleetController::class, 'driverupdate'])->name('drive.update');

Route::post('/drivers/deleted/succcessfully/{driver}',[FleetController::class, 'driverdelete'])->name('drivers.delete');

// Vehicles
Route::get('/vehicles',[FleetController::class, 'vehicles'])->name('vehicles.index');

Route::post('/vehicle/store/succcessfully',[FleetController::class, 'vehiclestore'])->name('vehicles.store');

Route::get('/vehicles/edit/{vehicle}',[FleetController::class, 'vehicleedit'])->name('vehicles.edit');

Route::post('/vehicles/updated/succcessfully/{id}',[FleetController::class, 'vehicleupdate'])->name('vehicl.update');

Route::post('/vehicles/deleted/succcessfully/{vehicle}',[FleetController::class, 'vehicledelete'])->name('vehicles.delete');