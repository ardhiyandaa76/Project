<?php

namespace App\Http\Controllers;


use App\Tag;

use Session;

use Illuminate\Http\Request;

class TagController extends Controller
{
    //

    public function __construct()

    {
        $this->middleware('auth');
    }


     public function index()
    {
        
        $tags = Tag::all();

    


        return view('tags.index',compact('tags'));


    }


   public function store(Request $request)
    {
        
         $this->validate($request, [
        'name'       => 'required|max:255']);


         $tag = new Tag;
         $tag->name = $request->name;
        
         $tag->save();

         Session::flash('successaction', 'The Tag was successfully saved!');


         return redirect()->route('tags.index');
    }




    public function show($id)
    {
        $tag = Tag::find($id);


        return view('tags.show',compact('tag'));
       
}



   public function edit($id)

   {

    $tag = Tag::find($id);


    return view('tags.edit',compact('tag'));
   }








       public function update(Request $request, $id)
    {

       $tag = Tag::find($id);


         $this->validate($request, [
        'name'       => 'required|max:255'
       
         ]);


         $tag->name = $request->name;

         $tag->save();


         Session::flash('successaction', 'Tag Successfully Saved ');


         return redirect()->route('tags.show', $tag->id);
    }







    public function destroy($id)
    {
        //
        $tag = Tag::find($id);

        $tag->posts()->detach();



        $tag->delete();

        Session::flash('success', 'Tag Successfully Deleted ');


        return redirect()->route('tags.index');
    }









































































}
