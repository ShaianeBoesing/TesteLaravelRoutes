<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider;
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
    echo "string";
});

Route::get('/produtos', [\App\Http\Controllers\MeuControlador::class, 'produtos'])->name('meus-produtos');

Route::get('/aplicacao',  [\App\Http\Controllers\MeuControlador::class, 'aplicacao'])->name('app');

Route::get('/aplicacao/user',  [\App\Http\Controllers\MeuControlador::class, 'user'])->name('app-user');

Route::get('/aplicacao/profile',  [\App\Http\Controllers\MeuControlador::class, 'profile'])->name('app-profile');

Route::get('/aplicacao/{n1}/{n2}',  [\App\Http\Controllers\MeuControlador::class, 'multiplicar'])->name('multiplicacao');

Route::resource('/cliente', '\App\Http\Controllers\ClienteControlador'::class);
