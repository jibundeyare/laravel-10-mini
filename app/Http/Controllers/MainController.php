<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        // $articles = Article::all();
        $articles = Article::orderBy('titre')->get();
        $article11 = Article::find(11);

        return view('home', [
            'articles' => $articles,
            'article11' => $article11,
        ]);
    }
}
