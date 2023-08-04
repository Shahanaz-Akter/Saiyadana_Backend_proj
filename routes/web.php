<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

// saiyadana_Signup Ui

Route::controller(App\Http\Controllers\Otp\OtpController::class)->group(function () {
    Route::get('/', 'signUp')->name('signup');
    Route::post('/sendOtp', 'sendOtp')->name('sendOtp');
    Route::get('/otp/{id}', 'Otp')->name('otp');
    Route::post('/post_otp', 'post_Otp')->name('post_otp');
    Route::get('/tob/{id}', 'tob')->name('tob');
    Route::post('/post_tob/{id}', 'post_tob')->name('post_tob');
    Route::get('/location/{id}', 'location')->name('location');
    Route::post('/post_location/{id}', 'post_location')->name('post_location');
    Route::get('/pin/{id}', 'pin')->name('pin');
    Route::post('/post_pin/{id}', 'post_pin')->name('post_pin');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/login', 'login')->name('login');
    Route::post('/post_login', 'post_login')->name('post_login');

    Route::get('/forgotten_password', 'forgotten_password')->name('forgotten_password');
    Route::post('/post_forgotten_password', 'post_forgotten_password')->name('post_forgotten_password');
    Route::get('/further_otp/{id}', 'further_otp')->name('further_otp');
    Route::post('/post_further_otp', 'post_further_otp')->name('post_further_otp');

    Route::get('/reset_pin/{id}', 'reset_pin')->name('reset_pin');
    Route::post('/post_resetpin/{id}', 'post_resetpin')->name('post_resetpin');

    Route::get('/resend/{id}', 'resend')->name('resend');
    Route::post('/post_resend', 'post_resend')->name('post_resend');
    Route::get('/logout', 'logout')->name('logout');
});


// Product controller
Route::controller(App\Http\Controllers\ProductController::class)->group(function () {
    Route::get('/post_super_category', 'post_super_category')->name('post_super_category');
    Route::get('/ecommerce_dashboard', 'ecommerce_dashboard')->name('ecommerce_dashboard');
    Route::post('/post_super_category', 'post_super_category')->name('post_super_category');
    Route::post('/post_sub_category', 'post_sub_category')->name('post_sub_category');
});

// start different shop
Route::get('/ecommerce_shop', function () {
    return view('Userview.ecommerce_shop');
});
Route::get('/appliances_shop', function () {
    return view('Userview.appliances_shop');
});
Route::get('/beauty_and-toys_shop', function () {
    return view('Userview.beauty_and-toys_shop');
});

Route::get('/clothes_shop', function () {
    return view('Userview.clothes_shop');
});

Route::get('/electronics_shop', function () {
    return view('Userview.electronics_shop');
});
Route::get('/fashion_shop', function () {
    return view('Userview.fashion_shop');
});
Route::get('/groceries_shop', function () {
    return view('Userview.groceries_shop');
});
Route::get('/mobiles_shop', function () {
    return view('Userview.mobiles_shop');
});
Route::get('/shoes_shop', function () {
    return view('Userview.shoes_shop');
});
Route::get('/top_offers_shop', function () {
    return view('Userview.top_offers_shop');
});
Route::get('/two_wheels_shop', function () {
    return view('Userview.two_wheels_shop');
});
// end different  shop


// start dashboard url
Route::get('/admin_dashboard', function () {
    return view('Adminview.Super_admin.admin_dashboard');
});

// Route::get('/ecommerce_dashboard', function () {
//     return view('Adminview.Inventory.Ecommerce.master_branch');
// });

Route::get('/electronics_dashboard', function () {
    return view('Adminview.Inventory.Electronics.master_branch');
});

Route::get('/appliances_dashboard', function () {
    return view('Adminview.Inventory.Appliances.master_branch');
});

Route::get('/beauty_and_toys_dashboard', function () {
    return view('Adminview.Inventory.Beauty_and_toys.master_branch');
});

Route::get('/clothes_dashboard', function () {
    return view('Adminview.Inventory.Clothes.master_branch');
});

Route::get('/fashion_dashboard', function () {
    return view('Adminview.Inventory.Fashion.master_branch');
});
Route::get('/groceries_dashboard', function () {
    return view('Adminview.Inventory.Groceries.master_branch');
});
Route::get('/mobiles_dashboard', function () {
    return view('Adminview.Inventory.Mobiless.master_branch');
});
Route::get('/shoes_dashboard', function () {
    return view('Adminview.Inventory.Shoes.master_branch');
});

Route::get('/top_offers_dashboard', function () {
    return view('Adminview.Inventory.Top_offers.master_branch');
});

Route::get('/two_wheel_dashboard', function () {
    return view('Adminview.Inventory.Two_wheels.master_branch');
});

// end dashboard url

Route::get('/add_super_parent_category', function () {
    return view('Adminview.Inventory.Ecommerce.add_super_parent_category');
});

Route::get('/add_sub_category', function () {
    return view('Adminview.Inventory.Ecommerce.add_sub_category');
});

Route::get('/show_all', function () {
    return view('Adminview.Inventory.Ecommerce.dashboard_content');
});




Route::get('/index', function () {
    return view('Userview.index');
});

Route::get('/blog-1', function () {
    return view('Userview.blog-1');
});

Route::get('/index', function () {
    return view('Userview.index');
});

Route::get('/products-without-sidebar', function () {
    return view('Userview.products-without-sidebar');
});
Route::get('/blog-1', function () {
    return view('Userview.blog-1');
});
Route::get('/about', function () {
    return view('Userview.about');
});

Route::get('/faqs', function () {
    return view('Userview.faqs');
});

Route::get('/contact', function () {
    return view('Userview.contact');
});





// Route::controller(App\Http\Controllers\Admin\AdminController::class)->group(function () {

//     // Route::get('/index', 'index')->name('index');

//     Route::get('/signup', 'signup')->name('signup');
//     Route::get('/login', 'login')->name('login');

//     Route::get('/dashboard', 'dashboard')->name('dashboard');

//     Route::get('/about', 'about')->name('about');


//     // Route::get('/index2', 'index2')->name('index2');


//     Route::get('/blog1', 'blog11')->name('blog11');


//     Route::get('/cart', 'cart')->name('cart');


//     Route::get('/faqs', 'faqs')->name('faqs');


//     Route::get('/product_list', 'product_list')->name('product_list');

//     Route::get('/products_left_sidebar', 'products_left_sidebar')->name('products_left_sidebar');



//     Route::get('/products_left_sidebar_with_categories', 'products_left_sidebar_with_categories')->name('products_left_sidebar_with_categories');


//     Route::get('/products_without_sidebar', 'products_without_sidebar')->name('products_without_sidebar');


//     Route::get('/logout', 'logout')->name('logout');
// });
