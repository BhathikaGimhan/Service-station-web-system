<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/services', function (){
    return view('service');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/about', function (){
    return view('about');
});
Route::get('/shop', function (){
    return view('shop');
});

Route::get('/adminPage', function (){
    return view('Admin.index');
});

Route::get('/Forms', function (){
    return view('Admin.form');
});
Route::get('/Booking', function (){
    return view('Admin.widget');
});
Route::get('/Admin', function (){
    return view('Admin.admin');
});

Route::middleware('role:admin')->get('/admin', function () {
    // Admin-only route logic
});

Route::middleware('role:user')->get('/user', function () {
    // User-only route logic
});

// ...


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/redirect', [HomeController::class, 'index'])->name('home');

Route::get('/fetch', [HomeController::class, 'fetch'])->name('fetch');
Route::post('/addVehicle', [HomeController::class, 'addVehicle'])->name('addVehicle');
Route::get('/vehicle-view/{id}', [HomeController::class, 'vehicleView'])->name('vehicleView');
Route::get('/servies/{number}', [HomeController::class, 'servies'])->name('servies');
Route::post('/saveHistory/{id}', [HomeController::class, 'saveHistory'])->name('saveHistory');
Route::get('/before/{Userid}', [HomeController::class, 'before'])->name('before');
Route::get('/list/{Userid}', [HomeController::class, 'list'])->name('list');
Route::get('/get-vehicle-details/{id}', [HomeController::class, 'getVehicleDetails'])->name('getVehicleDetails');
Route::post('/check_date_time/{formData}', [HomeController::class, 'DateTime'])->name('DateTime');
Route::post('/add-date', [HomeController::class, 'addDate'])->name('addDate');
Route::get('/fech-date/{id}', [HomeController::class, 'getBooking'])->name('getBooking');
Route::get('/delete-date/{id}', [HomeController::class, 'deleteBooking'])->name('deleteBooking');
