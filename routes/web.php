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

Route::get('/', function () {
    return view('welcome');
});

echo "Test";

//$title = "News Page";
//$header = "News";
//
//Route::get('/', function () use ($header, $title){
//    return <<<php
//
//php;

//});
