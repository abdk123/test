<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
//
Route::get('/', function () {
   return view('welcome');
});

// Route::get('landing',function(){
//    return view('landing');
// });

// Route::get('about',function(){
//    return view('about');
// });

// Route::namespace('App\Http\Controllers') -> group(function(){

//    Route::get('/','NewsController@show');

// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

