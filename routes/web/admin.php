<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Auth::routes(['verify' => true]);
Route::get('/', function () {
    return view('admin.index');
});

Route::resource('users','UserController');

Route::resource('podcasts','PodcastController')->except([ 'show']);


