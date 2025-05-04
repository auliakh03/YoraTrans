<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Bus_TypeController;
use App\Http\Controllers\BusTypeController;
use App\Http\Controllers\CustomerDataController;
use App\Http\Controllers\CustomerIdentity;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Models\CustomerData;
use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('login');
// });



Route::middleware(['guest'])->group(function(){
    Route::get('/', [SesiController::class, 'index']);
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function(){
    return redirect('/admin/admindashboard');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/admin', [SesiController::class, 'admin'])->middleware('userAkses::admin');
    Route::get('/admin/customer', [SesiController::class, 'customer'])->middleware('userAkses::customer');;
    Route::get('/logout', [SesiController::class, 'logout']);
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user/create', [UserController::class, 'create']);
Route::put('/user/update/{id}', [UserController::class, 'update']);
Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);


Route::get('/roles', [RoleController::class, 'index']);
Route::get('/roles/{id}', [RoleController::class, 'show']);
Route::post('/roles/create', [RoleController::class, 'create']);
Route::put('/roles/update/{id}', [RoleController::class, 'update']);
Route::delete('/roles/delete/{id}', [RoleController::class, 'destroy']);


Route::get('/customer_data', [CustomerDataController::class, 'index']);
Route::get('/customer_data/{id}', [CustomerDataController::class, 'show']);
Route::get('/customer_data/create', [CustomerDataController::class, 'create']);
Route::get('/customer_data/update/{id}', [CustomerDataController::class, 'update']);
Route::get('/customer_data/delete/{id}', [CustomerDataController::class, 'destroy']);


Route::get('/reservation', [ReservationController::class, 'index']);
Route::get('/reservation/{id}', [ReservationController::class, 'show']);
Route::post('/reservation/create', [ReservationController::class, 'create']);
Route::put('/reservation/update/{id}', [ReservationController::class, 'update']);
Route::delete('/reservation/delete/{id}', [ReservationController::class, 'destroy']);

Route::get('/schedule', [ScheduleController::class, 'index']);
Route::get('/schedule/{id}', [ScheduleController::class, 'show']);
Route::post('/schedule/create', [ScheduleController::class, 'create']);
Route::put('/schedule/update/{id}', [ScheduleController::class, 'update']);
Route::delete('/schedule/delete/{id}', [ScheduleController::class, 'destroy']);

Route::get('/bus_type', [BusTypeController::class, 'index']);
Route::get('/bus_type/{id}', [BusTypeController::class, 'show']);
Route::post('/bus_type/create', [BusTypeController::class, 'create']);
Route::put('/bus_type/update/{id}', [BusTypeController::class, 'update']);
Route::delete('/bus_type/delete/{id}', [BusTypeController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('role', function () {
    return view('role');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('home', function () {
    return view('home');
});

Route::get('forgot', function () {
    return view('forgot');
});

Route::get('register', function () {
    return view('register');
});

Route::get('busType', function () {
    return view('busType');
});


