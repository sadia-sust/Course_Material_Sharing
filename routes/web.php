<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('uploadfile/{id}',['as' => 'uploadfile', 'uses' => 'UploadController@getviewteacher']);
Route::get('/home', 'HomeController@index');
Route::get('/uploadfile','UploadController@getview');

Route::post('/insertfile',array('as'=>'insertfile' , 'uses' => 'UploadController@insertFile'));
Route::get('viewAlldownloadfile','DownloadController@downfunc');
Route::get('viewAlldownloadfile/{id}','DownloadController@viewfunc');


