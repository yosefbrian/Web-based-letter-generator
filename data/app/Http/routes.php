<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');  
  
    Route::get('/home', 'HomeController@index');
  
    Route::get('/getData', 'HomeController@getData');
  
    Route::resource('getData/employees','HomeController');
    Route::get('getData/employees/{id}/delete', 'HomeController@delete');
    Route::post('getData/search', 'SearchController@search');
    Route::get('getData/search', 'SearchController@search');
    Route::get('export', array('uses' => 'ExportController@export', 'as' => 'admin.users.export'));


    Route::get('import', array('uses' => 'ExportController@import', 'as' => 'admin.users.import'));
   

   Route::post('upload', 'ExportController@upload');


    // Route::get('/upload', function() {
    //     return view('upload');
    

        
 // Route::get('import', function(){
 // return view('upload');
 // });


    // Route::post('image/upload', 'ExportController@upload');

Route::get('upload', array('uses' => 'ExportController@upload'));
});


