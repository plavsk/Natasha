<?php

namespace App\Http\Controllers\NewsLine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsLineController extends Controller
{
    protected $news = [];
    public function __construct()
    {
        $this->news = [
            'Новость 1',
            'Новость 2',
            'Новость 3',
            'Новость 4',
            'Новость 5'
        ];
    }

    public function getListNews()
    {
        return view('NewsLine.getListNews', ['news'=> $this->news]);
    }

    public function getNews(int $id)
    {
        if(!isset($this->news[$id])){
            return abort(404);
        }

        return view('NewsLine.getNews', ['news'=>$this->news[$id]]);
    }
}
