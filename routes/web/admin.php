<?php

Route::get('/', function () {
    toast('به بخش مدیریت خوش آمدید','info');

    return 'welcome';
});
Route::get('users', function () {
    return 'users list';
});
