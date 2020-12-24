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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['localization']], function () {
    Route::resource('/post', 'PostController');
    Route::resource('/tag', 'TagController');
    Route::get('change-languages/{language}', 'PostController@changeLanguage')->name('change-languages');
});
