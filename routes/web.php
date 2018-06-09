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
//==========================Front End ==========================//
Route::get('/', function () {
    return view('frontend.front_view.main_page.index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/product-details/{id}','ProductController@product_details')->name('product-single');
//Product sortBy Route start
Route::get('/shop','FsortByController@shop_content')->name('shop');
Route::get('/product-category/{id}','FsortByController@product_by_category')->name('product-category');
Route::get('/product-sub-category/{id}','FsortByController@product_by_sub_category')->name('product-sub-category');
Route::get('/product-manufacturer/{id}','FsortByController@product_by_manufacturer')->name('product-manufacturer');
Route::get('/product-model/{id}','FsortByController@product_by_model')->name('product-model');
Route::get('/search','FsortByController@search')->name('search');
Route::get('/search-by-category','FsortByController@advance_search')->name('advance-search');
Route::get('/product-sorting','FsortByController@product_sorting')->name('product-sorting');
Route::get('/product-sorting-item','FsortByController@product_sorting_item')->name('product-sorting-item');
Route::get('/product-by-category','FsortByController@product_by_cat')->name('product-by-category');

//Product sortBy Route End

//Cart Route Start
Route::POST('add-to-cart','CartController@add_to_cart')->name('add-to-cart');
Route::get('/cart','CartController@view_cart')->name('cart');
Route::get('/remove-cart-item/{id}','CartController@remove_cart_item')->name('remove-cart-item');
Route::POST('/update-cart','CartController@update_cart')->name('update-cart');
Route::get('/checkout', function () {
    return "Checkout page";
})->name('checkout');

//Cart Route End


//==========================Front End ==========================//

// Seller Panel Route
Route::GET('seller/home','SellerController@index');
Route::GET('seller/editor','EditorController@index');
Route::GET('seller/test','EditorController@test');
Route::GET('seller','Seller\LoginController@showLoginForm')->name('seller.login');
Route::POST('seller','Seller\LoginController@login');

Route::get('seller-regi', 'Seller\RegisterController@showRegPage');
Route::POST('seller-reg-post','Seller\RegisterController@register')->name('sellerReg');

Route::POST('seller-password/email','Seller\ForgotPasswordController@sendResetLinkEmail')->name('seller.password.email');
Route::GET('seller-password/reset','Seller\ForgotPasswordController@showLinkRequestForm')->name('seller.password.request');
Route::POST('seller-password/reset','Seller\ResetPasswordController@reset');
Route::GET('seller-password/reset/{token}','Seller\ResetPasswordController@showResetForm')->name('seller.password.reset');
//End Seller Panel Route







//==========================BackEnd Start ==========================//
// Admin Panel Route
Route::GET('admin/home','AdminController@index');
Route::GET('admin/editor','EditorController@index');
Route::GET('admin/test','EditorController@test');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');

Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//End Admin Panel Route


//category Route Start
Route::get('add-category','CategoryController@add_category')->name('add-category');
Route::post('save-category','CategoryController@save_category')->name('save-category');
Route::get('category-list','CategoryController@category_list')->name('category-list');
Route::get('delete-category/{id}','CategoryController@category_delete')->name('delete-category');
Route::get('edit-category/{id}','CategoryController@category_edit')->name('edit-category');
Route::post('update-category','CategoryController@category_update')->name('update-category');
//category Route End

//Manufacter Route Start
Route::get('add-manufacturer','ManufacturerController@add_manufacturer')->name('add-manufacturer');
Route::post('save-manufacturer','ManufacturerController@save_manufacturer')->name('save-manufacturer');
Route::get('manufacturer-list','ManufacturerController@manufacturer_list')->name('manufacturer-list');
Route::get('delete-manufacturer/{id}','ManufacturerController@manufacturer_delete')->name('delete-manufacturer');
Route::get('edit-manufacturer/{id}','ManufacturerController@manufacturer_edit')->name('edit-manufacturer');
Route::post('update-manufacturer','ManufacturerController@manufacturer_update')->name('update-manufacturer');
//manufacter Route End

//category Route Start
Route::get('add-sub-category','SubCategoryController@add_category')->name('add-sub-category');
Route::post('save-sub-category','SubCategoryController@save_category')->name('save-sub-category');
Route::get('sub-category-list','SubCategoryController@category_list')->name('sub-category-list');
Route::get('delete-sub-category/{id}','SubCategoryController@category_delete')->name('delete-sub-category');
Route::get('edit-sub-category/{id}','SubCategoryController@category_edit')->name('edit-sub-category');
Route::post('update-sub-category','SubCategoryController@category_update')->name('update-sub-category');
//category Route End

//Product Model Route Start
Route::get('add-model','ProductModelController@add_model')->name('add-model');
Route::post('save-model','ProductModelController@save_model')->name('save-model');
Route::get('model-list','ProductModelController@model_list')->name('model-list');
Route::get('delete-model/{id}','ProductModelController@model_delete')->name('delete-model');
Route::get('edit-model/{id}','ProductModelController@model_edit')->name('edit-model');
Route::post('update-model','ProductModelController@model_update')->name('update-model');
//Product Model Route End

//Product  Route Start
Route::get('add-product','ProductController@add_product')->name('add-product');
Route::post('save-product','ProductController@save_product')->name('save-product');
Route::get('product-list','ProductController@product_list')->name('product-list');
Route::get('product-view/{id}','ProductController@product_view')->name('product-view');
Route::get('delete-product/{id}','ProductController@product_delete')->name('delete-product');
Route::get('edit-product/{id}','ProductController@product_edit')->name('edit-product');
Route::post('update-product','ProductController@product_update')->name('update-product');
//Product  Route End



//==========================BackEnd End ==========================//
