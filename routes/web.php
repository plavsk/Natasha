<?php
//phpinfo();
//echo "Test";

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

$text = "Hello, World!";
$title = "My first page";

Route::get('/', function () use ($text, $title){
    return <<<php

<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>$title</title>
</head>
<body>
    <h1>$text</h1>
    Lorem
</body>
</html>

php;

});

Route::get('/test/{name}', function ($name){
    echo 'Hello, '.$name;
});
