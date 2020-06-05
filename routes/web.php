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
    $getProduct =  \App\Product::where('name','!=','')->paginate(8);
    $getProduct2 =  \App\Product::where('name','!=','')->paginate(8);
    $getBirthDay = \App\Product::where('occasionCat','Birthday')->paginate(8);
    $getWeeding = \App\Product::where('occasionCat','Wedding')->paginate(8);
    $getLove = \App\Product::where('occasionCat','Love & Rommance')->paginate(8);
    $getCongo = \App\Product::where('occasionCat','Congrats')->paginate(8);

    return view('index',compact(['getProduct','getProduct2','getBirthDay','getWeeding','getLove','getCongo']));
});

Route::get('resetPassword','LoginController@showReset');
Route::post('resetPassword','LoginController@sendReset');
Route::get('changePassword','LoginController@showResetField');
Route::post('changePassword','LoginController@changePass');

//user side routes
Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');
Route::get('/register','RegisterController@index');
Route::post('/register','RegisterController@register');

Route::get('/categorySearch/{cat}/{name}','UserController@catSearch');

Route::get('addCart/{id}','UserController@addCart');

Route::get('cart/view','UserController@viewCart');
Route::post('cart/update','UserController@updateCart');
Route::get('cart/delete/{id}','UserController@deleteCart');

Route::group(['middleware'=>'auth'],function (){

    Route::get('cart/checkout','UserController@showCheckout');
    Route::post('cart/checkout','UserController@finalCheckout');
    Route::get('cart/checkout/ship/{name}','UserController@changeShipMethod');
    Route::get('cart/checkout/success','UserController@payCheck');

});

Route::get('/support','UserController@support');
Route::get('/blog','UserController@blog');
Route::get('/blog/view/{id}','UserController@showBlog');
Route::get('/event','UserController@event');
Route::get('/about','UserController@about');
Route::get('/faq','UserController@faq');
Route::get('/contact','UserController@contact');




//admin side routes
Route::get('auth/login','AdminLoginController@index');
Route::post('auth/login','AdminLoginController@login');

Route::group(['middleware'=>'auth:admin','prefix'=>'auth/'],function(){
    Route::get('dashboard','AdminController@index');
    Route::get('profile','AdminLoginController@showProfile');
    Route::post('profile','AdminLoginController@editProfile');
    Route::get('product/add','AdminController@showAddProduct');
    Route::post('product/add','AdminController@addProduct');
    Route::get('product/view','AdminController@showProduct');
    Route::get('product/edit/{id}','AdminController@showEditProduct');
    Route::post('product/edit/{id}','AdminController@editProduct');
    Route::get('product/delete/{id}','AdminController@deleteProduct');
    Route::post('vat/update','AdminController@updateVat');
    Route::get('/order','AdminController@showOrder');
    Route::get('/order/update/{id}','AdminController@updateOrder');
    Route::get('/order/view/{id}','AdminController@viewOrder');
    Route::get('/order/delete/{id}','AdminController@deleteOrder');
    Route::get('/post/add','AdminController@showAddPost');
    Route::post('/post/add','AdminController@addPost');
    Route::get('/post/view','AdminController@showPost');
    Route::get('/post/edit/{id}','AdminController@showEditPost');
    Route::post('/post/edit/{id}','AdminController@editPost');
    Route::get('/post/delete/{id}','AdminController@deletePost');
    Route::get('/faq/add','AdminController@showAddFaq');
    Route::post('/faq/add','AdminController@addFaq');
    Route::get('faq/show','AdminController@showFaq');
    Route::get('faq/edit/{id}','AdminController@showEditFaq');
    Route::post('faq/edit/{id}','AdminController@editFaq');
    Route::get('faq/delete/{id}','AdminController@deleteFaq');


});


Route::get('auth/logout','AdminLoginController@logout');
