<?php
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserInfoController;
use App\Http\Controllers\User\UserTransactionController;
use App\Http\Controllers\User\UserFavouriteController;
use App\Http\Controllers\User\UserRatingController;

use Illuminate\Support\Facades\Route;
Route::prefix('account')->middleware('check_user_login')->group(function () {
    Route::get('/', [UserDashboardController::class, 'dashboard'])->name('get.user.dashboard');
    
    Route::get('update-info', [UserInfoController::class, 'updateInfo'])->name('get.user.update_info');
    Route::post('update-info', [UserInfoController::class, 'saveUpdateInfo']);

    Route::get('transaction', [UserTransactionController::class, 'index'])->name('get.user.transaction');
    Route::get('favourite', [UserFavouriteController::class, 'index'])->name('get.user.favourite');

    Route::post('ajax-favourite/{idProduct}', [UserFavouriteController::class, 'addFavourite'])->name('ajax_get.user.add_favourite');

    Route::post('ajax-rating', [UserRatingController::class, 'addRatingProduct'])->name('ajax_post.user.rating.add');

    
});

