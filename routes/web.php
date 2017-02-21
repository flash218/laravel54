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

// 测试命令：php artisan route:list

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('welcome');
})->name('dashboard');*/

/*Route::name('dashboard')->get('/', function () {
    return view('welcome');
});*/

/*Route::prefix('admin')->name('dashboard')->get('/', function () {
    return view('welcome');
});*/

Route::prefix('admin')->middleware('admin')->name('dashboard')->get('/', function () {
    return view('welcome');
});