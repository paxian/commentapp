<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
  return View::make('index'); // Will return app/views/index.php
});

// API Routes ----------------------
Route::group(array('prefix' => 'api'), function(){
  Route::resource('comments', 'CommentController',
    array('only' => array('index', 'store', 'destroy')));
});

// Catch all route
// App::missing(function($exception) {
//     return View::make('index');
// });
