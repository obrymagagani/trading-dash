<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;

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


/**
     * transaction routes
     */

    Route::get('transactions', [TransactionController::class,'index']);
    Route::get('transactions/create', [TransactionController::class,'create']);
    Route::post('transactions', [TransactionController::class,'store']);
    Route::get('transactions/{id}', [TransactionController::class,'show']);
    Route::get('transactions/edit/{id}', [TransactionController::class,'edit']);
    Route::put('transactions/{id}', [TransactionController::class,'update']);
    Route::delete('transactions/{id}', [TransactionController::class,'destroy']);

    /**
     * users routes
     */
    Route::get('users', [UserController::class,'index']);
    Route::get('users/create', [UserController::class,'create']);
    Route::post('users/add', [UserController::class,'store']);
    Route::get('users/{id}', [UserController::class,'show']);
    Route::get('users/edit/{id}', [UserController::class,'edit']);
    Route::put('users/{id}', [UserController::class,'update']);
    Route::delete('users/{id}', [UserController::class,'destroy']);
    Route::resource('users', UserController::class);



Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('auth.login');
    Route::get( '/', 'HomeController@home')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

