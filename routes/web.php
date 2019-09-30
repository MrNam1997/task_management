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

use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('index');
});
Route::prefix('task')->group(function () {
    Route::get('create','TaskController@create')->name('task.create');
    Route::post('store','TaskController@store')->name('task.store');
    Route::get('show','TaskController@show')->name('task.show');
    Route::get('{id}/edit','TaskController@edit')->name('task.edit');
    Route::get('{id}/delete','TaskController@destroy')->name('task.destroy');
    Route::get('index','TaskController@index')->name('task.index');
});
