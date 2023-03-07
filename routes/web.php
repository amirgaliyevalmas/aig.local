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


Route::prefix('auth')->namespace('App\Http\Controllers\Auth')->group(function (){

    Route::get('/','AuthController@index')->name('auth.index');
    Route::post('/login','LoginController@login')->name('auth.login');

    Route::middleware('auth')->group(function (){
        Route::get('/logout','LogoutController@logout')->name('auth.logout');
    });
});


Route::prefix('admin')->middleware('auth')->namespace('App\Http\Controllers\Admin')->group(function (){

    Route::get('/', AdminController::class)->name('admin.index');

    Route::prefix('department')->namespace('department')->group(function (){
        Route::get('/', DepartmentIndexController::class)->name('admin.menu.index');
        Route::post('/', DepartmentStoreController::class)->name('admin.menu.store');
        Route::patch('/{department}', DepartmentUpdateController::class)->name('admin.menu.update');
    });


});