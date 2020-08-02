<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/how-it-works', function () {
    return view('about.about');
});

//creators of SKILLPARK 
Route::get('/creators', function () {
    return view('about.creators');
});

Route::get('/contactus', function () {
    return view('about.contact');
});

Route::get('/add', function () {
    return view('auth.addinfo');
});

// |=================LOGGED IN USER==========================|

Auth::routes(['verify' => true]);

Route::get('register/add-information', 'Auth\RegisterInfoController@showForm')->middleware('verified');
Route::post('register/add-information', 'Auth\RegisterInfoController@postProfile')->name('addprofile');
Route::post('register/add-information', 'Auth\RegisterInfoController@postProfileDetails')->name('profiledetails');

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');
Route::post('/home', 'UserController@store');

Route::get('/dashboard', 'Freelancer\FreelancerController@dashboard')->middleware('verified');
Route::get('/task', 'Freelancer\FreelancerController@task')->middleware('verified');

Route::get('/client', function () {
    return view('/clients.home');
})->Middleware(['client'])->name('client');

//user settings
Route::get('/settings', 'ProfileController@editProfile')->name('editprofile');


// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('login/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');


// MAIL_MAILER=smtp
// MAIL_HOST=smtp.mailtrap.io
// MAIL_PORT=2525
// MAIL_USERNAME=f284aa9a716742
// MAIL_PASSWORD=70566876a2ab3c
// MAIL_ENCRYPTION=tls
// MAIL_FROM_ADDRESS=sushantpaudel@gmail.com
// MAIL_FROM_NAME="${APP_NAME}"