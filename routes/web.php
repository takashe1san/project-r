<?php

use App\Http\Controllers\{AuthController, CartController, CategoryController, DashboardController, FeedbackController, HomeController, ImageController, OrderController, ProductController, TableController};
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group([
    'controller' => AuthController::class,
], function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'authenticate')->name('auth');
    Route::get('logout', 'logout')->name('logout');
    Route::get('register', 'register')->name('register');
    Route::post('signup', 'signup')->name('signup');
});

Route::group([
    'prefix' => 'cart',
    'controller' => CartController::class,
    // 'middleware' => 'auth',
], function() {
    Route::post('store/{product}', 'store')->name('cart.store')->middleware('auth');
    Route::get('destroy/{cartItem}', 'destroy')->name('cart.destroy')->middleware('auth');
    Route::post('add/{product}', 'add')->name('cart.add');
    Route::get('remove/{id}', 'remove')->name('cart.remove');
});

Route::group([
    'prefix' => 'order',
    'controller' => OrderController::class,
    // 'middleware' => 'auth',
], function() {
    Route::post('store', 'store')->name('order.store')->middleware('auth');
    Route::get('/{order}/complate', 'complate')->name('order.complate')->middleware('auth');
    Route::get('/add/{table}', 'add')->name('order.add');
});

Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'manager',
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');;

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

    Route::group([
        'prefix' => 'orders',
        'controller' => OrderController::class,
    ],function () {
        Route::get('/', 'index')->name('order.index');
        Route::get('/{order}', 'show')->name('order.show');
        Route::get('/{order}/change-status', 'changeStatus')->name('order.changeStatus');
        Route::get('/{order}/reject', 'reject')->name('order.reject');
    });

    Route::group([
        'prefix' => 'tables',
        'controller' => TableController::class,
    ], function () {
        Route::get('/', 'index')->name('table.index');
        Route::get('/{table}/allow', 'allowToggle')->name('table.allow');
        Route::post('/store', 'store')->name('table.store');
    });

    Route::group([
        'prefix' => 'images',
        'controller' => ImageController::class,
    ], function () {
        Route::get('/', 'index')->name('image.index');
        Route::post('/store', 'store')->name('image.store');
        Route::get('/destroy/{image}', 'destroy')->name('image.destroy');
    });

    Route::group([
        'prefix' => 'feedbacks',
        'controller' => FeedbackController::class,
    ], function () {
        Route::post('/store', 'store')->name('feedback.store');
    });
});
