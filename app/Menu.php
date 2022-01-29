<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
   use SoftDeletes;
   
   public function getPaginateByLimit(int $limit_count = 4)
   {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
   }
   
   protected $fillable = [
    'name',
    'price',
    'picture',
    'explain',
    'recommend',
        'comment1',
  'comment2',
  ];
 
 //Categoryに対するリレーション

//「1対多」の関係なので単数系に
public function comment()
{
    return $this->belongsTo('App\Comments');
}
 
   
}
