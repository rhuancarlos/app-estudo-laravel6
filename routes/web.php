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

Route::get('/login', function () {
    return 'Login!';
})->name('login');

//****************/ ROUTES USING CONTROLLERS ************/
/*
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('/products/{id}', 'ProductController@update')->name('products.update');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::post('/products', 'ProductController@store')->name('products.store');
*/
//********************************************************/

//****************/ ROUTES USING RESOURCES ***************/
// Route::resource('products', 'ProductController');
//********************************************************/

//****************/ ROUTES USING RESOURCES WITH MIDDLEWARE*/
Route::resource('products', 'ProductController');//->middleware('auth');
//********************************************************/