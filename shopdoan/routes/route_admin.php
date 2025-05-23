<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminKeywordController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminAttributeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminTransactionController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminRatingController;
use App\Http\Controllers\Admin\AdminStatisticalController;
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
Route::prefix('admin-auth')->group(function () {
    Route::get('login', [AdminLoginController::class, 'getLoginAdmin'])->name('get.login.admin');
    Route::post('login', [AdminLoginController::class, 'postLoginAdmin']);
    Route::get('logout', [AdminLoginController::class, 'getLogoutAdmin'])->name('get.logout.admin');

});
// Route::group(['prefix' => 'laravel-filemanager'], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
Route::prefix('laravel-filemanager')->middleware('check_admin_login')->group(function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::prefix('api-admin')->middleware('check_admin_login')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('admin.home');

    //Thống kê
    Route::get('/statistical', [AdminStatisticalController::class, 'index'])->name('admin.statistical');

    
    // Route danh mục sản phẩm
    Route::prefix('category')->group(function () {
        Route::get('/index', [AdminCategoryController::class, 'index'])->name('admin.category.index');
       
        Route::get('/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/create', [AdminCategoryController::class, 'store']);

        Route::get('/update/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.update');
        Route::post('/update/{id}', [AdminCategoryController::class, 'update']);
        
        Route::get('/active/{id}', [AdminCategoryController::class, 'active'])->name('admin.category.active');
        Route::get('/hot{id}', [AdminCategoryController::class, 'hot'])->name('admin.category.hot');
        Route::get('/delete/{id}', [AdminCategoryController::class, 'delete'])->name('admin.category.delete');

    });
    // Route Keyword
    Route::prefix('keyword')->group(function () {
        Route::get('/index', [AdminKeywordController::class, 'index'])->name('admin.keyword.index');
       
        Route::get('/create', [AdminKeywordController::class, 'create'])->name('admin.keyword.create');
        Route::post('/create', [AdminKeywordController::class, 'store']);

        Route::get('/update/{id}', [AdminKeywordController::class, 'edit'])->name('admin.keyword.update');
        Route::post('/update/{id}', [AdminKeywordController::class, 'update']);
        
        Route::get('/hot{id}', [AdminKeywordController::class, 'hot'])->name('admin.keyword.hot');
        Route::get('/delete/{id}', [AdminKeywordController::class, 'delete'])->name('admin.keyword.delete');

    });
    // Route thuộc tính
   
    Route::prefix('attribute')->group(function () {
        Route::get('/index', [AdminAttributeController::class, 'index'])->name('admin.attribute.index');
       
        Route::get('/create', [AdminAttributeController::class, 'create'])->name('admin.attribute.create');
        Route::post('/create', [AdminAttributeController::class, 'store']);

        Route::get('/update/{id}', [AdminAttributeController::class, 'edit'])->name('admin.attribute.update');
        Route::post('/update/{id}', [AdminAttributeController::class, 'update']);
        
        // Route::get('/hot{id}', [AdminAttributeController::class, 'hot'])->name('admin.attribute.hot');
        Route::get('/delete/{id}', [AdminAttributeController::class, 'delete'])->name('admin.attribute.delete');

    });
    //Route Product

    Route::prefix('product')->group(function () {
       
        Route::get('/index', [AdminProductController::class, 'index'])->name('admin.product.index');
       
        Route::get('/create', [AdminProductController::class, 'create'])->name('admin.product.create');
        Route::post('/create', [AdminProductController::class, 'store']);

        Route::get('/update/{id}', [AdminProductController::class, 'edit'])->name('admin.product.update');
        Route::post('/update/{id}', [AdminProductController::class, 'update']);
        
        Route::get('/hot{id}', [AdminProductController::class, 'hot'])->name('admin.product.hot');
        Route::get('/active/{id}', [AdminProductController::class, 'active'])->name('admin.product.active');
        Route::get('/delete/{id}', [AdminProductController::class, 'delete'])->name('admin.product.delete');

    });
    //Rating
    Route::prefix('rating')->group(function () {
        Route::get('/index', [AdminRatingController::class, 'index'])->name('admin.rating.index');
        Route::get('/delete/{id}', [AdminRatingController::class, 'delete'])->name('admin.rating.delete');

    });
    //Route User
    Route::prefix('user')->group(function () {
        Route::get('/index', [AdminUserController::class, 'index'])->name('admin.user.index');
       

        Route::get('/update/{id}', [AdminUserController::class, 'edit'])->name('admin.user.update');
        Route::post('/update/{id}', [AdminUserController::class, 'update']);
        
        // Route::get('/hot{id}', [AdminAttributeController::class, 'hot'])->name('admin.attribute.hot');
        Route::get('/delete/{id}', [AdminUserController::class, 'delete'])->name('admin.user.delete');

    });
    //Route transaction
    Route::prefix('transaction')->group(function () {
        Route::get('/index', [AdminTransactionController::class, 'index'])->name('admin.transaction.index');
        Route::get('delete/{id}', [AdminTransactionController::class, 'delete'])->name('admin.transaction.delete');
        Route::get('order-delete/{id}', [AdminTransactionController::class, 'deleteOrderItem'])->name('ajax.admin.transaction.order_item');
        Route::get('view-transaction/{id}', [AdminTransactionController::class, 'getTransactionDetail'])->name('ajax.admin.transaction.detail');
        Route::get('action/{action}/{id}', [AdminTransactionController::class, 'getAction'])->name('admin.action.transaction');

    });
    //Route menu article
    Route::prefix('menu')->group(function () {
        Route::get('/index', [AdminMenuController::class, 'index'])->name('admin.menu.index');
       
        Route::get('/create', [AdminMenuController::class, 'create'])->name('admin.menu.create');
        Route::post('/create', [AdminMenuController::class, 'store']);

        Route::get('/update/{id}', [AdminMenuController::class, 'edit'])->name('admin.menu.update');
        Route::post('/update/{id}', [AdminMenuController::class, 'update']);
        
        Route::get('/active/{id}', [AdminMenuController::class, 'active'])->name('admin.menu.active');
        Route::get('/hot{id}', [AdminMenuController::class, 'hot'])->name('admin.menu.hot');
        Route::get('/delete/{id}', [AdminMenuController::class, 'delete'])->name('admin.menu.delete');

    });
    //Route article
    Route::prefix('article')->group(function () {
        Route::get('/index', [AdminArticleController::class, 'index'])->name('admin.article.index');
       
        Route::get('/create', [AdminArticleController::class, 'create'])->name('admin.article.create');
        Route::post('/create', [AdminArticleController::class, 'store']);

        Route::get('/update/{id}', [AdminArticleController::class, 'edit'])->name('admin.article.update');
        Route::post('/update/{id}', [AdminArticleController::class, 'update']);
        
        Route::get('/active/{id}', [AdminArticleController::class, 'active'])->name('admin.article.active');
        Route::get('/hot{id}', [AdminArticleController::class, 'hot'])->name('admin.article.hot');
        Route::get('/delete/{id}', [AdminArticleController::class, 'delete'])->name('admin.article.delete');

    });
        //Route slide
        Route::prefix('slide')->group(function () {
            Route::get('/index', [AdminSlideController::class, 'index'])->name('admin.slide.index');
           
            Route::get('/create', [AdminSlideController::class, 'create'])->name('admin.slide.create');
            Route::post('/create', [AdminSlideController::class, 'store']);
    
            Route::get('/update/{id}', [AdminSlideController::class, 'edit'])->name('admin.slide.update');
            Route::post('/update/{id}', [AdminSlideController::class, 'update']);
            
            Route::get('/active/{id}', [AdminSlideController::class, 'active'])->name('admin.slide.active');
            Route::get('/hot{id}', [AdminSlideController::class, 'hot'])->name('admin.slide.hot');
            Route::get('/delete/{id}', [AdminSlideController::class, 'delete'])->name('admin.slide.delete');
    
        });
 
});