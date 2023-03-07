<?php

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

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function (){

    Route::get('/', AdminController::class);

    Route::prefix('menu')->namespace('menu')->group(function (){
        Route::get('/', 'IndexController@index')->name('admin.menu.index');
        Route::get('/create', 'CreateController@create')->name('admin.menu.create');
        Route::post('/', 'StoreController@store')->name('admin.menu.store');
        Route::get('/{menu}', 'ShowController@show')->name('admin.menu.show');
        Route::get('/{menu}/edit', 'EditController@edit')->name('admin.menu.edit');
        Route::patch('/{menu}', 'UpdateController@update')->name('admin.menu.update');
        Route::delete('/{menu}', 'DeleteController@delete')->name('admin.menu.delete');
    });


});