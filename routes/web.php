<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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
        Route::get('/destroy/{category}', 'destroy')->name('category.destroy');
    });
});

Route::get('/test', function() {
    return 'success';
});
