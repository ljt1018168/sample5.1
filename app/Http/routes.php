<?php

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');

Route::resource('statuses','StatusesController',['only'=>['store','destroy']]);

Route::get('/users/{id}/followings', 'UsersController@followings')->name('users.followings');
Route::get('/users/{id}/followers', 'UsersController@followers')->name('users.followers');

Route::post('/users/followers/{id}', 'FollowersController@store')->name('followers.store');
Route::delete('/users/followers/{id}', 'FollowersController@destroy')->name('followers.destroy');