<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::controller(App\Http\Controllers\PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('posts', 'posts')->name('posts');
    Route::get('posts/{post:slug}', 'detailPost')->name('posts.show');
    Route::get('paket-travel', 'package')->name('package');
    Route::get('detail/{travelPackage:slug}', 'detail')->name('detail');
    Route::get('transaction', 'transaction')->name('transaction');

    Route::get('kontak-kami', 'contact')->name('contact');
    Route::get('kirim-wa', 'getWhatsapp')->name('getWhatsapp');
    Route::post('kontak-kami', 'getEmail')->name('contact.email');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('order/{travelPackage:slug}', [App\Http\Controllers\PageController::class, 'order'])->name('order');

    Route::group(['middleware' => 'isAdmin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
        Route::resource('cars', \App\Http\Controllers\Admin\CarController::class);
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
        Route::resource('travel-packages', \App\Http\Controllers\Admin\TravelPackageController::class);
        Route::resource('travel-packages.galleries', \App\Http\Controllers\Admin\GalleryController::class);
        Route::resource('transactions', \App\Http\Controllers\Admin\TransactionController::class);
        Route::resource('guides', \App\Http\Controllers\Admin\GuideController::class);
    });

    Route::controller(App\Http\Controllers\PimpinanController::class)->name('pimpinan.')->group(function () {
        Route::get('/pimpinan/dashboard', 'dashboard')->name('dashboard');
        Route::get('/pimpinan/histories', 'index')->name('histories.index');
    });

    Route::controller(App\Http\Controllers\GuideController::class)->name('guide.')->group(function () {
        Route::get('/guide/dashboard', 'dashboard')->name('dashboard');
        Route::get('/guide/histories', 'index')->name('histories.index');
    });

});
