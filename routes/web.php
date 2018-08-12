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
    return view('welcome');
});
Route::get('/about','MainController@about');

Route::get('/profile','MainController@profile')->name('profile');

Route::get('/teams','MainController@teams')->name('teams');

Route::get('/auction','MainController@auction')->name('auction');
Route::get('/batch','MainController@batch')->name('batch');

Route::get('/auction/{id}','MainController@auctionid');
Route::get('/batch/{id}','MainController@batchid');

Route::get('/matches','MainController@matches');
Route::get('/gallery','MainController@gallery');
Route::get('/index','MainController@index');
Route::get('/tournament/{id?}','MainController@tournament')->name('tournament');
Route::get('/live/{id?}','MainController@live')->name('live');
Route::get('/galleries','MainController@gallery');
Auth::routes();


Route::get('/home', 'HomeController@index');

Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'adminn', 'middleware' => 'auth'], function(){
   Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');
   Route::resource('auction','AuctionTeamController');
   Route::resource('batch','BatchTeamController');
   Route::resource('manager','ManagerController');
   Route::resource('profile','ProfileController');
   Route::resource('schedule','ScheduleController');
   Route::resource('score','ScoreController');
   Route::resource('tournament','TournamentController');
   Route::resource('gallery','galleryController');
   Route::resource('live','LiveController');
});