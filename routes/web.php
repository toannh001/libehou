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
    return view('index');
});
Route::get('/slider', function () {
    return view('home/slider');
});
Route::get('/ebook', function () {
    return view('ebook_detail');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/contact','ContactController@GetContent');
Route::post('/contact','ContactController@SendMailtest');
/*
Route::resource('viewapi', 'ToDoController', ['only' => [
    'getApi'
]]);
*/
Route::get('/' ,'IndexController@GetDataIndex');
Route::get('/ebook/{id}', 'IndexController@GetDetailEbookID');
Route::get('/hoclieu/{id}', 'HoclieudientuController@GetDetailHoclieuID');
Route::get('/hoclieu/downloadrich/{id}', 'HoclieudientuController@DownloadRichMedia');
//Route::get('/search/{s}', 'SearchController@Timkiemhoclieu');
Route::get('/search/','SearchController@Timkiemhoclieu');
Route::get('/hoclieu/nganh/{nganh}','HoclieudientuController@GetHoclieuByNganh');
Route::get('/ebook/nganh/{nganh}','EbookController@GetEbookByNganh');
Route::get('/hoclieu/downloadtext/{id}','HoclieudientuController@DownloadBaigiangText');
