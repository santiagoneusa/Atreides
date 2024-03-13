<?php

use Illuminate\Support\Facades\Route;

Route::GET('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::GET('/worm', 'App\Http\Controllers\WormController@index')->name('worm.index');
Route::GET('/worm/create', 'App\Http\Controllers\WormController@create')->name('worm.create');
Route::POST('/worm/save', 'App\Http\Controllers\WormController@save')->name('worm.save');
Route::GET('/worm/statistics', 'App\Http\Controllers\WormController@statistics')->name('worm.statistics');
