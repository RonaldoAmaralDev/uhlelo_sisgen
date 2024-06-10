<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\AbastecimentoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@redirectAdmin')->name('index');
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin routes
 */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.dashboard');
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);


    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // Logout Routes
    Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('fornecedores.index');
    Route::get('/fornecedores/create', [FornecedorController::class, 'create'])->name('fornecedores.create');
    Route::post('/fornecedores', [FornecedorController::class, 'store'])->name('fornecedores.store');
    Route::get('/fornecedores/{fornecedor}', [FornecedorController::class, 'show'])->name('fornecedores.show');
    Route::get('/fornecedores/{fornecedor}/edit', [FornecedorController::class, 'edit'])->name('fornecedores.edit');
    Route::put('/fornecedores/{fornecedor}', [FornecedorController::class, 'update'])->name('fornecedores.update');
    Route::delete('/fornecedores/{fornecedor}', [FornecedorController::class, 'destroy'])->name('fornecedores.destroy');

    Route::get('/veiculos', [VeiculoController::class, 'index'])->name('veiculos.index');
    Route::get('/veiculos/create', [VeiculoController::class, 'create'])->name('veiculos.create');
    Route::post('/veiculos', [VeiculoController::class, 'store'])->name('veiculos.store');
    Route::get('/veiculos/{veiculo}', [VeiculoController::class, 'show'])->name('veiculos.show');
    Route::get('/veiculos/{veiculo}/edit', [VeiculoController::class, 'edit'])->name('veiculos.edit');
    Route::put('/veiculos/{veiculo}', [VeiculoController::class, 'update'])->name('veiculos.update');
    Route::delete('/veiculos/{veiculo}', [VeiculoController::class, 'destroy'])->name('veiculos.destroy');

    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{cliente}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

    Route::get('/colaboradores', [ColaboradorController::class, 'index'])->name('colaboradores.index');
    Route::get('/colaboradores/create', [ColaboradorController::class, 'create'])->name('colaboradores.create');
    Route::post('/colaboradores', [ColaboradorController::class, 'store'])->name('colaboradores.store');
    Route::get('/colaboradores/{colaborador}', [ColaboradorController::class, 'show'])->name('colaboradores.show');
    Route::get('/colaboradores/{colaborador}/edit', [ColaboradorController::class, 'edit'])->name('colaboradores.edit');
    Route::put('/colaboradores/{colaborador}', [ColaboradorController::class, 'update'])->name('colaboradores.update');
    Route::delete('/colaboradores/{colaborador}', [ColaboradorController::class, 'destroy'])->name('colaboradores.destroy');

    Route::resource('abastecimento', AbastecimentoController::class);
    Route::resource('empresas', EmpresaController::class);
    Route::resource('items', ItemController::class);

});
