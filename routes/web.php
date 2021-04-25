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

Route::middleware(['verified', 'auth'])->group(function () {

    Route::get('/messages', 'MessagesController@index')->name(config('chatify.path'));

    /**
     *  Fetch info for specific id [user/group]
     */
    Route::post('/idInfo', 'MessagesController@idFetchData');

    /**
     * Send message route
     */
    Route::post('/sendMessage', 'MessagesController@send')->name('send.message');

    /**
     * Fetch messages 
     */
    Route::post('/fetchMessages', 'MessagesController@fetch')->name('fetch.messages');

    /**
     * Download attachments route to create a downloadable links
     */
    Route::get('/download/{fileName}', 'MessagesController@download')->name(config('chatify.attachments.route'));

    /**
     * Authintication for pusher private channels
     */
    Route::post('/chat/auth', 'MessagesController@pusherAuth')->name('pusher.auth');

    /**
     * Make messages as seen
     */
    Route::post('/makeSeen', 'MessagesController@seen')->name('messages.seen');

    /**
     * Get contacts
     */
    Route::post('/getContacts', 'MessagesController@getContacts')->name('contacts.get');

    /**
     * Update contact item data
     */
    Route::post('/updateContacts', 'MessagesController@updateContactItem')->name('contacts.update');


    /**
     * Star in favorite list
     */
    Route::post('/star', 'MessagesController@favorite')->name('star');

    /**
     * get favorites list
     */
    Route::post('/favorites', 'MessagesController@getFavorites')->name('favorites');

    /**
     * Search in messenger
     */
    Route::post('/search', 'MessagesController@search')->name('search');

    /**
     * Get shared photos
     */
    Route::post('/shared', 'MessagesController@sharedPhotos')->name('shared');

    /**
     * Delete Conversation
     */
    Route::post('/deleteConversation', 'MessagesController@deleteConversation')->name('conversation.delete');

    /**
     * Delete Conversation
     */
    Route::post('/updateSettings', 'MessagesController@updateSettings')->name('avatar.update');

    /**
     * Set active status
     */
    Route::post('/setActiveStatus', 'MessagesController@setActiveStatus')->name('activeStatus.set');


    /*
* [Group] view by id
*/
    Route::get('/group/{id}', 'MessagesController@index')->name('group');

    /*
* user view by id.
* Note : If you added routes after the [User] which is the below one,
* it will considered as user id.
*
* e.g. - The commented routes below :
*/
    // Route::get('/route', function(){ return 'Munaf'; }); // works as a route
    Route::get('/{id}', 'MessagesController@index')->name('user');
    // Route::get('/route', function(){ return 'Munaf'; }); // works as a user id
});
