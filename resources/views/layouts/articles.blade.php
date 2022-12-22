@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')
    <h2>Articles</h2>

    <!-- Affichage des éléments du tableau avec la directive @@foreach -->
    @foreach($articles as $article)
        <article>
            <a href="/articles/{{$article->id}}"><h3>Article {{$article['id']}}</h3></a>
            <p>Titre: {{$article['title']}}</p>
            <p>Auteur: {{$article->user->name}}</p>
            <a href="/articles/{{$article->id}}">Voir plus</a>
        </article>
    @endforeach
    
    <!-- Affichage des éléments du tableau avec la directive @@unless -->
    <!-- @@unless(!$articles)
        @@foreach($articles as $article)
            @@include('articles.index')
        @@endforeach<a href="/articles/{{$article->title}}">Voir plus</a>
    @@endunless -->

    <!-- Avec la directive @@each -->
    <!-- @@each('articles.index', $articles,'article', 'articles.no-articles') -->
@endsection
