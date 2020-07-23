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
// Route::get('/api', 'PaymentController@index')->name('api');

Route::group(['middleware' => 'auth'], function(){
  Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');
  Route::get('/membership/', 'PagesContoller@membership')->name('membership');
  Route::get('/cart', 'PagesContoller@cart')->name('cart');
  Route::get('note-upload', 'NoteController@create')->name('note-upload');
  Route::post('post-membership', 'MembershipController@store')->name('post-membership');

});





Route::get('login', 'AuthController@index')->name('login');
Route::post('post-login', 'AuthController@postLogin')->name('post-login');
Route::get('register', 'AuthController@register')->name('register');
Route::post('post-registration', 'AuthController@postRegistration')->name('post-registration');
// Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');
Route::get('logout', 'AuthController@logout')->name('logout');


// ############ Image Upload ##################



Route::post('note-upload', 'NoteController@store')->name('image.upload.post');

// ############ Image Upload - End ##################
