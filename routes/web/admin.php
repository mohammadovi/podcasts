<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/', function () {
    return view('admin.index');
});

Route::resource('users','UserController');

Route::resource('podcasts','PodcastController');


