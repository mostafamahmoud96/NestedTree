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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/structure', 'App\Http\Controllers\AcademicController@index');

Route::get('category-tree-view','App\Http\Controllers\CategoryController@manageCategory');
Route::post('add-category','App\Http\Controllers\CategoryController@addCategory')->name('add-category');
