<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
                  <link rel="stylesheet" href="../../Css/02.css">

        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">-->
        <!--<link rel="stylesheet" href="/css/app.css">-->
        
    </head>
    <body>
        <script type="text/javascript"> 


function check(){

	if(window.confirm('削除してよろしいですか？')){ // 確認ダイアログを表示

		return true; // 「OK」時は送信を実行

	}
	else{ // 「キャンセル」時の処理

		window.alert('キャンセルされました'); // 警告ダイアログを表示
		return false; // 送信を中止

	}

}


</script
        <h1 class="title">{{ $post->title }}</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">更新</a>]</p>
         <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline" onSubmit="return check()">
            @csrf
            @method('DELETE')
            <button id="submit">削除</button> 
            <script src="./js/delebtn.js"></script>
            <p id="txt"></p>
         </form>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
