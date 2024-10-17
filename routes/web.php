<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentController;

// Route::get('/', function () {
//    return view ('home',  ['title' => 'Home']);
// })

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/fcl-booking', [DashboardController::class, 'fclBooking'])->name('fcl_booking');
Route::get('/lcl-booking', [DashboardController::class, 'lclBooking'])->name('lcl_booking');
Route::get('/update', [DashboardController::class, 'update'])->name ('update');
Route::get('/request-booking', [DashboardController::class, 'requestBooking'])->name('request_booking');
Route::get('/canceled-booking', [DashboardController::class, 'canceledBooking'])->name('canceled_booking');
Route::get('/viewss', [DashboardController::class, 'viewss'])->name('viewss');


Route::get('/login', [DashboardController::class, 'login'])->name('login');
Route::get('/register', [DashboardController::class, 'register'])->name('register');

Route::get('/load-content/{type}', [ContentController::class, 'loadContent']);
