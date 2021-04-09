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

Route::get('/', function () {
    return view('welcome');
});


//For the Landing Controllers

Route::get('/', function () {
    return view('home');
});
//Route::resource('home', 'LandingController');
Route::view('/home',"home");
Route::view('/contactus',"contactus");
//Route::view('/register',"register");


// for register Controller
Route::resource('register','RegisterController');
Route::resource('login','LoginController');
Route::post('post-login', 'LoginController@login');
Route::view('/admin',"admin");
Route::view('/user',"user");

Route::post('additems', 'AdminController@addItems');


// Route::get('login', 'AuthController@index');
// Route::post('post-login', 'AuthController@postLogin'); 
//Route::get('registration', 'AuthController@registration');
//Route::post('post-registration', 'AuthController@postRegistration'); 
// Route::get('dashboard', 'AuthController@dashboard'); 
// Route::get('logout', 'AuthController@logout');

