<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

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

    public function create (){
        return view('articles.create');
    }

    //methode d'ajout d'articles dans la base de données 
    public function store(Request $request){
        //dd($request->all()); Permet de voir si notre formulaire a été bien soumis

        //process de validation des inputs
        $user = User::find(1);
        $request['user_id']  = $user->id;

        $this->validate($request, [
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id'
        ]);
        // dd($request->all());
       
        $art = Article::create($request->all());
        // dd($art);
    }

    //methode pour éditer un article
    public function edit(Article $article){
        return view('articles.edit', compact('article'));
    }

    //méthode pour valider l'édition d'un article
    public function update(Request $request, Article $article){
        dd($article, $request->all());
    }
}
