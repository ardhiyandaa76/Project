@extends('master')


  @section('content') 


<div class="row">
   <div class="container">

   <h1>Are you Sure you want to delete?</h1>

   <p>
   <strong>Name:</strong> {{ $comment->name }}<br>
   <strong>Email:</strong> {{ $comment->email }}<br>

   <strong>Comment:</strong> {{ $comment->comment }}
   </p>


  {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
        {{ Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-lg btn-block btn-danger']) }}
      {{ Form::close() }}

   </div>

</div>


  @endsection


