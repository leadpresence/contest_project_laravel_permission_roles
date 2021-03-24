<?php

use Illuminate\Support\Facades\Route;
use App\Model\Contest;

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

$contests=Contest::where('status',1)->get();
  
    return view('welcome')->with(['contests'=>$contests]);
});


Auth::routes(['verify'=>true]);
//front_end
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::group([
    
],function(){
    Route::get('/welcome', 'User\FrontendController@welcome')->name('welcome');
        Route::get('/faq', 'User\FrontendController@faq')->name('faq');
        Route::get('/software', 'User\FrontendController@software')->name('software');
        Route::get('/ai', 'User\FrontendController@ai')->name('ai');
        Route::get('/robotics', 'User\FrontendController@robotics')->name('robotics');
});

//user
Route::namespace('User')->prefix('user')->name('user.')->middleware('can:can_apply')->group(function(){
        Route::get('/edit_profile/{id}', 'UserController@editUserProfile')->name('edit_profile');
        Route::put('/update/{id}', 'UserController@update')->name('update_profile');
        Route::get('/profile', 'UserController@profile')->name('profile');
        Route::get('/apply/{id}', 'UserController@apply')->name('apply');
        Route::put('/submit','UserController@submitSummerApplication')->name('submit_application');
        Route::get('/next', 'UserController@nextSteps')->name('next');

});



//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage_users')->group(function(){
    

    Route::resource('/users','UserController',['except'=>['show','create','store']]);
    //list users and their roles
    
    //perform edit/update/delete on them
    Route::get('/users', 'UserController@index')->name('users');
    Route::get('/create','UserController@create')->name('create');
    Route::put('/store', 'UserController@store')->name('store');
    Route::get('/edit', 'UserController@edit')->name('edit');
    Route::put('/update', 'UserController@update')->name('update');
    Route::get('/destroy', 'UserController@delete')->name('delete');

    //Admin profile 
    Route::get('/profile', 'UserController@profile')->name('profile');
    //for Judges to see all application submited
    Route::get('/all_applications', 'UserController@showAllApplications')->name('all_applications');
    
    Route::get('/applications', 'UserController@showAcceptedApplication')->name('applications');
    Route::get('/declined_applications', 'UserController@showDeclinedApplication')->name('declined');

    
    //view single appication
    Route::get('/view/{id}', 'UserController@showSingleApplication')->name('view');
    Route::get('/accept/{id}','UserController@acceptApplication')->name('accept');
    Route::get('/decline/{id}','UserController@declineApplication')->name('decline');

    //contests
    Route::get('/contests', 'UserController@showContests')->name('contests');
    Route::get('/create_contest', 'UserController@createContest')->name('create_contest');
    Route::get('/edit_contest/{id}', 'UserController@editContest')->name('edit_contest');
    Route::put('/update_contest/{id}', 'UserController@updateContest')->name('update_contest');
    Route::put('/store_contest', 'UserController@storeContest')->name('store_contest');
    Route::delete('/delete_contest/{id}', 'UserController@destroyContest')->name('delete_contest');

});







