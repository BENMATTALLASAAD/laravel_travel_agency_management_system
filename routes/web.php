<?php

use App\Http\Controllers\customersController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\offerController;
use App\Http\Controllers\flightController;
use App\Http\Controllers\cruiseController;
use App\Http\Controllers\employeController;
use App\Http\Controllers\hotelsController;
use App\Http\Controllers\demandsController;



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

/* set active side bar*/
function setActive($route){
    if(is_array($route)){
        return in_array(Request::path(),$route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';

}
/* set active side bar*/

Route::post('/home',[homeController::class,'index'])->name('homePage');
Route::get('/home',[homeController::class,'index'])->name('homePage');

Route::get('/test-database-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Connected successfully to the database.";
    } catch (\Exception $e) {
        die("Could not connect to the database. Error: " . $e->getMessage());
    }
});

Route::get('/',[loginController::class,'show'])->name('login.show');
Route::post('/',[LoginController::class,'login'])->name('login');
Route::get('/offer',[offerController::class,'show'])->name('offer');

Route::get('/cruise',[cruiseController::class,'show'])->name('cruise');


Route::get('/customer',[customersController::class,'show'])->name('customer');
Route::name('customer_')->group(function(){
    Route::controller(customersController::class)->group(function(){
        
        Route::get('/customer_Profile/{customer}','customerProfile')->where('id','\d+')->name('Profile');
        Route::get('/customer_Edit/{customer}','customerEdit')->name('Edit');
        Route::put('/customer/{id},customer_update','customerUpdate')->name('update');
        Route::get('/customer/customer_create','customerAdd')->name('Add');
        Route::get('/customer/{id}','customerDelete')->name('Delete');
        Route::post('/customer','customerStore')->name('Store');
        
    });
   
});

Route::get('/hotels',[hotelsController::class,'show'])->name('hotels');
Route::get('/hotel_Infos/{hotel}',[hotelsController::class,'hotelInfos'])->where('id','\d+')->name('hotel_infos');
Route::get('/hotel/Create',[hotelsController::class,'hotelCreate'])->name('hotel_Create');
Route::post('/hotels',[hotelsController::class,'hotelStore'])->name('hotel_Store');
Route::get('/hotel_Edit/{hotel}',[hotelsController::class,'hotelEdit'])->name('hotel_Edit');
Route::get('/hotel_Delete/{hotel}',[hotelsController::class,'hotelDelete'])->name('hotel_Delete');
Route::put('/hotel/{id},hotel_update',[hotelsController::class,'hotelUpdate'])->name('hotel_Update');


Route::get('/employes',[employeController::class,'show'])->name('employes');
Route::get('/employe/employe_Create',[employeController::class,'employeAdd'])->name('employe_Create');
Route::post('/employes',[employeController::class,'employeStore'])->name('employe_Store');
Route::get('/employe_Profile/{employe}',[employeController::class,'employeProfile'])->where('id','\d+')->name('employe_Profile');
Route::get('/empoye_Edit/{employe}',[employeController::class,'employeEdit'])->name('employe_Edit');
Route::get('/employe/{id}',[employeController::class,'employeDelete'])->name('employe_Delete');
Route::put('/employe/{id},employe_update',[employeController::class,'employeUpdate'])->name('employe_update');

Route::get('/offers',[offerController::class,'show'])->name('offers');
Route::get('/offer_Infos/{offer}',[offerController::class,'offerInfos'])->where('id','\d+')->name('offer_infos');
Route::get('/offer/Create',[offerController::class,'offerCreate'])->name('offer_Create');
Route::post('/offers',[offerController::class,'offerStore'])->name('offer_Store');
Route::get('/offer_Edit/{offer}',[offerController::class,'offerEdit'])->name('offer_Edit');
Route::get('/offer_Delete/{offer}',[offerController::class,'offerDelete'])->name('offer_Delete');
Route::put('/offer/{id},offer_update',[offerController::class,'offerUpdate'])->name('offer_Update');

Route::get('/flight',[flightController::class,'show'])->name('flights');
Route::get('/flight_Infos/{flight}',[flightController::class,'flightInfos'])->where('id','\d+')->name('flight_infos');
Route::get('/flight/Create',[flightController::class,'flightCreate'])->name('flight_Create');
Route::post('/flights',[flightController::class,'flightStore'])->name('flight_Store');
Route::get('/flight_Edit/{flight}',[flightController::class,'flightEdit'])->name('flight_Edit');
Route::get('/flight_Delete/{flight}',[flightController::class,'flightDelete'])->name('flight_Delete');
Route::put('/flight/{id},flight_update',[flightController::class,'flightUpdate'])->name('flight_Update');

Route::get('/demands',[demandsController::class,'show'])->name('demands');
Route::get('/demands/Menu',[demandsController::class,'demandType'])->name('demandType');

