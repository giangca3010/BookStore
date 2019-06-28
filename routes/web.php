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

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::get('/AllBook', function () {
    return view('admin.AllBook');
});
Route::get('/createBook', function () {
    return view('admin.createBook');
});
Route::get('/editBook', function () {
    return view('admin.editBook');
});
Route::get('/yeucau_user', function () {
    return view('admin.yeucau_user');
});
