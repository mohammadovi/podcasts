<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;


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

Route::get('/', [App\Http\Controllers\SiteController::class, 'mainPage'])->name('mp');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Google Account Login/Register
Route::get('/auth/google','App\Http\Controllers\Auth\GoogleAuthController@redirect')->name('auth.google');
Route::get('/auth/google/callback','App\Http\Controllers\Auth\GoogleAuthController@callback');
//sendTokenCodeToServer
Route::get('/auth/token','App\Http\Controllers\Auth\AuthTokenController@getToken')->name('2fa.token');
Route::post('/auth/token','App\Http\Controllers\Auth\AuthTokenController@postToken');
//Show_Podcasts_onPageWebSite..
Route::get('podcast','App\Http\Controllers\PodcastController@index')->name('podcastMain');
Route::get('podcast/{podcast}','App\Http\Controllers\PodcastController@single')->name('podcastSingle');


//->name('profile.2fa.manage')
Route::middleware('auth')->group(function (){
    Route::get('profile' ,'App\Http\Controllers\ProfileController@index')->name('profile');
    Route::post('profile' ,'App\Http\Controllers\ProfileController@postManageTwoFactor')->name('manageTwoFactor');
    Route::get('profile/twofactor/phone','App\Http\Controllers\ProfileController@getPhoneVerify')->name('profile.2fa.phone');
    Route::post('profile/twofactor/phone','App\Http\Controllers\ProfileController@postPhoneVerify');


});
