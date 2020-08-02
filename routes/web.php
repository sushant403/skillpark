<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});

Route::get('/about', function () { return view('about.about');});

Route::get('/creators', function () {return view('about.creators');});

Route::get('/contact', function () {return view('about.contact');});

Route::get('/policy', function () {return view('about.terms');});


// |=================LOGGED IN USER==========================|

Auth::routes(['verify' => true]);

Route::middleware(['verified','auth'])->group(function () {

    Route::post('/home', 'UserController@store'); //stores default avatar
    
    Route::get('register/user-information', 'Auth\ProfileInfoController@showProfile');
    Route::post('register/user-information', 'Auth\ProfileInfoController@addProfile')->name('addprofile');

    Route::get('/home', 'HomeController@freelancer')->name('home'); //user feeds
    Route::get('/client', 'HomeController@client')->name('client'); //client feeds

    //user-accounts routes
    Route::get('/dashboard', 'ProfileController@dashboard');
    Route::get('/settings', 'ProfileController@editProfile');
    Route::get('/task', 'ProfileController@task');
    Route::get('/user-details', 'ProfileController@userDetails');
    Route::get('/services', 'ProfileController@serviceList');
    Route::get('/services/description', 'ProfileController@serviceSingle');
    Route::get('/post/project', 'PostController@postProject');
    Route::get('/post/proposal', 'PostController@postProposal');
    

    Route::middleware(['verified','freelancer'])->group(function () {
    });

    Route::middleware(['verified', 'client'])->group(function () {
    });

    
    Route::get('client', 'SearchController@searchInfo')->name('client');
    Route::post('client', 'SearchController@searchAction')->name('searchInfo');

});

// Social Auth
Route::get('auth/social', 'Auth\SocialAuthController@show')->name('social.login');
Route::get('oauth/{driver}', 'Auth\SocialAuthController@redirectToProvider')->name('social.oauth');
Route::get('login/{driver}/callback', 'Auth\SocialAuthController@handleProviderCallback')->name('social.callback');


//creators of SKILLPARK (sushant,divesh,nitika)