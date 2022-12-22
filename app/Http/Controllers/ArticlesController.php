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

    //Affichage de chaque article grâce au id
    // public function show($id){
    //     $article = Article::with('user')->where('id', $id)->firstOrFail();
    //     // return $article;
    //     return view('articles.show', compact('article'));
    // }


    //Affichage de chaque article grâce au id.
    //Avec cette manière de faire, on lance un nombre important de requêtes. Ce qui sollicite beaucoup d'efforts au serveur.
    // public function show($title){
    //     $article = Article::with('user')->where('title', $title)->firstOrFail();
    //     return view('articles.show', compact('article'));
    // }

    // public function getRouteKeyName()
    // {
    //     return 'title';
    // }

    //De façon optimale, on procède comme suit:

    public function show(Article $article){

        // $article = Article::with('user')->with(['comments' => function($query){$query -> with('user');}]) -> findorfail($id);

        return view ('articles.show', compact('article'));
    }
}
