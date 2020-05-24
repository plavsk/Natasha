<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $testCont = [];
    public function __construct()
    {
        $this->testCont = [
        '11111111',
        '22222222',
        '33333333'];
    }

    public function listTest(){
        return view ('test.listTest', ['testCont'=>$this->testCont]);
    }

    public function end(){
        echo "End";
    }
}
