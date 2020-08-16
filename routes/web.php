<?php

use Illuminate\Support\Facades\Route;

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

// Basic Information
Route::get('/', 'EmployeeController@index')->name('home'); 

Route::get('save', 'EmployeeController@save')->name('save');

// Create image upload form
Route::get('/image-upload', 'EmployeeController@createForm');

// Store image
Route::post('/image-upload', 'EmployeeController@fileUpload')->name('imageUpload');

// Store Courses Datails



Route::get('/employee-courses', 'EmployeeController@store_course')->name('store_course');

// Store Experiences Details 




Route::get('/employee-experiences', 'EmployeeController@store_Exper')->name('store_Exper');

// Store Qualification

Route::get('/employee-qualif', 'EmployeeController@store_quali')->name('store_quali');

// Family Information 

Route::get('/family-info', 'EmployeeController@store_family_info')->name('store_family_info');

