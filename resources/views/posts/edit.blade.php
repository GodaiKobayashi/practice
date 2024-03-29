<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="../../Css/02.css">
    </head>
    @extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')

<body>
    <h1 class="title">更新画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}">
            </div>
            <input type="submit" value="更新">
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </div>
</body>
@endsection
