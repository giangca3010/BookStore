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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});



Route::get('/index', ['as' => 'api.deals.attributes-visible', 'uses' => 'Home\HomeController@index']);

// Admin page manages books

Route::get('/AllBook','Books\BookController@index');

Route::get('/delete/{id}','Books\BookController@DeleteBook');

Route::get('/createBook', function () {
    return view('admin.createBook');
});

Route::post('CreateBook','Books\BookController@CreateBook');

Route::get('/editBook/{id}','Books\BookController@EditBook');

Route::post('/EditBook','Books\BookController@UploadBooks');

// End admin page manages book

// Page Books

Route::get('/','Books\BookController@ViewBookInHome');


// end Page Books



Route::get('/yeucau_user', function () {
    return view('admin.yeucau_user');
});


Route::get('/detailBook', function () {
    return view('page.detailBook');
});
Route::get('/detail_user', function () {
    return view('page.detail_user');
});

