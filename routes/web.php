<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'ConfirmController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::post('mapel/datatable', 'Master\MapelController@datatable');
    Route::resource('mapel', 'Master\MapelController');
});

Auth::routes();
