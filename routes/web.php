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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/feedback', 'FeedbackController')->only([
    'index',
    'store',
    'create'
])->middleware('auth');

Route::resource('/members', 'MemberController')->only([
    'index',
])->middleware('auth');

Route::resource('/dashboard', 'DashboardController')->only([
    'index',
])->middleware(['auth', 'admin']);

