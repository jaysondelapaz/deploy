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
//     return view('welcome');
// });

Route::group(['as' => "Backend.",'prefix'=>""],function (){
	$this->get('/',['as'=>"index",'uses'=>"Custom\CvController@index"]);
	$this->get('download',['as'=>"download",'uses'=>"Custom\CvController@downloadcv"]);
});
