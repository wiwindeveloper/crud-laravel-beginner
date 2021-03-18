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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
// 	$nama = 'Win Developer';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('fetch', 'MahasiswaController@fetch');

Route::get('/upload', 'UploadController@index');
// Route::post('/upload', function(Request $request){
//     //  dd($request::file('image'));
//     // $request::file('image')->store('images', 'public');
//     // return 'Uploaded...';

//     //$path = $request::file('image')->store('images', 'public');

//     return $request::file('image')->getClientOriginalName();
// });

Route::post('/upload', 'UploadController@upload');
Route::get('/searchapi', 'SearchApiController@index');
Route::get('/autodata', 'AutoDataController@index');
Route::post('/autodata/fetch', 'AutoDataController@fetshautocomplete')->name('autodata.fetshautocomplete');
Route::post('/autodata/inquiryroutername', 'AutoDataController@fetchotherdata');
Route::get('/tabulator', 'TabulatorController@index');
Route::post('/tabulator/fetchdata', 'TabulatorController@fetch');

//Students
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
Route::delete('/students/{student}', 'StudentsController@destroy');
Route::get('/students/{student}/edit', 'StudentsController@edit');
Route::patch('/students/{student}', 'StudentsController@update');

Route::get('/students/{student}/delete', 'StudentsController@hapus');

// Route::resource('students', 'StudentsController');