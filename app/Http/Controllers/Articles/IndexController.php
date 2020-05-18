<?php

namespace App\Http\Controllers\Articles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $articles = [];
    private function __construct()
    {
        $this->articles = [
            'first article',
            'second article',
            'other article'
        ];
    }

    public function listArticles()
    {
        return view('articles.listArticles', ['articles'=> $this->articles]);
    }

    public function getArticle(int $id)
    {
        if(!isset($this->articles[$id])){
            return abort(404);
        }

        return view('articles.article', ['article'=>$this->articles[$id]]);
    }
}
