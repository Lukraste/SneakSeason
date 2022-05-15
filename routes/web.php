<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\Controller,
    App\Http\Controllers\IndexController,
    App\Http\Controllers\Pages\PageController,
    App\Http\Controllers\Pages\UserController,
    App\Http\Controllers\Administration\DashboardAdminController,
    App\Http\Controllers\Administration\UserAdminController,
    App\Http\Controllers\Administration\SneakerAdminController,
    App\Http\Controllers\Administration\BrandAdminController,
    App\Http\Controllers\Administration\SizeAdminController,
    App\Http\Middleware\isAdmin;

//--------------------------------------------- Pages

Route::resource('/', IndexController::class);

Route::controller(PageController::class)->group(function () {

    Route::get('selection-saison', 'all-season');
    Route::get('nouveautes', 'all-news');
    Route::get('tendances', 'all-trends');
    Route::get('promotions', 'all-discounts');
    Route::get('marques/{marque}', 'show-brand');
    Route::get('marques', 'all-brands');
    Route::get('politique-de-confidentialite', 'show-confidentialite');
});


//--------------------------------------------- Interface client

Route::resource('user', UserController::class)->middleware('auth');

//--------------------------------------------- Interface administration

Route::prefix('admin')
    ->middleware(isAdmin::class)
    ->group(function() {
        Route::resource('/', DashboardAdminController::class);
        Route::resource('users', UserAdminController::class);
        Route::resource('sneakers', SneakerAdminController::class);
        Route::resource('brands', BrandAdminController::class);
        Route::resource('sizes', SizeAdminController::class);
    });
