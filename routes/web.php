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



//Route::get('/dashboard', function () {
//    return view('admin.dashboard');
//});
//
//Route::get('/index', ['as' => 'api.deals.attributes-visible', 'uses' => 'Home\HomeController@index']);
//
//Route::get('/AllBook', function () {
//    return view('admin.AllBook');
//});
//Route::get('/createBook', function () {
//    return view('admin.createBook');
//});
//Route::get('/editBook', function () {
//    return view('admin.editBook');
//});
//Route::get('/yeucau_user', function () {
//    return view('admin.yeucau_user');
//});
//
//Route::get('/', function () {
//    return view('page.home');
//});
//Route::get('/detailBook', function () {
//    return view('page.detailBook');
//});
//Route::get('/detail_user', function () {
//    return view('page.detail_user');
//});
Route::get('/','Index\IndexController@index');
Route::post('/register','Register\RegisterController@register')->name('register');
Route::post('/login','Login\LoginController@postLogin')->name('login');
Route::get('/detail_user',function (){
//    dd(Auth::user());
    return view('page.detail_user');
})->middleware('checkUserLogin');

Route::get('/sign-out','Logout\LogoutController@getSignOut')->name('logout');


