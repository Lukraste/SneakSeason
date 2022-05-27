<?php
use App\Http\Middleware\isAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Pages\IndexController;
use App\Http\Controllers\Pages\ProductController;
use App\Http\Controllers\Administration\SizeAdminController;
use App\Http\Controllers\Administration\UserAdminController;
use App\Http\Controllers\Administration\BrandAdminController;
use App\Http\Controllers\Administration\SneakerAdminController;
use App\Http\Controllers\Administration\DashboardAdminController;

//--------------------------------------------- Pages publiques

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/conditions-generales-d-utilisation', 'cgu')->name('cgu');
    Route::get('/politique-de-confidentialite', 'rgpd')->name('rgpd');
});

Route::controller(ProductController::class)
    ->group(function () {
    Route::get('/sneakers', 'all_products')->name('sneakers.all');
    Route::get('/sneakers/selection-de-saison', 'all_season')->name('sneakers.season');
    Route::get('/sneakers/nouveautes', 'all_news')->name('sneakers.news');
    Route::get('/sneakers/populaires', 'all_popular')->name('sneakers.popular');
    Route::get('/sneakers/promotions', 'all_discounts')->name('sneakers.discounts');

    Route::get('/sneakers/{slug}', 'show_product')->name('sneakers.show');
    Route::get('/brands/{slug}', 'show_brand')->name('brands.show');
    Route::get('/modeles/{slug}', 'show_modele')->name('modeles.show');

});

//--------------------------------------------- Interface client

Route::resource('user', UserController::class)->middleware('auth');

//--------------------------------------------- Interface administrateur

