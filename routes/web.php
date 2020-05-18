<?php

use Illuminate\Support\Facades\Route;

Route::get('/articles.html', 'Articles\IndexController@listArticles');
Route::get('/articles/{id}.html', 'Articles\IndexController@getArticle')-> name('article');
