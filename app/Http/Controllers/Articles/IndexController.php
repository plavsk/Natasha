<?php

namespace App\Http\Controllers\Articles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $articles = [];
    public function __construct()
    {
        $this->articles = [
            'Статья 1',
            'Статья 2',
            'Статья 3'
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
