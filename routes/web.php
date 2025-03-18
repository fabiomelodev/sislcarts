<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
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
    return view('pages.dashboard');
});

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
