<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable=['title','slug','category_id','image','body'];

   public function category()
    {
        return $this->belongsTo('App\Category');
    }


     public function tags()
    {
   
         return $this->belongsToMany('App\Tag', 'post_tag', 'post_id');
    }


       public function comments()
    {
   
         return $this->hasMany('App\Comment');

    }


}
