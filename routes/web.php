<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReelController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PhoneAuthController;
use App\Http\Controllers\Front\PropertyController;
use App\Http\Controllers\Front\UserController as FrontUserController;

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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/property_details', [PageController::class, 'property_details'])->name('property_details');

Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/search_grid', [PageController::class, 'search_grid'])->name('search_grid');

Route::get('/search_map', [PageController::class, 'search_map'])->name('search_map');

Route::get('/our_service', [PageController::class, 'our_service'])->name('our_service');

Route::get('/privacy_policy', [PageController::class, 'policy'])->name('policy');

// Route::get('login', [PageController::class, 'login'])->name('login');

// Маршруты для авторизации по телефону
// Route::get('/login', [PhoneAuthController::class, 'showLoginForm'])->name('phone.login.form');
// Route::post('/phone-send-otp', [PhoneAuthController::class, 'sendOtp'])->name('phone.send-otp');
// Route::post('/phone-verify', [PhoneAuthController::class, 'verifyOtp'])->name('phone.verify');

// Защищенные маршруты
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/add_property', [PropertyController::class, 'create'])->name('add_property');
    Route::post('/add_property', [PropertyController::class, 'store']);
    Route::get('/my_properties', [PropertyController::class, 'index'])->name('my_properties');
    Route::get('/edit/{id}', [PropertyController::class, 'edit'])->name('edit_property');
    Route::put('/update_property/{id}', [PropertyController::class, 'update'])->name('update_property');

    Route::get('/profile', [FrontUserController::class, 'profile'])->name('profile');
    Route::put('/update_profile', [FrontUserController::class, 'update'])->name('update_profile');

    Route::post('/logout', [PhoneAuthController::class, 'logout'])->name('logout');
    // Добавьте сюда другие защищенные маршруты
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [PhoneAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/phone-send-otp', [PhoneAuthController::class, 'sendOtp'])->name('phone.send-otp');
    Route::post('/phone-verify', [PhoneAuthController::class, 'verifyOtp'])->name('phone.verify');
});
