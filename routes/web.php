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
//
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PagesContoller@index')->name('index');
Route::get('/about-us', 'PagesContoller@about')->name('about-us');
Route::get('/contact-us', 'PagesContoller@contact')->name('contact-us');
Route::get('/terms-condition', 'PagesContoller@terms')->name('terms-condition');
Route::get('/pricing', 'PagesContoller@pricing')->name('pricing');
Route::get('/blog', 'PagesContoller@blog')->name('blog');
//Route::get('/cart', 'PagesContoller@cart')->name('cart');

Route::get('/package', 'PagesContoller@package')->name('package');
Route::get('all-notes','PagesContoller@allNotes');
Route::get('single-note/{id}','PagesContoller@single');
Route::any('search','PagesContoller@search');

// Route::get('/api', 'PaymentController@index')->name('api');



// ############ Auth Middleware ##################

Route::group(['middleware' => 'auth'], function(){
  Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');
  Route::get('/membership/', 'PagesContoller@membership')->name('membership');
  Route::get('/cart', 'PagesContoller@cart')->name('cart');
    Route::get('single-note/add-to-cart/{note_id}', 'PagesContoller@addToCart')->name('add-to-cart');
  Route::get('note-upload', 'NoteController@create')->name('note-upload');


// ############ User Profile     ##################
    Route::get('profile', 'UserProfileController@profile')->name('profile');
    Route::post('profile', 'UserProfileController@update_avatar')->name('profile');



    Route::post('post-membership', 'MembershipController@store')->name('post-membership');


});


// ############ Auth Middleware - END ##################

Route::post('/add-comment', 'CommentController@store')->name('add-comment');




Route::get('login', 'AuthController@index')->name('login');
Route::post('post-login', 'AuthController@postLogin')->name('post-login');
Route::get('register', 'AuthController@register')->name('register');
Route::post('post-registration', 'AuthController@postRegistration')->name('post-registration');
// Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');
Route::get('logout', 'AuthController@logout')->name('logout');


// ############ Image Upload ##################



Route::post('note-upload', 'NoteController@store')->name('image.upload.post');


//Route::post('note-upload', 'FileUploadController@store')->name('image.upload.post');

// ############ Image Upload - End ##################








//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// ######################    ADMIN AREA   #######################################

Route::get('/admin', 'AdminController@allNotes')->name('admin');
Route::get('/admin-profile', 'AdminController@adminProfile')->name('admin-profile');
Route::get('/approve-note/{note_id}', 'AdminController@approveNote')->name('approve-note');
Route::get('/delete-note/{note_id}', 'AdminController@deleteNote')->name('delete-note');
Route::get('/delete-user/{user_id}', 'AdminController@deleteUser')->name('delete-user');
Route::get('download/{file}','AdminController@download');





// payment


Route::post('/pay', 'PaymentController@initialize')->name('pay');
Route::post('/payment/callback', 'PaymentController@callback')->name('callback');
Route::get('/pay', 'PaymentController@pay')->name('pay-here');






