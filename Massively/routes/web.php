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

Route::get('/', function(){
	return view('home');
});

Route::get('/messages/', 'MessagesController@index');

Route::post('/messages', 'MessagesController@store');

Route::get('/thankyou', 'thankyouController@index');


// Route::get('/messages', function () {
// 	$messages = DB::table('messages')->latest()->get();

//     return view('viewMessages', compact('messages'));
// });

// Route::get('/');
// Route::post('/messages' , 'MessagesController@store');
// Controller = PostsController

// Eloquent Model => Post

// Migration => Create Posts Table