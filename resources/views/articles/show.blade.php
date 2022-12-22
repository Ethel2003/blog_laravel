@extends('layouts.master')

@section('content')

    <!-- Approche avec les titres -->
        <article>
            <h3>Article {{$article['id']}}</h3>
            <p>Titre: {{$article->title}}</p>
            <img src="{{$article['image']}}" alt="img">
            <p>{{$article['body']}}</p>
            <p>Auteur: {{$article->user->name}}</p>
            <a href="/article/{{$article->id}}/edit">Editer l'article</a>
        </article>    
        <div>
            @foreach($article->comments as $comment)
                <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
                <p>{{ $comment->comment }}</p>
                <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
            @endforeach
        </div>
        
    
@endsection


<!-- <p>ok!</p> -->