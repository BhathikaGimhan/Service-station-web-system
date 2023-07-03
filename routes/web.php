<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/Widgets', function (){
    return view('Admin.widget');
});
Route::get('/Admin', function (){
    return view('Admin.table');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/redirect', [HomeController::class, 'index'])->name('home');
