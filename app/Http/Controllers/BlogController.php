<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

  public function comment($slug) {
       
       //return $slug;

       $post = Post::where('slug', '=', $slug)->first();


      return view('blog.comment',compact('post'));

    }



   public function index() {

        $posts = Post::paginate(3);



        return view('blog.index',compact('posts'));
    }

}
