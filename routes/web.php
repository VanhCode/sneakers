<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\SneakerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\SneakerController as ClientSneakerController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/collections/sneakers', [ClientSneakerController::class, 'sneakerList'])->name('sneakerList');
Route::get('/sneaker/{sneakerSlug}', [ClientSneakerController::class, 'detailSneaker'])->name('sneakerDetail');
Route::post('/sneaker/cartAdd/{sneakerSlug}', [CartController::class, 'cartAdd'])->name('cartAdd');


Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->middleware('isAdmin')->group(function () {

    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.dashboard');

    Route::controller(CategoriesController::class)
        ->name('categories.')
        ->prefix('categories')
        ->group(function () {
            Route::get('/', 'listCategories')->name('listCategories');
            Route::get('list', 'listCategories')->name('listCategories');
            Route::get('create', 'createCategories')->name('createCategories');
            Route::post('store', 'storeCategories')->name('storeCategories');
            Route::get('edit/{categoryId}', 'editCategories')->name('editCategories');
            Route::post('update/{categoryId}', 'updateCategories')->name('updateCategories');
            Route::get('detail/{categoryId}', 'detailCategories')->name('detailCategories');
            Route::post('delete/{categoryId}', 'deleteCategories')->name('deleteCategories');
        });

    Route::controller(SneakerController::class)
        ->name('sneaker.')
        ->prefix('sneaker')
        ->group(function () {
            Route::get('/', 'listSneaker')->name('listSneaker');
            Route::get('/list', 'listSneaker')->name('listSneaker');
            Route::get('create', 'createSneaker')->name('createSneaker');
            Route::post('store', 'storeSneaker')->name('storeSneaker');
            Route::get('edit/{sneakerId}', 'editSneaker')->name('editSneaker');
            Route::post('update/{sneakerId}', 'updateSneaker')->name('updateSneaker');
            Route::get('detail/{sneakerId}', 'detailSneaker')->name('detailSneaker');
            Route::post('delete/{sneakerId}', 'deleteSneaker')->name('deleteSneaker');
        });
});
