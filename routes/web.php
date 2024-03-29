<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/creators', function () {
    return view('about.creators');
});

Route::get('/contact', function () {
    return view('about.contact');
});

Route::get('/policy', function () {
    return view('about.policy');
});

Route::get('/faq', function () {
    return view('about.faq');
});

Route::get('/terms', function () {
    return view('about.terms');
});

Route::get('/coming-soon', function () {
    return view('about.coming-soon');
});

//===============SEARCH===============//
Route::get('search', 'Search\HomeController@search')->name('search');
Route::resource('job', 'Search\JobController')->only(['index', 'show']);
Route::get('categories/{category:name}', 'Search\CategoryController@show')->name('categories.show');
//===============END-SEARCH===============//

// |=================LOGGED IN USER==========================|

Auth::routes(['verify' => true]);

Route::middleware(['verified', 'auth'])->group(function () {

    Route::post('/home', 'UserController@store'); //stores default avatar

    //add additional info
    Route::get('register/user-information', 'Auth\ProfileInfoController@showProfile');
    Route::post('register/user-information', 'Auth\ProfileInfoController@addProfile')->name('addprofile');

    //middleware protected roles

    //freelancer only
    Route::group(['middleware' => ['role:freelancer'], 'prefix' => 'ab'], function () {
        Route::get('/home', 'HomeController@freelancer')->name('freelancer'); //user feeds

        Route::get('/jobs/{id}', 'JobsController@details')->name('jobs.details');

        //bidding proposal
        Route::resource('proposals', 'ProposalsController');
        Route::post('proposals/media', 'ProposalsController@storeMedia')->name('proposals.storeMedia');
    });

    //============================Roles Middleware==================================

    //client only
    Route::group(['middleware' => ['role:client'], 'prefix' => 'cd'], function () {
        Route::get('/home', 'HomeController@client')->name('client'); //client feeds

        Route::get('/my-jobs', 'JobsController@index')->name('myprojects');
        Route::get('/payment-success', 'JobsController@paymentSuccess')->name('payment-success');

        //post projects for client
        Route::get('/post/project', 'JobsController@create')->name('post-project');

        Route::post('jobs/{job}/pay', 'JobsController@pay')->name('jobs.pay');
        Route::resource('jobs', 'JobsController');
        Route::post('jobs/media', 'JobsController@storeMedia')->name('jobs.storeMedia');
    });

    //user-accounts routes
    Route::get('/dashboard', 'ProfileController@dashboard')->name('dashboard');
    Route::get('/settings', 'ProfileController@editProfile');
    Route::post('/settings', 'ProfileController@editProfile')->name('editProfile');
    Route::get('/auth', 'ProfileController@auth');
});

// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('login/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');

//creators of SKILLPARK (sushant,divesh,nitika)
