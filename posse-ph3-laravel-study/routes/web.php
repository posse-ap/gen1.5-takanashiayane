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
Route::get('admin/{quiz_id}/destroy_show','AdminController@destroy_show')->name('admin.destroy_show');
Route::post('admin/{quiz_id}/store','AdminController@store')->name('admin.store');
Route::post('admin/quiz_store','AdminController@quiz_store')->name('admin.quiz_store');
Route::get('admin/{quiz_id}/create','AdminController@create')->name('admin.create');
Route::delete('admin/{quiz_id}/{question_id}/destroy','AdminController@destroy')->name('admin.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
