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

Route::get('detailBook/{id}','Books\BookController@DetailBook');

// end Page Books





Route::get('/yeucau_user', function () {
    return view('admin.yeucau_user');
});


Route::get('/detailBook', function () {
    return view('page.detailBook');
});

Route::post('/register','Register\RegisterController@register')->name('register');
Route::post('/login','Login\LoginController@postLogin')->name('login');
//Route::get('/detail_user',function (){
////    dd(Auth::user());
//    return view('page.detail_user');
//});
//customer
Route::get('detail_user','Customer\CustomerController@getCustomer');
Route::post('/create_request','CustomerRequest\CustomerRequestController@insertRequestCustomer');
Route::get('/yeucau_user','CustomerRequest\CustomerRequestController@allRequestCustomer');
Route::get('deleteCustomer/{id}','CustomerRequest\CustomerRequestController@deleteCustomer');
Route::post('/update-account', 'Customer\CustomerController@updateCustomer');
//end Customer
//comment
Route::get('comment','Comment\CommentController@getAllCommentAdmin');

//end Comment

Route::get('/sign-out','Logout\LogoutController@getSignOut')->name('logout');


