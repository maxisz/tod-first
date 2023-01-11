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

Route::get('/', function () {
    return view('tod.landing');
});

Route::get('/create', function() {
 return view('tod.create');
});

Route::get('/room/{session_code}', function($session_code){

    return view('tod.room');
});