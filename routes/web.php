<?php

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('signup', 'UsersController@create')->name('signup'); /*注册路由时，URI signup 和 /signup 从使用上来看，并无区别，Laravel 框架兼容这两种写法*/