<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('hello','HelloController@index');
Route::post('hello','HelloController@post');
// Route::get('/hello/other','HelloController@other');


// Route::resource('quizy','QuizyController',['only' => ['show']]);
Route::resource('quiz','QuizController',['only' => ['show','index']]);
Route::resource('admin','AdminController',['only' => ['show','index','edit','update']]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
