<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //Postに対するリレーション

//「1対多」の関係なので'posts'と複数形に
public function menus()   
{
    return $this->hasMany('App\Menu');  
}


}
