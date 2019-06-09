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
Route::get('/ebook', function () {
    return view('ebook');
});
Route::get('/test', function () {
    return view('test');
});
/*
Route::resource('viewapi', 'ToDoController', ['only' => [
    'getApi'
]]);
*/
Route::get('/' ,'EbookController@GetEbook');
Route::get('/ebook/{id}', 'EbookController@GetDetailEbookID');