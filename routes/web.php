<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index']);

Route::group([
    'prefix' => 'dashboard',
], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::group([
        'prefix' => 'categories',
        'controller' => CategoryController::class,
    ], function () {
        Route::get('/', 'index')->name('category.index');
        Route::post('/store', 'store')->name('category.store');
        Route::post('/update/{category}', 'update')->name('category.update');
        Route::get('/{category}/products', 'show')->name('category.show');
        Route::get('/destroy/{category}', 'destroy')->name('category.destroy');
    });
    Route::group([
        'prefix' => 'products',
        'controller' => ProductController::class,
    ], function () {
        Route::post('/{category}/store', 'store')->name('product.store');
        Route::post('/{product}/update', 'update')->name('product.update');
        Route::post('/{product}/change-image', 'changeImage')->name('product.changeImage');
        Route::get('/destroy/{product}', 'destroy')->name('product.destroy');
    });
});

Route::get('/test', function() {
    return 'success';
});
