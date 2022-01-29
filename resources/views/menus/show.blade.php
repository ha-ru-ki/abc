@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Menus</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="name">
            {{ $menu->name }}
        </h1>
        <div class="content">
            <div class="content__post">
                
                <p>{{ $menu->body }}</p>    
                <img src= "{{ $menu->picture }}" width="100px" height="100px"></a>
                <p>{{ $menu->price }}円(税込み)</p>   
                 <p>{{ $menu->explain }}</p>   
                
               
                    <div class="card-header text-center">
                   
                    </div>     
       
          
        <div> 
            <a class="name1">
            {{ $menu->comment2 }}
            </a>
        </div>
    
            </div>
        </div>
        
        <p class="edit">[<a href="/menus/{{ $menu->id }}/edit">edit</a>]</p>
        
                
        <form action="/menus/{{ $menu->id }}" id="form_delete" method="post">   
            {{@csrf_field()}}
            @method("delete")
            <input type="submit" style="display:none">
            <p class="delate">[<span onclick="return deletePost(this);">delete</span>]</p>
        </form>
        
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    <div class="footer">
        <p class="edit">[<a href="/menus/{{ $menu->id }}/comment">create comment</a>]</p>   
    </div> 
     
     
  <div>        
            <h4>レビュー</h4>
            <a class="name">
            {{ $menu->comment1 }}
            {{ $menu->created_at }}
           <p>投稿者：{{Auth::user()->name}}　学部4年生男性</p>
            </a>
        </div>  
        
        
    </body>
    
    
          <script>
            function deletePost(e){
                "use strict";
                if (confirm("削除すると復元できません。\n本当に削除しますか？")){
                    document.getElementById("form_delete").submit();
                }
                
            }
         </script>
         
</html>

@endsection
