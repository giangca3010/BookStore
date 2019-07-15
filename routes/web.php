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

Route::get('/editBook/{name}','Books\BookController@EditBook');

Route::post('/EditBook','Books\BookController@UploadBooks');

// End admin page manages book

// Page Books

Route::get('/','Books\BookController@ViewBookInHome');

Route::get('product/{id}/{name}','Books\BookController@DetailBook')->name('product_book');

// end Page Books





//Route::get('/yeucau_user', function () {
//    return view('admin.yeucau_user');
//});   q


//Route::get('/detailBook', function () {
//    return view('page.detailBook');
//});

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
Route::post('insert-comment','Comment\CommentController@insertComment');
Route::get('delete-comment/{id}','Comment\CommentController@deleteComment');
//end Comment

Route::get('/sign-out','Logout\LogoutController@getSignOut')->name('logout');
//email
Route::get('/sendemail','Email\emailController@index');
Route::post('/sendemail/send','Email\emailController@send');

//endemail
//cart
Route::post('/add-to-cart','Cart\cartController@add_to_cart');
Route::get('/show_cart','Cart\cartController@show_cart');
Route::get('/delete-cart/{rowId}','Cart\cartController@delete_cart');
Route::post('/update_cart','Cart\cartController@update_cart');

//endCart
Route::post('/add-shipping','Shipping\shippingController@saveShipping');


