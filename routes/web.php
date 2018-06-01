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

//category Route Start
Route::get('add-category','CategoryController@add_category')->name('add-category');
Route::post('save-category','CategoryController@save_category')->name('save-category');
Route::get('category-list','CategoryController@category_list')->name('category-list');
Route::get('delete-category/{id}','CategoryController@category_delete')->name('delete-category');
Route::get('edit-category/{id}','CategoryController@category_edit')->name('edit-category');
Route::post('update-category','CategoryController@category_update')->name('update-category');
//category Route End




