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

//Padrão aceitável somente em casos de views estáticas.
// Route::view('/view', 'home.welcome', ["id" => 2]);

Route::post('/register', function () {
    return 'register';
});

Route::get('contato', function () {
    return 'contato';
});

Route::any('any', function () {
    return 'any';
});

Route::match(['post', 'get'], 'match', function () {
    return 'match';
});

Route::get('/login', function () {
    return "Login!";
})->name('login');

//******************/ ROUTES WHEN PARAMETERS /*******************/
Route::get('/categorias/{cat}', function ($parm1) {
    return "Listando registros da categoria : {$parm1}";
});

Route::get('/categoria/{slug}/posts', function ($slug) {
    return "Registros da categoria: {$slug}";
});

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produto(s): {$idProduct}";
});

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produto(s): {$idProduct}";
});
//***************************************************************/


//******************/ ROUTES WITH REDIRECT /*******************/
Route::redirect('acessar1','acessar2');

// Route::get('acessar1', function () {
//     return redirect("acessar1");
// });

Route::get('acessar2', function () {
    return redirect()->route("url.name");
});
//***************************************************************/


//****************/ ROUTES WITH PARAMETER "NAME" **********/
Route::get('/name-of-url', function () {
    return "Hey Guyz, Hello World !";
})->name('url.name');
//********************************************************/


//******************/ ROUTES GROUPS /*********************/

// Route::middleware(['auth'])->group(function () {
//     /**
//      * Neste caso quando definido um middleware diretamente ou em array,
//      * o laravel irá aplica-lo antes de checar as rotas.
//      */

//     Route::prefix('admin')->group(function () { //Agrupamento por prefixo no nome das rotas

//         Route::namespace('Admin')->group(function () { //Agrupamento por namespace p/ os controller

//             Route::name('name.')->group(function () {
                
//                 Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
        
//                 Route::get('/finantical', 'TesteController@teste')->name('finantical');
        
//                 Route::get('/produtos', 'TesteController@products')->name('products');
        
//                 Route::get('/', function () {
//                     return redirect()->route('admin.dashboard');
//                 })->name('home');
//             });
//         });
//     });
// });

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => 'admin.'
], function () {
    Route::get('/dashboard', 'TesteController@dashboard')->name('dashboard');

    Route::get('/finantical', 'TesteController@finantical')->name('finantical');

    Route::get('/products', 'TesteController@products')->name('products');

    Route::get('/', function () {
        return redirect()->route('dashboard');
    })->name('home');
});
//********************************************************/
