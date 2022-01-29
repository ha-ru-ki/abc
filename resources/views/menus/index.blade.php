@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Menu</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>学食メニュー</h1>
        [<a href='/menus/create'>create</a>]
        <div class='menus'>
             @foreach ($menus as $menu)
                <div class='menu'>
                
                     <h2 class='name'>
                        <a href="/menus/{{ $menu->id }}">{{ $menu->name }}</a>
                    </h2>
                    
                     <img src= "{{ $menu->picture }}" width="100px" height="100px"></a>
                    

                    <p class='explain'>{{ $menu->price }}円 (税込み)</p>
                    
                    
                    
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $menus->links() }}
        </div>
        



        
    </body>
</html>

@endsection