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
    return view('home');
});
Route::get('home', function () {
    return view('home');
});


Route::get('kg', function () {
    return view('kg');
});
Route::get('firstschool', function () {
    return view('firstschool');
});
Route::get('secschool', function () {
    return view('secschool');
});
Route::get('highschool', function () {
    return view('highschool');
});
Route::get('users', function () {
    return view('table');
});
Route::get('login', function () {
    return view('login');
});
Route::get('test', function () {
    return view('test');
});

Route::get('mangement', function () {
    return view('mangement');
});

Route::get('kgmang', function () {
    return view('kgmang');
});

Route::get('firstmang', function () {
    return view('firstmang');
});

Route::get('secondmang', function () {
    return view('secondmang');
});

Route::get('highmang', function () {
    return view('highmang');
});

Route::get('club', function () {
    return view('club');
});


Route::get('bus', function () {
    return view('bus');
});

Route::get('service', function () {
    return view('service');
});


Route::get('interviewofice', function () {
    return view('interviewofice');
});


Route::get('conectus', function () {
    return view('conectus');
});



Route::get('/name', 'PagesController@index');
Route::get('/news', 'PagesController@news');
Route::get('/aboutus', 'PagesController@aboutus');

