<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeProductController;
use App\Http\Controllers\TypeServiceController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('budget')->name('budget.index');

Route::get('service')->name('service.index');

Route::get('customer')->name('customer.index');

Route::get('product-feature')->name('product-feature.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(ProductController::class)->group(function () {
        Route::get('/produtos', 'index')->name('product.index');
        Route::get('/produtos/criar', 'create')->name('product.create');
        Route::get('/produtos/{product:id}/editar', 'edit')->name('product.edit');
    });

    Route::controller(TypeProductController::class)->group(function () {
        Route::get('/tipos-produtos', 'index')->name('type-product.index');
        Route::get('/tipos-produtos/criar', 'create')->name('type-product.create');
        Route::get('/tipos-produtos/{typeProduct:id}/editar', 'edit')->name('type-product.edit');
    });

    Route::controller(TypeServiceController::class)->group(function () {
        Route::get('/tipos-servicos', 'index')->name('type-service.index');
        Route::get('/tipos-servicos/criar', 'create')->name('type-service.create');
        Route::get('/tipos-servicos/{typeService:id}/editar', 'edit')->name('type-service.edit');
    });
});

require __DIR__ . '/auth.php';
