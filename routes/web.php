<?php


//==========================Front Start ==========================//
Route::get('/', function () {
    return view('frontend.front_view.main_page.index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Product sortBy Route start
Route::get('/shop','FSortByController@shop_content')->name('shop');
Route::get('/product-category/{id}','FSortByController@product_by_category')->name('product-category');
Route::get('/product-sub-category/{id}','FSortByController@product_by_sub_category')->name('product-sub-category');
Route::get('/product-manufacturer/{id}','FSortByController@product_by_manufacturer')->name('product-manufacturer');
Route::get('/product-model/{id}','FSortByController@product_by_model')->name('product-model');
Route::get('/search','FSortByController@search')->name('search');
Route::get('/search-by-category','FSortByController@advance_search')->name('advance-search');
Route::get('/product-sorting','FSortByController@product_sorting')->name('product-sorting');
Route::get('/product-sorting-item','FSortByController@product_sorting_item')->name('product-sorting-item');
Route::get('/product-by-category','FSortByController@product_by_cat')->name('product-by-category');
Route::get('/product-details/{id}','FSortByController@product_details')->name('product-single');
//Product sortBy Route End

//Cart Route Start
Route::POST('add-to-cart','CartController@add_to_cart')->name('add-to-cart');
Route::GET('accessories-add-to-cart/{id}','CartController@acc_add_to_cart')->name('accessories-add-to-cart');
Route::get('/cart','CartController@view_cart')->name('cart');
Route::get('/remove-cart-item/{id}','CartController@remove_cart_item')->name('remove-cart-item');
Route::POST('/update-cart','CartController@update_cart')->name('update-cart');

//Cart Route End

//Compare Route Start
Route::get('/compare','CompareController@compare')->name('compare');
Route::POST('add-to-compare','CompareController@add_to_compare')->name('add-to-compare');
Route::get('/remove-compare-item/{id}','CompareController@remove_compare_item')->name('remove-compare-item');
Route::get('/login-register','CartController@login_register')->name('login-register');

//Compare Route End
//Wishlist Route Start
Route::get('/wishlist','WishlistController@my_wishlish')->name('wishlist');
Route::GET('add-to-wishlist/{id}','WishlistController@add_to_wishlist')->name('add-to-wishlist');
Route::GET('remove-wishlist-item/{id}','WishlistController@remove_wishlist_item')->name('remove-wishlist-item');

//Wishlist Route End

//Checkout Controller Start
Route::get('/checkout','CheckoutController@checkout')->name('checkout');
Route::get('/shipping','CheckoutController@shipping')->name('shipping');
Route::get('/billing','CheckoutController@billing')->name('billing');
Route::post('/save-billing','CheckoutController@save_billing')->name('save-billing');
Route::post('/save-shipping','CheckoutController@save_shipping')->name('save-shipping');
Route::POST('/place-order','CheckoutController@place_order')->name('place-order');
Route::get('/order-complete','CheckoutController@order_complete')->name('order-complete');

//Checkout Controller End

//Customer Review Start
Route::POST('/write-customer-review','CustomerReviewController@write_customer_review')->name('write-customer-review');
//Customer Review End


//==========================Front End ==========================//
//CustomUserController route start
//Custom Authenticatation
Route::post('/store-user', 'CustomUserController@storeUser')->name('storeUser');
Route::get('customer-login', function(){
    return view('frontend.loginregister.login_register');
})->name('custLog');
Route::get('customer-orders/{id}','CustomUserController@customer_orders')->name('customer-orders');
Route::get('customer-report/{id}','CustomUserController@customer_report')->name('customer-report');
Route::get('customer-accounting/{id}','CustomUserController@customer_accounting')->name('customer-accounting');
Route::get('customer-wallet/{id}','CustomUserController@customer_wallet')->name('customer-wallet');
Route::get('customer-payment/{id}','CustomUserController@customer_payment')->name('customer-payment');
Route::get('customer-research/{id}','CustomUserController@customer_research')->name('customer-research');
Route::get('view-each-order/{id}','CustomUserController@view_each_order')->name('view-each-order');

//CustomUserController route end


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

Route::get('my-account/{id}','MyAccountController@my_account')->name('my-account');







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

//order Route Start
Route::get('/manage-order','OrderController@manage_order')->name('manage-order');
Route::get('/order-status/{id}','OrderController@order_status');
Route::get('/order-delete/{id}','OrderController@order_delete');
Route::get('/view-order/{id}','OrderController@view_order')->name('view-order');
Route::get('/download-pdf/{id}','OrderController@download_pdf');
//order Route Start

//Vendor Route Start

Route::get('/add-vendor', 'AdminAddSellerController@addVendor')->name('addVendor');
Route::post('/store-vendor', 'AdminAddSellerController@storeVendor')->name('storeVendor');
Route::get('/vendor-list', 'AdminAddSellerController@vendorList')->name('vendorList');
Route::get('/vendor-blocked-list', 'AdminAddSellerController@vendorBlockedList')->name('vendorBlockedList');
Route::get('/edit-vendor/{id}', 'AdminAddSellerController@editVendor')->name('editVendor');
Route::post('/update-vendor/{id}', 'AdminAddSellerController@updateVendor')->name('updateVendor');
Route::get('/delete-vendor/{id}', 'AdminAddSellerController@deleteVendor')->name('deleteVendor');
Route::get('/block-vendor/{id}', 'AdminAddSellerController@blockVendor')->name('blockVendor');
Route::get('/unblock-vendor/{id}', 'AdminAddSellerController@unblockVendor')->name('unblockVendor');
//Vendor Route End

//Home featured By Vendor
Route::get('/add-home-advert', 'AdvertController@addHomeAdvert')->name('addHomeAdvert');
Route::post('/select-pro', ['as'=>'select-pro','uses'=>'AdvertController@selectPro']);
Route::post('/post-home-advert', 'AdvertController@storeAdvert')->name('storeAdvert');
Route::get('/home-advert-list', 'AdvertController@adrvertList')->name('adrvertList');
Route::get('/edit-advert/{id}', 'AdvertController@editAdvert')->name('editAdvert');
Route::post('/update-advert/{id}', 'AdvertController@updateAdvert')->name('updateAdvert');
Route::get('/delete-advert/{id}', 'AdvertController@deleteAdvert')->name('deleteAdvert');

//End Home featured By Vendor


//==========================BackEnd End ==========================//
//==========================Vendor Start ==========================//
Route::get('/vendors', function(){
  return view('seller.seller_master');
});
Route::get('/seller/add-product', 'SellerProductController@index')->name('add-product');
Route::post('/seller/post-product', 'SellerProductController@postSellerProduct')->name('postSellerProduct');
Route::get('/seller/product-list', 'SellerProductController@productList')->name('productList');
Route::get('/seller/edit-product/{id}', 'SellerProductController@editProduct')->name('editProduct');
Route::get('/seller/delete-product/{id}', 'SellerProductController@deleteProduct')->name('deleteProduct');
