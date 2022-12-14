<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Post;

use App\Category;

use App\Tag;

use Session;

use Purifier;

use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts = Post::paginate(3);

  

        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories = Category::all();

        $tags = Tag::all();

        return view('posts.create',compact('categories','tags'));
    }


        public function store(Request $request)
    {

        $formInput=$request->except('image');
        
        //
         $this->validate($request, [
        'title'       => 'required|max:255',
        'slug'        => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
        'category_id' => 'required|integer',
        'body'        => 'required',
        'image'=>'image|mimes:png,jpg,jpeg|max:10000']);


        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }
     
    
        

        $post = Post::create($formInput);
   
         $post->tags()->sync($request->tags, false);
  
         Session::flash('success', 'The blog post was successfully saved!');


         return redirect()->route('posts.show', $post->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
    {
        $post = Post::find($id);
        //

        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        //

        $categories = Category::all();


        $showcat = [];

        foreach ($categories as $category) {

          $showcat[$category->id] = $category->name;
        }



         $tags = Tag::all();
        $showtags = [];

        foreach ($tags as $tag) {
        
           $showtags[$tag->id] = $tag->name;
        }


        return view('posts.edit',compact('post', 'showcat', 'showtags'));

    }

















    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, $id)
    {
      

        // Save the data to the database
       $post = Post::find($id);




       if ($request->input('slug') == $post->slug) {
             $this->validate($request, [
             'title' => 'required|max:250',
             'category_id' => 'required|integer',
             'body' => 'required']);

        } else {
        // Validate the data
              $this->validate($request, [
              'title' => 'required||max:255',
              'slug' => 'required|alpha_dash|min:5|max:250|unique:posts,slug',
              'category_id' => 'required|integer',
              'body' => 'required']);
       }


       $post->title = $request->input('title');
       $post->slug = $request->input('slug');
     
       $post->category_id = $request->input('category_id');
       $post->body = Purifier::clean($request->input('body'));
       $post->save();

       $post->tags()->sync($request->tags);

        // set flash data with success message

       Session::flash('successaction', 'The blog post was successfully saved!');

        // redirect with flash data to posts.show


      return redirect()->route('posts.show', $post->id);
    }

































    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        //
         //
         $post = Post::find($id);


         $post->tags()->detach();

         $post->delete();

          Session::flash('successaction', 'This post was successfully deleted.');

         return redirect()->route('posts.index');
    }


}


































