<?php

use Illuminate\Support\Facades\Route;

Route::get('/controller', 'TestController@start');

//Route::get('/', 'NewsLine\NewsLineController@getListNews');
//Route::get('/news/{id}.html', 'NewsLine\NewsLineController@getNews')-> name('news');


//Route::get('/articles.html', 'Articles\IndexController@listArticles');
//Route::get('/articles/{id}.html', 'Articles\IndexController@getArticle')-> name('article');
