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

/*การสร้าง route จะให้ชื่อไปยัง Controller ชือว่า SiteController และให้ไปทํางานที action หรือ เมธอด ชือว่า  index() */


Route::get('about','SiteController@index');

//เเสดงข้อมุลทั้งหมดของครูทั้งหมด
Route::get('teachers','TeachersController@index');
//สิ้นสุดเสดงข้อมุลทั้งหมดของครูทั้งหมด


//เเสดงข้อมุลทั้งหมดของคนักเรียนนั้งหมด
Route::get('student','StudentController@index');
//สิ้นสุดเสดงข้อมุลทั้งหมดของครูทั้งหมด

//เเสดงข้อมุลทั้งหมดของความสัมพันธ์ระหว่างตาราง
Route::resource('classstuden','ClassController');

//สิ้นสุดเเสดงข้อมุลทั้งหมดของความสัมพันธ์ระหว่างตาราง
//]'
Route::get('enrollresult','ClassController@enrollresult');


Route::get('createclass','ClassController@createclass');


Route::get('subject','SubjectControllers@index');


Route::get('addsubject','SubjectControllers@create');

//สำหรับลบข้อมูลteachers
Route::get('teachers/destroy/{tch_id}','TeachersController@destroy');
//สิ้นสุดสำหรับลบข้อมูลteachers

//สำหรับลบข้อมูลstudent
Route::get('student/destroy/{stu_id}','StudentController@destroy');
//สิ้นสุดสำหรับลบข้อมูลstudent

//เพิ่มข้อมูลteachers
Route::resource('teachers','TeachersController');
//สิ้สุดเพิ่มข้อมูลteachers

//เพิ่มข้อมูลteachers
Route::resource('student','StudentController');

Route::post('createclasss','ClassController@storeclassStuden')->name('createclasss');

Route::post('addsub','SubjectControllers@addsubject')->name('addsub');


Route::post('Search','ClassController@Search')->name('Search');
Route::post('enrollresult','ClassController@Searchenrollresult')->name('enrollresult');
Route::post('Searchstu','StudentController@SearchStudent')->name('Searchstu');
Route::post('SearchTeachers','TeachersController@SearchTeachers')->name('SearchTeachers');




//เพิ่มข้อมูลteachers
Route::resource('Class','ClassController');
//สิ้สุดเพิ่มข้อมูลteachers

//เพิ่มข้อมูลteachers
Route::resource('subject','SubjectControllers');
//สิ้สุดเพิ่มข้อมูลteachers


Route :: get('/' , function (){
    return view('welcome');
});

Route::get('/vue','VueController@home')->name("vue");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/guzzle','guzzleController@index')->name("guzzle");


