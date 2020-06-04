<?php

use Illuminate\Support\Facades\Route;

Route::get('category.html', 'NewsLine\NewsLineController@categoryNews')-> name('category');

Route::get('/', 'NewsLine\NewsLineController@getListNews')-> name('direct');

Route::get('/news/{id}.html', 'NewsLine\NewsLineController@getNews')-> name('news');

Route::get('/about.html', 'NewsLine\NewsLineController@getAboutPage')-> name('about');

Route::get('/contacts.html', 'NewsLine\NewsLineController@getContactsPage')-> name('contacts');
