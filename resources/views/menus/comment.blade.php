@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>コメント投稿</title>
    </head>
    <body>
        <h2>タコライス</h2>
        
        <form action="/comments" method="POST" enctype="multipart/form-data"  >
            @csrf
            
            <div class="name">
                <h3>感想</h3>
                <input type="text" name="menu[comment1]" placeholder="おいしかった" value="{{ old('comment.menuname') }}"/>
                <p class="menuname__error" style="color:red">{{ $errors->first('menu.name') }}</p>
      
                
            </div>
            <input type="submit" value="保存"/>
            

            
            
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>

@endsection