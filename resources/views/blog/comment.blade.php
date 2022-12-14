@extends('master')


@section('content')


<div class="row">

  <div class="col-md-8 col-md-offset-2">
       

       <div class="card">
                <div class="card-header">
                
                </div>
                <div class="card-body">
                   
                    <p class="card-text">{{  $post->title }}</p>
                    <p>{!!  $post->body !!}</p>


                    <hr>


                    <p>Posted:  {{ $post->category->name }}</p>
                   
                    <br>

                    <hr>
                   <h1>Comments</h1>
                    @foreach($post->comments as $comment)
                    <div class="card">
                    <div class="card-header">
                  
                   </div>
                   <div class="card-body">
                   <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=identicon" }}" class="gravatar-image">
                   <h4>Name: {{ $comment->name }}</h4>
                    <p>Comment: {{ $comment->comment }}</p>


                 </div>

                 </div>

                   @endforeach

                   <br>

                  <hr>



                    {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}
   
    <!-- CARD WITH HEADER -->
        <div class="card">
            <div class="card-header">
                My Card
            </div>
            <div class="card-body">
               
                {{ Form::label('name', "Name:") }}
                {{ Form::text('name', null, ['class' => 'card-text','style' => 'width:100%']) }}


                {{ Form::label('email', 'Email:') }}
                {{ Form::text('email', null, ['class' => 'card-text','style' => 'width:100%']) }}


                {{ Form::label('comment', "Comment:") }}
                {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

                {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
            </div>
        </div>

        <br>
        <br>
      {{ Form::close() }}
                   

                      <div class="d-flex">
              <div class="p-4 align-self-start">



           

                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm" >View</a>


                    </div>

                    <div class="p-4 align-self-end">
                  
                      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">Edit</a>

                   </div>

               </div>

                </div>
            </div>


   </div>
</div>







@endsection