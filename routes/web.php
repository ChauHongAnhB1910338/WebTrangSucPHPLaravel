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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/trangchu', 'App\Http\Controllers\HomeController@index');
Route::get('/san-pham', 'App\Http\Controllers\HomeController@san_pham');
Route::get('/don-hang/{customer_id}', 'App\Http\Controllers\HomeController@don_hang');
Route::post('/tim-kiem', 'App\Http\Controllers\HomeController@search');
Route::get('/view-order-customer/{order_code}', 'App\Http\Controllers\HomeController@view_order_customer');
//Trang chu
    // Category product
    Route::get('/danh-muc-san-pham/{category_id}', 'App\Http\Controllers\CategoryProduct@show_category_home');
    Route::get('/thuong-hieu-san-pham/{brand_id}', 'App\Http\Controllers\BrandProduct@show_brand_home');
    Route::get('/chi-tiet-san-pham/{product_id}', 'App\Http\Controllers\ProductController@details_product');

//Admin
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::post('/filter-by-date', 'App\Http\Controllers\AdminController@filter_by_date');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');
Route::post('/dashboard-filter', 'App\Http\Controllers\AdminController@dashboard_filter');

    // Category product
    Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product');
    Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product');
    Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product');
    Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product');

    Route::get('/active-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@active_category_product');
    Route::get('/unactive-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@unactive_category_product');

    Route::post('/save-category-product', 'App\Http\Controllers\CategoryProduct@save_category_product');
    Route::post('/update-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@update_category_product');
    // Brand product
    Route::get('/all-brand-product', 'App\Http\Controllers\BrandProduct@all_brand_product');
    Route::get('/add-brand-product', 'App\Http\Controllers\BrandProduct@add_brand_product');
    Route::get('/edit-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@edit_brand_product');
    Route::get('/delete-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@delete_brand_product');

    Route::get('/active-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@active_brand_product');
    Route::get('/unactive-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@unactive_brand_product');

    Route::post('/save-brand-product', 'App\Http\Controllers\BrandProduct@save_brand_product');
    Route::post('/update-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@update_brand_product');
    // Product
    Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product');
    Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product');
    Route::get('/edit-product/{product_id}', 'App\Http\Controllers\ProductController@edit_product');
    Route::get('/delete-product/{product_id}', 'App\Http\Controllers\ProductController@delete_product');

    Route::get('/active-product/{product_id}', 'App\Http\Controllers\ProductController@active_product');
    Route::get('/unactive-product/{product_id}', 'App\Http\Controllers\ProductController@unactive_product');

    Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
    Route::post('/update-product/{product_id}', 'App\Http\Controllers\ProductController@update_product');
//Card
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart');
Route::post('/update-cart-quantity', 'App\Http\Controllers\CartController@update_cart_quantity');
Route::post('/update-cart', 'App\Http\Controllers\CartController@update_cart');
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'App\Http\Controllers\CartController@delete_to_cart');
Route::post('/add-cart-ajax', 'App\Http\Controllers\CartController@add_cart_ajax');
Route::get('/gio-hang', 'App\Http\Controllers\CartController@gio_hang');
Route::get('/del-product/{session_id}', 'App\Http\Controllers\CartController@del_product');
Route::get('/del-all-product', 'App\Http\Controllers\CartController@del_all_product');

//Coupon
Route::post('/check-coupon', 'App\Http\Controllers\CartController@check_coupon');
//coupon admin
Route::get('/insert-coupon', 'App\Http\Controllers\CouponController@insert_coupon');
Route::get('/list-coupon', 'App\Http\Controllers\CouponController@list_coupon');
Route::get('/delete-coupon/{coupon_id}', 'App\Http\Controllers\CouponController@delete_coupon');
Route::post('/insert-coupon-code', 'App\Http\Controllers\CouponController@insert_coupon_code');
Route::get('/unset-coupon', 'App\Http\Controllers\CouponController@unset_coupon');

//Check out
Route::get('/login-checkout', 'App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/logout-checkout', 'App\Http\Controllers\CheckoutController@logout_checkout');
Route::post('/login-customer', 'App\Http\Controllers\CheckoutController@login_customer');
Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer');
Route::post('/order-place', 'App\Http\Controllers\CheckoutController@order_place');
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@checkout');
Route::get('/payment', 'App\Http\Controllers\CheckoutController@payment');
Route::post('/save-checkout-customer', 'App\Http\Controllers\CheckoutController@save_checkout_customer');
Route::post('/confirm-order', 'App\Http\Controllers\CheckoutController@confirm_order');
//Order
Route::get('/manage-order', 'App\Http\Controllers\OrderController@manage_order');
// Route::get('/manage-order', 'App\Http\Controllers\CheckoutController@manage_order');
Route::get('/view-order/{order_code}', 'App\Http\Controllers\OrderController@view_order');
Route::post('/update-order-qty', 'App\Http\Controllers\OrderController@update_order_qty');
Route::post('/update-qty', 'App\Http\Controllers\OrderController@update_qty');