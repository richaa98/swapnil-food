<?php

use Illuminate\Support\Facades\Route;
use App\Models\Menu;

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

Route::get('/', function () {
    $menus=Menu::all();
    return view('welcome',compact('menus'));
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'create'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/booking', [App\Http\Controllers\BookingController::class, 'create'])->name('booking');
Route::post('/booking', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');


// Menu Section

Route::resource('admin/menu', App\Http\Controllers\Admin\MenuController::class)->middleware('auth');
Route::resource('admin/table', App\Http\Controllers\Admin\TableController::class)->middleware('auth');
Route::resource('admin/bookings', App\Http\Controllers\Admin\BookingController::class)->middleware('auth');
Route::resource('admin/contact', App\Http\Controllers\Admin\ContactController::class)->middleware('auth');