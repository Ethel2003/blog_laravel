@extends('layouts.master')

@section('content')
    <form action="/articles/create" method="POST" enctype="multipart/form-data">
        @csrf
        @include('partials.article-form')
    </form>
@endsection