<?php

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
//Show_Podcasts_onPageWebSite..
Route::get('podcasts','App\Http\Controllers\PodcastController@index')->name('podcastMain');
Route::get('podcast/{podcast}','App\Http\Controllers\PodcastController@single')->name('podcastSingle');
