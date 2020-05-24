<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function start(){
        echo "Start";
    }

    public function end(){
        echo "End";
    }
}
