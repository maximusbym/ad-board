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

Route::get('/', [
    'as' => 'main',
    'uses' => 'MainController@showMain'
]);

Route::get('/catalog/{id?}', [
    'as' => 'catalog',
    'uses' => 'CatalogController@showCategory'
]);

Route::get('/about', function() {
    return view('about');
})->name('about');


Route::get('/create-ad', [
    'as' => 'create.ad',
    'middleware' => 'auth',
    'uses' => 'CatalogController@showCategory'
]);

Route::group(['middleware' => ['auth','admin'], 'as' => 'admin::', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('/', [
        'as' => 'main',
        'uses' => function() {
            return 'hello admin';
        }
    ]);

    // /admin/user/
    // /admin/user/1/edit
    // /admin/user/1/update
    // /admin/user/1/delete
    // php artisan route:list
    Route::resource('user', 'UserController', [
        'only' => ['store', 'index', 'edit', 'update', 'destroy','create']
    ]);

//    Route::post('/user', [
//        'as' => 'user.store',
//        'uses' => 'UserController@store'
//    ]);

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
