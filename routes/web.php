<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'NewsLine\NewsLineController@getListNews');

Route::get('/news/{id}.html', 'NewsLine\NewsLineController@getNews')-> name('news');

Route::get('/about.html', 'NewsLine\NewsLineController@getAboutPage')-> name('about');
