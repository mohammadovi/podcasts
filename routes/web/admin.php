<?php

Route::get('/', function () {
    return view('admin.index');
});
Route::get('users', function () {
    return 'users list';
});
