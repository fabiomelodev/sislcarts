<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductFeatureController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});

Route::get('login', [AuthController::class, 'index'])->name('login.index');

Route::post('/login', [AuthController::class, 'auth'])->name('login.auth');

Route::get('/registrar', [AuthController::class, 'create'])->name('login.create');

Route::post('/registrar', [AuthController::class, 'register'])->name('login.register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('orcamentos', [BudgetController::class, 'index'])->name('budget.index');

Route::get('orcamento/{budget:id}/editar', [BudgetController::class, 'edit'])->name('budget.edit');

Route::put('orcamento/{budget:id}/atualizar', [BudgetController::class, 'update'])->name('budget.update');

Route::get('orcamento/{budget:id}/deletar', [BudgetController::class, 'destroy'])->name('budget.destroy');

Route::get('/orcamento/criar', function () {
    return view('pages.budget.create');
})->name('budget.create');

Route::get('clientes', [CustomerController::class, 'index'])->name('customer.index');

Route::get('cliente/criar', [CustomerController::class, 'create'])->name('customer.create');

Route::post('cliente/criar', [CustomerController::class, 'store'])->name('customer.store');

Route::get('cliente/{customer:id}/editar', [CustomerController::class, 'edit'])->name('customer.edit');

Route::put('cliente/{customer:id}/atualizar', [CustomerController::class, 'update'])->name('customer.update');

Route::get('cliente/{customer:id}/deletar', [CustomerController::class, 'destroy'])->name('customer.destroy');

Route::get('servicos', [ServiceController::class, 'index'])->name('service.index');

Route::get('servico/criar', [ServiceController::class, 'create'])->name('service.create');

Route::post('servico/criar', [ServiceController::class, 'store'])->name('service.store');

Route::get('servico/{service:id}/editar', [ServiceController::class, 'edit'])->name('service.edit');

Route::put('servico/{service:id}/atualizar', [ServiceController::class, 'update'])->name('service.update');

Route::get('produtos', [ProductController::class, 'index'])->name('product.index');

Route::get('produto/criar', [ProductController::class, 'create'])->name('product.create');

Route::post('produto/criar', [ProductController::class, 'store'])->name('product.store');

Route::get('produto/{product:id}/editar', [ProductController::class, 'edit'])->name('product.edit');

Route::put('product/{product:id}/atualizar', [ProductController::class, 'update'])->name('product.update');




Route::get('tipos-produtos', [TypeProductController::class, 'index'])->name('type-product.index');

Route::get('tipos-produtos/criar', [TypeProductController::class, 'create'])->name('type-product.create');

Route::get('tipos-produtos/{typeProduct:id}/editar', [TypeProductController::class, 'edit'])->name('type-product.edit');




Route::get('tipos-servicos', [TypeServiceController::class, 'index'])->name('type-service.index');

Route::get('tipos-servicos/criar', [TypeServiceController::class, 'create'])->name('type-service.create');

Route::get('tipos-servicos/{typeService:id}/editar', [TypeServiceController::class, 'edit'])->name('type-service.edit');








Route::get('produtos-caracteristicas', [ProductFeatureController::class, 'index'])->name('product-feature.index');

Route::get('produto-caracteristica/criar', [ProductFeatureController::class, 'create'])->name('product-feature.create');

Route::post('produto-caracteristica/criar', [ProductFeatureController::class, 'store'])->name('product-feature.store');

Route::get('produto-caracteristica/{productType:id}/editar', [ProductFeatureController::class, 'edit'])->name('product-feature.edit');

Route::put('produto-caracteristica/{productType:id}/atualizar', [ProductFeatureController::class, 'update'])->name('product-feature.update');
