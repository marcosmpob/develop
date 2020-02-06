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


/*Route::middleware([])->group(function(){
    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function(){
           
            Route::get('/dashboard','TesteController@dashboard'); 
    
            Route::get('/financeiro','TesteController@financeiro'); 
    
            Route::get('/produtos','TesteController@produtos');          

        });

    });
});
*/

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function(){
    Route::get('/dashboard','TesteController@dashboard')->name('dashboard'); 
    
    Route::get('/financeiro','TesteController@financeiro')->name('financeiro');  

    Route::get('/produtos','TesteController@produtos')->name('produtos');  

    Route::get('/',function(){
        return redirect()->route('dashboard');
    })->name('home');
});

/*
Route::delete('/productss/{id}','ProductController@destroy')->name('product.destroy');
Route::put('/products/{id}','ProductController@update')->name('product.update');
Route::get('/products/{id}/edit','ProductController@edit')->name('product.edit');
Route::get('/products/create','ProductController@create')->name('product.create');
Route::get('/products','ProductController@index')->name('product.index');
Route::get('/products','ProductController@store')->name('product.store');
Route::get('/products','ProductController@index');
Route::get('/products/{id}','ProductController@show');

*/

Route::resource('/products','ProductController');