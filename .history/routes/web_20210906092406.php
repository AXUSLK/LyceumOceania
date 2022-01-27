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

//featch Apply now data
Route::get('/','HomeController@index');

// My Testing Page
Route::get('/11', function () {
    return view('11');
});


// Culture
Route::get('/sri-lanka-culture','Wor@index');
