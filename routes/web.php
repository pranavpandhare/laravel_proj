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




//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
//Route::post('/login', ['as'=>'login', 'uses'=>'LoginController@postLogin']);
Route::get('/','EmployeesController@index');
Route::get('/admin/employees/showusers','UsersController@index');
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::resource('employees', 'EmployeesController');

});