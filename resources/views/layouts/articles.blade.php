@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')
    <h2>Articles</h2>
    <!-- @foreach($articles as $article)
        <p>{{$article['title']}}</p>
        <p>{{$article['body']}}</p>
    @endforeach -->
    @unless(!$articles)
        @foreach($articles as $article)
            <p>{{$article['title']}}</p>
            <p>{{$article['body']}}</p>
        @endforeach
    @endunless
@endsection
