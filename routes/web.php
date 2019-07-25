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
	Route::get('students','StudentController@index')->name('students');
	Route::get('/admin',function(){
		return view('admin.master');
	}); 



	

	Route::get('hello',function(){
	    return "xin chào các bạn";
	});
	Route::get('hello/thanh',function(){
	    echo"<h1>chào các bạn</h1>";
	});
	Route::get('hello2','HelloController@index');
	Route::get('thongtin','HelloController@showinfo');

	Route::get('/test',function(){
	    return view('test',['name'=>'Nguyễn thành']);
	});
	Route::get('users/{name?}', function($name = "Nguyễn thành"){
	echo'tên của bạn là:'.$name;
	});