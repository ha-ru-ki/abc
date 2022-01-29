@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menu</title>
    </head>
    <body>
        <h1>YNU メニュー</h1>
        <form action="/menus" method="POST" enctype="multipart/form-data"  >
            @csrf
            <div class="name">
            
                <h2>メニュー名</h2>
                <input type="text" name="menu[name]" placeholder="メニュー名" value="{{ old('menu.name') }}"/>
                <p class="name__error" style="color:red">{{ $errors->first('menu.name') }}</p>
                
                <h2>値段（税込み）</h2>
                <textarea name="menu[price]" placeholder="値段">{{ old('menu.price') }}</textarea>
                <p class="price__error" style="color:red">{{ $errors->first('menu.price') }}</p>
                
                


            
            <h2>写真</h2>
                <input type="text" name="menu[picture]" placeholder="写真" value="{{ old('menu.picture') }}"/>
                <p class="picture__error" style="color:red">{{ $errors->first('menu.picture') }}</p>
            
               
            
            
            <div class="body">
                <h2>詳細</h2>
                <textarea name="menu[explain]" placeholder="男性人気No.1">{{ old('menu.explain') }}</textarea>
                <p class="explain__error" style="color:red">{{ $errors->first('menu.explain') }}</p>
                

                
                <h2>お勧め</h2>
                <textarea name="menu[recommend]" placeholder="お勧め=1 or その他=0">{{ old('menu.recommend') }}</textarea>
                <p class="recommend__error" style="color:red">{{ $errors->first('menu.recommend') }}</p>
                
                
            
                
                
                
            </div>
            <input type="submit" value="保存"/>
            

            
            
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>

@endsection