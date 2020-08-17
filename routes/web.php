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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/' , 'TListController@index')->name('partlost');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');



// lostandfound


Route::get('/recordLost', 'LostController@index')->name('recordLost')->middleware('auth');
Route::post('recordLost/store',['as' =>'recordLost.store','uses'=>'LostController@store']);
// Route::get('/detalis', 'LostController@index')->name('detalis');
Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/post', 'PostController@index')->name('post');
// Route::delete('/post/{id}', 'PostController@destroy')->name('deletPost');
// Route::get('/editPost/{id}', 'PostController@edit')->name('editPost');
// Route::put('/editPost/{id}','PostController@update');

Route::get('/deletPost/{id}/delete','PostController@destroy');
Route::get('/editPost/{id}/edit','PostController@edit');

Route::get('/editProfile', 'ProfileController@index')->name('editProfile');


// Route::post('numbers/search','LostController@search');
Route::get('/recordFound', 'FoundController@index')->name('recordFound');
Route::post('recordFound/store',['as' =>'recordFound.store','uses'=>'FoundController@store']);

// Route::get('/partlost' , 'TListController@index')->name('partlost');
Route::get('/showFoundandLost/{id}' , 'ShowFLController@index')->name('showFoundandLost');
// Route::get('/showFoundandLost' , 'ShowFLController@index')->name('showFoundandLost');

Route::get('/showFoundandLostElectronec/{id}' , 'ShowFLElectroneController@index')->name('showFoundandLostElectronec');

Route::get('/call' , 'CallController@index')->name('call');
Route::get('/about' , 'AboutController@index')->name('about');
Route::get('/detalis/{id}' , 'DetaliController@index')->name('detalis');

Route::get('/search','ShowFLController@search');

Route::get('/el/search','ShowFLElectroneController@search');




// Route::get('detalis', function () {
//     //
// })->name('detalis');
// // Route::get('/call')->name('call');
// Route::get('about', function () {
//     //
// })->name('about');
// // Route::get('/about' )->name('about');





