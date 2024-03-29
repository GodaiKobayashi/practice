<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
             <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
          <!--<link rel="stylesheet" href="../../Css/02.css">-->
          
    </head>
    @extends('layouts.app')　

@section('content')
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="hozo">
                <input type="submit" value="保存"/>
            </div>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>

@endsection
