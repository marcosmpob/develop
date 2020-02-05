<?php

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


Route::get('/teste', function () {
    echo "carai cusão";
    return view('welcome');
});


Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "Posts da categoria: {$flag}";
});


Route::middleware([])->group(function(){
    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function(){
           
            Route::get('/dashboard','TesteController@dashboard'); 
    
            Route::get('/financeiro','TesteController@financeiro'); 
    
            Route::get('/produtos','TesteController@produtos');          

        });

    });
});