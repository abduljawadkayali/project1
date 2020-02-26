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

Route::get('news', 'PagesController@news');

Route::get('club', 'PagesController@club');


Route::get('bus', 'PagesController@bus');
Route::get('service', 'PagesController@service');


Route::get('interviewofice', 'PagesController@interviewofice');


Route::get('conectus', 'PagesController@conectus');

Route::resource('posts', 'PostsController');
Route::get('text/{id}', ['as' => 'post.text', 'uses' => 'PostsController@text']);
Route::get('display/{id}', ['as' => 'post.display', 'uses' => 'PostsController@display']);

Route::resource('texts', 'TextController@index');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Auth::routes();





Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');
Route::get('photo/{id}', ['as' => 'crud.photo', 'uses' => 'CrudsController@photo']);


Route::resource('crud','CrudsController');
Route::get('/staff/create', ['as' => 'staff.create', 'uses' => 'CrudsController@createStaff']);
Route::get('/staff/edit', ['as' => 'staff.edit', 'uses' => 'CrudsController@editStaff']);


Route::resource('staff','StaffsController');
Route::get('staffphoto/{id}', ['as' => 'staff.photo', 'uses' => 'StaffsController@photo']);


Route::resource('subject', 'SubjectsController');

Route::resource('class', 'ClassesController');

Route::resource('branch', 'BranchesController');


Route::resource('exam', 'ExamsController');

Route::resource('student', 'studentsController');
Route::resource('teacher', 'TeachersController');
Route::resource('year', 'YearsController');
Route::resource('semister', 'SemistersController');


Route::resource('group', 'GroupsController');

Route::resource('respon', 'Group_branch_subject_teachersController');


Route::get('relation', ['as' => 'relation', 'uses' => 'Group_branch_subject_teachersController@getGroups']);

Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'Group_branch_subject_teachersController@destroy']);

Route::get('studentdelete/{id}', ['as' => 'studentdelete', 'uses' => 'StudentsController@destroy']);

Route::get('relation/getBranches/{id}','Group_branch_subject_teachersController@getBranches');

Route::get('relation/getSubjects/{id}','Group_branch_subject_teachersController@getSubjects');

Route::get('AddStudent', ['as' => 'AddStudent', 'uses' => 'StudentsController@getGroups']);

Route::get('AddStudent/getBranches/{id}','StudentsController@getBranches');


Route::group(['prefix' => 'Student'], function () {
    Route::get('StudentLogin','Student\AuthController@login');
    Route::post('StudentLogin','Student\AuthController@attemp');
    Route::resource('StudentHome', 'Student\StudentHomeController');


    Route::get('Year/{year}','Student\StudentHomeController@year')->name('student.year');
Route::get('semister/{year}/{semister}','Student\StudentHomeController@semister')->name('student.semister');
Route::get('class/{year}/{semister}/{subject}','Student\StudentHomeController@class')->name('student.class');
Route::get('branch/{year}/{semister}/{class}/{branch}','Student\StudentHomeController@branch')->name('student.branch');
Route::get('subject/{year}/{semister}/{class}/{branch}/{subject}','Student\StudentHomeController@subject')->name('student.subject');
Route::get('exam/{year}/{semister}/{class}/{branch}/{subject}/{exam}','Student\StudentHomeController@exam')->name('student.exam');
Route::get('subject/{year}/{semister}/{class}/{branch}/{subject}/{exam}/{student}','Student\StudentHomeController@student')->name('student.student');

Route::get('action/{year}/{semister}/{class}/{branch}/{subject}/{exam}','Student\StudentHomeController@action')->name('student.action');


    });

Route::group(['prefix' => 'Teacher'], function () {
Route::resource('TeacherHome', 'Teacher\TeacherHomeController');
Route::get('Year/{year}','Teacher\TeacherHomeController@year')->name('teacher.year');
Route::get('semister/{year}/{semister}','Teacher\TeacherHomeController@semister')->name('teacher.semister');
Route::get('class/{year}/{semister}/{class}','Teacher\TeacherHomeController@class')->name('teacher.class');
Route::get('branch/{year}/{semister}/{class}/{branch}','Teacher\TeacherHomeController@branch')->name('teacher.branch');
Route::get('subject/{year}/{semister}/{class}/{branch}/{subject}','Teacher\TeacherHomeController@subject')->name('teacher.subject');
Route::get('exam/{year}/{semister}/{class}/{branch}/{subject}/{exam}','Teacher\TeacherHomeController@exam')->name('teacher.exam');
Route::get('subject/{year}/{semister}/{class}/{branch}/{subject}/{exam}/{student}','Teacher\TeacherHomeController@student')->name('teacher.student');

Route::get('action/{year}/{semister}/{class}/{branch}/{subject}/{exam}','Teacher\TeacherHomeController@action')->name('teacher.action');

Route::get('TeacherLogin','Teacher\AuthController@login');
Route::post('TeacherLogin','Teacher\AuthController@attemp');
});




//Route::get('TeacherHome', 'Teacher\TeacherHomeController@index');

