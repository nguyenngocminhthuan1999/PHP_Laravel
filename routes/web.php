<?php

use Illuminate\Support\Facades\Route;
// use -> admin
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\editProfileController;
use App\Http\Controllers\admin\bridgesListController;
use App\Http\Controllers\admin\accountManageController;
use App\Http\Controllers\admin\editContentController;
use App\Http\Controllers\admin\editAccInfoController;
use App\Http\Controllers\admin\addNewsController;
use App\Http\Controllers\admin\signUpController;
use App\Http\Controllers\admin\loginController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\countryController;
// use -> User
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ProfileController;
// use -> home
use App\Http\Controllers\content\ContentController;
use App\Http\Controllers\destination\destinationController;
use App\Http\Controllers\home\homeController;

// Route -> admin
Route::group([], function () {
    Route::get('/admin-portal', [adminController::class, 'dashboard']);
    Route::group(['namespace' => 'admin', 'prefix' => 'admin-portal'], function () {
        Route::group([], function () {
            Route::get('/login', [adminController::class, 'login']);
            Route::get('/sign-up', [adminController::class, 'register']);
            Route::get('/logout', [adminController::class, 'logout']);
        });

        Route::group(['prefix' => '/sign-up'], function () {
            Route::post('/confirm', [signUpController::class, 'register']);
        });

        Route::group(['prefix' => '/login'], function () {
            Route::post('/confirm', [loginController::class, 'login']);
        });

        Route::group([], function () {
            Route::get('/edit-profile', [editProfileController::class, 'home']);
            Route::group(['prefix' => '/edit-profile'], function () {
                Route::post('/information', [editProfileController::class, 'information']);
                Route::post('/password', [editProfileController::class, 'password']);
            });

            Route::get('/account-management', [accountManageController::class, 'home']);
            Route::group(['prefix' => '/account-management'], function () {
                Route::get('/edit-acc-info/{username_acc}', [editAccInfoController::class, 'home']);
                Route::group(['prefix' => '/edit-acc-info'], function () {
                    Route::get('/information/{username_acc}', [editAccInfoController::class, 'information']);
                    Route::get('/password/{username_acc}', [editAccInfoController::class, 'password']);
                });
                Route::get('/delete-acc/{username_acc}', [accountManageController::class, 'delete']);
            });

            Route::get('/bridges-list', [bridgesListController::class, 'home']);
            Route::group(['prefix' => '/bridges-list'], function () {
                Route::get('/edit/{id}', [editContentController::class, 'edit']);
                Route::group(['prefix' => '/edit'], function () {
                    Route::post('/save/{id}', [editContentController::class, 'save']);
                    Route::get('/delete-img/{id}', [editContentController::class, 'delete']);
                    Route::get('/delete-bus/{id}', [editContentController::class, 'delete_bus']);
                    Route::get('/delete-plane/{id}', [editContentController::class, 'delete_plane']);
                    Route::get('/delete-comment/{id}', [editContentController::class, 'delete_comment']);
                });
                Route::get('/delete/{id}', [bridgesListController::class, 'delete']);
            });

            Route::get('/add-news', [addNewsController::class, 'home']);
            Route::group(['prefix' => '/add-news'], function () {
                Route::post('/create', [addNewsController::class, 'create']);
            });

            Route::get('/country', [countryController::class, 'home']);
            Route::group(['prefix' => '/country'], function () {
                Route::post('/add', [countryController::class, 'add']);
                Route::get('/delete/{id}', [countryController::class, 'delete']);
            });

            Route::get('/category', [categoryController::class, 'home']);
            Route::group(['prefix' => '/category'], function () {
                Route::post('/add', [categoryController::class, 'add']);
                Route::get('/delete/{id}', [categoryController::class, 'delete']);
            });
        });
    });
});



// Route -> user
Route::prefix('user')->group(function () {
    Route::get('/home', [UserController::class, 'home'])->name('user.home');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    // Route::get('/login', [UserController::class, 'showLoginForm'])->name('user.login');
    Route::get('/login', [UserController::class, 'home']);
    Route::post('/login/confirm', [UserController::class, 'login']);
    Route::get('/logout', [UserController::class, 'logout']);
    // Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('user.register');
    Route::post('/register', [UserController::class, 'register']);
    Route::get('/changepassword', [UserController::class, 'showChangePasswordForm'])->name('user.changepassword');
    Route::post('/changepassword', [UserController::class, 'changePassword'])->name('user.changepassword.submit'); // Thêm tên route mới ở đây
});

Route::get('/account/index', [ProfileController::class, 'index'])->name('account.index');
Route::post('/account/store', [ProfileController::class, 'store'])->name('account.store');

// Route -> home
Route::group([], function () {
    Route::get('/', [homeController::class, 'home']);
    Route::post('/contact', [homeController::class, 'contact']);
    Route::get('/home', [homeController::class, 'image']);
});

Route::group([ 'namespace'=>'content', 'prefix' => 'content'], function(){
    // Route::get('/',[contentController::class, 'home']);
    Route::get('/information/{id}',[ContentController::class, 'information']);
    Route::group([ 'namespace'=>'information', 'prefix' => 'information'], function(){
        Route::post('/save/{id}', [ContentController::class, 'save_comment']);
        
    });
    
    
});
Route::group([ 'namespace'=>'destination', 'prefix' => 'destination'], function(){
    // Route::get('/',[contentController::class, 'home']);
    Route::get('/bridges',[destinationController::class, 'bridges']);
    Route::get('/compare',[destinationController::class, 'compare']);
  
});

Route::get('/category/{category}',[ContentController::class, 'category']);