<?php

use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ArticleDetailController;
use App\Http\Controllers\Frontend\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ProductDetailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Frontend\ShoppingCartController;
use App\Http\Controllers\Frontend\BlogMenuController;
use App\Http\Controllers\Frontend\PaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
   // Route frontend
  Route::group(['namespace'=>'Auth','prefix'=>'account'], function(){
        Route::get('register', [RegisterController::class, 'getFormRegister'])->name('get.register');
        Route::post('register', [RegisterController::class, 'postRegister']);

        Route::get('login', [LoginController::class, 'getFormLogin'])->name('get.login');
        Route::post('login', [LoginController::class, 'postLogin']);
        Route::post('logout', [LoginController::class, 'getLogout'])->name('get.logout');
       
        Route::get('reset-password', [ResetPasswordController::class, 'getEmailReset'])->name('get.email_reset_password');
        Route::post('reset-password', [ResetPasswordController::class, 'checkEmailResetPassword']);
        Route::get('new-password', [ResetPasswordController::class, 'newPassword'])->name('get.new_password');
        Route::post('new-password', [ResetPasswordController::class, 'savePassword']);


  });
  Route::group(['namespace'=>'Frontend'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('get.home');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('san-pham', [ProductController::class, 'index'])->name('get.product.list');
    Route::get('dan-muc/{slug}',  [CategoryController::class, 'index'])->name('get.category.list');
    Route::get('san-pham/{slug}', [ProductDetailController::class, 'getProductDetail'])->name('get.product.detail');
    Route::get('san-pham/{slug}/danh-gia', [ProductDetailController::class, 'getListRatingProduct'])->name('get.product.rating_list');

    //Route Blog
    Route::get('bai-viet', [BlogController::class, 'index'])->name('get.blog.home');
    Route::get('menu/{slug}', [BlogMenuController::class, 'getArticleByMenu'])->name('get.article.by_menu');

    Route::get('bai-viet/{slug}', [ArticleDetailController::class, 'index'])->name('get.blog.detail');

    //Giỏ hàng
    Route::get('don-hang', [ShoppingCartController::class, 'index'])->name('get.shopping.list');

    Route::prefix('shopping')->group(function () {
      Route::get('add/{id}', [ShoppingCartController::class, 'add'])->name('get.shopping.add');
      Route::get('delete/{id}', [ShoppingCartController::class, 'delete'])->name('get.shopping.delete');
      Route::get('update/{id}', [ShoppingCartController::class, 'update'])->name('ajax_get.shopping.update');

      Route::post('pay', [ShoppingCartController::class, 'postPay'])->name('post.shopping.pay');

      //thanh toán online
   
  });
  //  //Thanh toán vnpay
  //   Route::get('/payment/vnpay', [PaymentController::class, 'vnpay_Payment'])->name('payment.vnpay');
  //   // Route::get('/payment/vnpay/return', [PaymentController::class, 'vnpayReturn'])->name('payment.vnpay.return');
  });
  
include('route_admin.php');
include('route_user.php');

// Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('get.home');
