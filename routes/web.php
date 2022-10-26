<?php

use App\Http\Controllers\PessoaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',                          [PessoaController::class, 'index'])->name('pessoa.index');
Route::post('/pessoa/salvar',            [PessoaController::class, 'store'])->name('pessoa.store');
Route::get('/pessoa/cadastrar',          [PessoaController::class, 'create'])->name('pessoa.create');
Route::get('/pessoa/edit/{cdPessoa}',    [PessoaController::class, 'edit'])->name('pessoa.edit');
Route::post('/pessoa/update/{cdPessoa}', [PessoaController::class, 'update'])->name('pessoa.update');
Route::delete('/pessoa/{cdpessoa}',      [PessoaController::class, 'destroy'])->name('pessoa.destroy');