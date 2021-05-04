<?php

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
    echo "string";
});

Route::get('/index', function () {
    return view('welcome');
    echo "string";
});

Route::get('/teste', function () {
    echo "Olá!";
});

Route::get('/oi/sejabemvindo', function () {
    echo "Oi! Seja bem vindo";
});

Route::get('/ola/{nome}/{sobrenome}', function ($nome,$sobrenome) {
    echo "Olá! $nome $sobrenome";
});

Route::get('/usuario/{seunome}/{sobrenome?}', function ($nome,$sobrenome=null) {
    if (isset($sobrenome))
        return "Esta é uma rota opcional, $nome $sobrenome";
        return "Esta é uma rota opcional, $nome Sem Sobrenome";
});

Route::get('/rotacomregras/{nome}/{n}', function ($nome,$n) {
    for ($i=0;$i<$n;$i++)
        echo $nome ."<br>";
})  ->where('nome','[A-Za-z]+')
    ->where('n','[0-9]+');

Route::prefix('/aplicacao')->group(function (){

    Route::get('/', function(){
        return view("app");
    })-> name('app');

    Route::get('/user', function(){
        return view("user");
    })-> name('app-user');

    Route::get('/profile', function(){
        return view("profile");
    })-> name('app-profile');

});

Route::get('/produtos', function (){
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Item 1</li>";
    echo "<li>Item 2</li>";
    echo "<li>Item 3</li>";
    echo "</ol>";
})->name('meus-produtos');

Route::redirect('todosprodutos1','produtos',301);

Route::get('todosprodutos2',function (){
    return redirect()->route('meus-produtos');
});
