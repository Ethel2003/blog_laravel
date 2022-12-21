<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index(){

        $articles = Article::all();
        return view('layouts.articles', compact('articles'));
    }

    public function show($id){
        $article = Article::with('user')->where('id', $id)->firstOrFail();
        // return $article;
        return view('articles.show', compact('article'));
    }
}
