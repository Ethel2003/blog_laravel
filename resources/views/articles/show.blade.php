@extends('layouts.master')

@section('content')

    <!-- @foreach($article->comments as $comment)
        <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
        <p>{{ $comment->comment }}</p>
        <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
    @endforeach -->

        <article>
            <a href="/articles/{{$article->id}}"><h3>Article {{$article['id']}}</h3></a>
            <p>Titre: {{$article->title}}</p>
            <p>{{$article['body']}}</p>
            <img src="{{$article['image']}}" alt="img">
            <p>Auteur: {{$article->user->name}}</p>
        </article>
    
@endsection


<!-- <p>ok!</p> -->