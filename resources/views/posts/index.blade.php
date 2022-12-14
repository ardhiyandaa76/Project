@extends('master')




  @section('content') 

      <div class="row">

        <div class="col-md-10 blog-main">


            <h1>All Posts</h1>
          <!-- CARD WITH HEADER -->

            @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">
                    My Card
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $post->id }}</h4>
                    <p class="card-text">{{ $post->title }}</p>
                   

                    <p class="card-text">{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</p>



                    <p class="card-text">{{ $post->created_at }}</p>

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

            <hr>
             @endforeach 

             <hr>
              <div class="text-center">
               
               {!! $posts->links(); !!}

               
           </div>

        </div><!-- /.blog-main -->

        <div class="col-md-2">
        
         <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>


        </div><!-- /.blog-sidebar -->

        <hr>
         

     </div>


  @endsection
