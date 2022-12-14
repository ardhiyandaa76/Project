<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\User;
use Session;


use Mail;

use Illuminate\Http\Request;

class SitePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('created_at', 'desc')->limit(3)->get();
        //
        $tags = Tag::all();
        $users = User::all();
        return view('pages.front', compact('posts', 'tags', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
    }



    public function about()
    {
        //

        //
        $first = 'Agung';
        $last = 'Ardhiyanda';


        $fullname = $first . " " . $last;

        $email = 'agungardhiyanda25@gmail.com';

        $datainfo = [];


        $datainfo['email'] = $email;

        $datainfo['fullname'] = $fullname;


        #return view('pages.about',compact('fullname','email'));


        return view('pages.about', compact('datainfo'));
    }


    public function contact()
    {
        return view('pages.contact');
    }



    public function makecontact(Request $request)
    {


        $this->validate($request, [

            'email'        => 'required|email',
            'subject'        => 'min:5',
            'message'        => 'min:15'

        ]);


        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'contentofmessage' => $request->message
        );


        Mail::send('emails.contact', $data, function ($message) use ($data) {

            $message->from($data['email']);

            $message->to('agungardhiyanda25@gmail.com');


            $message->subject($data['subject']);
        });


        Session::flash('successaction', 'Your Email was Sent!');

        return view('pages.contact');
    }
}
