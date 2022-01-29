<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Menu;
use App\Comments;
use Storage;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index(Menu $menu, )
   {
    return view('menus/index')->with(['menus' => $menu->getPaginateByLimit()],);
    
   }
   
   

    
    public function show(Menu $menu)
   {
   return view('menus/show')->with(['menu' => $menu]);
   }
   
    public function create()
   {
    return view('menus/create');
   }
   
   public function store(MenuRequest $request, Menu $menu)
   {
    $input = $request['menu'];
    $menu->fill($input)->save();
    
   //s3に画像を保存。第一引数はs3のディレクトリ。第二引数は保存するファイル。
//第三引数はファイルの公開設定。
 $path = $request['picture'];
 
//カラムに画像のパスとタイトルを保存
   
   
    return redirect('/menus/' . $menu->id);
   
   }
   
   
      public function Commentstore(MenuRequest $request, Menu $comment)
   {
    $input = $request['comment'];
    $comment->fill($input)->save();
 
    return redirect('/menus/' . $menu->id);
   
   }
   
   
   
   
  public function edit(Menu $menu)
  {
    return view('menus/edit')->with(['menu' => $menu]);
  }
  
  
  public function comment()
   {
    return view('menus/comment');;
   }
   
   
   public function update(MenuRequest $request, Menu $menu)
  {
    $input_menu = $request['menu'];
    $menu->fill($input_menu)->save();

    return redirect('/menus/' . $menu->id);
  }
   
   public function delete(Menu $menu)
   {
    $menu->delete();
    return redirect('/');
    }
  
}
 