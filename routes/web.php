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

/*Start admin routes*/
Route::get('/admin/login', 'Admin\AdminLoginController@index')->name('admin.login');
Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
/*End admin routes*/

Route::get('/', 'HomeController@index')->name('home.page');
