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




Route::get('welcome', 'PagesController@welcome');
Route::get('kg', 'PagesController@kg');
Route::get('firstschool','PagesController@firstschool');
Route::get('secschool', 'PagesController@secschool');
Route::get('highschool', 'PagesController@highschool');

Route::get('login', 'PagesController@login');
Route::get('test', 'PagesController@test');

Route::get('mangement', 'PagesController@mangement');

Route::get('kgmang', 'PagesController@kgmang');

Route::get('firstmang', 'PagesController@firstmang');

Route::get('secondmang', 'PagesController@secondmang');

Route::get('highmang', 'PagesController@highmang');

Route::get('club', 'PagesController@club');


Route::get('bus', 'PagesController@bus');
Route::get('service', 'PagesController@service');


Route::get('interviewofice', 'PagesController@interviewofice');


Route::get('conectus', 'PagesController@conectus');

Route::resource('posts', 'PostsController');

Route::get('/', 'HomeController@index');

Auth::routes();
if (Auth::check()) {
    Route::get('/', 'HomeController@Dashbored');}




Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');
