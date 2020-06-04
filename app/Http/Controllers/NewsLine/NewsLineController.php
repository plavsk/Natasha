<?php
namespace App\Http\Controllers\NewsLine;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsLineController extends Controller
{
    protected $news = [];
    protected $category = [];
    protected $society =[];
    protected $policy = [];
    protected $culture = [];
    protected $economy = [];
    protected $sport = [];

    public function __construct()
    {
        $this->news = [
            'Новость 1',
            'Новость 2',
            'Новость 3',
            'Новость 4',
            'Новость 5'
        ];

        $this->category = [
            'Общество'=>['Новости Общество 1', 'Новости Общество 2', 'Новости Общество 3',
                'Новости Общество 4', 'Новости Общество 5'],
            'Политика'=>['Новости Политика 1', 'Новости Политика 2', 'Новости Политика 3',
                'Новости Политика 4', 'Новости Политика 5'],
            'Культура'=>['Новости Культура 1', 'Новости Культура 2', 'Новости Культура 3',
                'Новости Культура 4', 'Новости Культура 5'],
            'Экономика'=>['Новости Экономика 1', 'Новости Экономика 2', 'Новости Экономика 3',
                'Новости Экономика 4', 'Новости Экономика 5'],
            'Спорт'=>['Новости Экономика 1', 'Новости Экономика 2', 'Новости Экономика 3',
                'Новости Экономика 4', 'Новости Экономика 5']
        ];

        $this->society = [
            'Новости Общество 1'=>'Последние новости'
        ];
    }

    public function categoryNews(){

        return view('News.category', ['category'=>$this->category]);
    }

    public function getListNews()
    {
        return view('News.welcome', ['news'=> $this->news]);
    }

    public function getNews(int $id)
    {
        if(!isset($this->news[$id])){
            return abort(404);
        }

        return view('News.news_page', ['news'=>$this->news[$id]]);
    }

    public function getAboutPage(){
        return view('News.about');
    }

    public function getContactsPage(){
        return view('News.contacts');
    }
}

