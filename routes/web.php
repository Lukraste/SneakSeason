<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Pages\IndexController;
use App\Http\Controllers\Pages\ProductController;
use App\Http\Controllers\User\UserProductController;
use App\Http\Controllers\Admin\ProductAdminController;

//--------------------------------------------- Pages publiques

Route::controller(IndexController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/conditions-generales-d-utilisation', 'cgu')->name('cgu');
        Route::get('/politique-de-confidentialite', 'rgpd')->name('rgpd');
        Route::get('/cookies', 'rgpd')->name('cookies');
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
        Route::get('/collections/{slug}', 'show_collection')->name('collections.show');
});

//--------------------------------------------- Interface client

Route::middleware(['auth'])->group(function () {
    Route::view('/mon-compte', 'pages.users.dashboard')->name('user.index');
    Route::view('/mon-compte/commandes', 'pages.users.orders')->name('user.orders');
    Route::view('/mon-compte/favoris', 'pages.users.favoris')->name('user.favoris');

    Route::delete('/orders/{reference_code}', [OrderController::class, 'destroy'])->name('order.destroy');
    Route::delete('/user_products/{product_id}', [UserProductController::class, 'destroy'])->name('favoris.destroy');

    Route::resource('/orders', OrderController::class);
    Route::resource('/user_products', UserProductController::class);
});


//--------------------------------------------- Interface administrateur

Route::controller(AdminController::class)
    ->prefix('/admin')
    ->middleware('auth', 'role:admin')
    ->group(function () {
        Route::get('/', 'index')->name('admin.index');
        Route::get('/products-list', 'products')->name('products.list');
        Route::get('/orders-list', 'orders')->name('orders.list');
        Route::get('/inventories-list', 'inventories')->name('inventories.list');
        Route::get('/users-list', 'users')->name('users.list');

        Route::resource('/products', ProductAdminController::class);
});