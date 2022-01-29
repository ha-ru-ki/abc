@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/menus/{{ $menu->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__name'>
                <h2>メニュー名</h2>
                <input type='text' name='menu[name]' value="{{ $menu->name }}">
            </div>
    

            
            <div class='content__price'>
                <h2>値段（税込み）</h2>
                <input type='text' name='menu[price]' value="{{ $menu->price }}">
            </div>
            
             <div class='content__picture'>
                <h2>写真</h2>
                <input type='text' name='menu[picture]' value="{{ $menu->picture }}">
            </div>
            
            
            <div class='content__explain'>
                <h2>詳細</h2>
                <input type='text' name='menu[explain]' value="{{ $menu->explain }}">
            </div>
            

            
            <div class='content__recommend'>
                <h2>お勧め!</h2>
                <input type='text' name='menu[recommend]' value="{{ $menu->recommend }}">
            </div>
            
            
       
            
        
            
            <input type="submit" value="保存">
        </form>
    </div>
</body>

@endsection