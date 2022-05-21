<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\IndexController;
use App\Http\Controllers\Pages\ProductController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Administration\DashboardAdminController;
use App\Http\Controllers\Administration\UserAdminController;
use App\Http\Controllers\Administration\SneakerAdminController;
use App\Http\Controllers\Administration\BrandAdminController;
use App\Http\Controllers\Administration\SizeAdminController;
use App\Http\Middleware\isAdmin;

//--------------------------------------------- Pages publiques

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/conditions-generales-d-utilisation', 'cgu');
    Route::get('/politique-de-confidentialite', 'rgpd');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('selection-saison', 'all_season');
    Route::get('nouveautes', 'all_news');
    Route::get('tendances', 'all_popular');
    Route::get('promotions', 'all_discounts');
    Route::get('marques', 'all_brands');
    Route::get('marques/{marque}', 'show_brand');
});

//--------------------------------------------- Interface client

Route::resource('user', UserController::class)->middleware('auth');

//--------------------------------------------- Interface administration

Route::prefix('admin')
    ->middleware(['auth', 'role:admin'])
    ->group(function() {
        Route::resource('/', DashboardAdminController::class);
        Route::resource('users', UserAdminController::class);
        Route::resource('sneakers', SneakerAdminController::class);
        Route::resource('brands', BrandAdminController::class);
        Route::resource('sizes', SizeAdminController::class);
    });
