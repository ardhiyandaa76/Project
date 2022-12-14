 @extends('master')







  @section('content') 

  <div class="row">

    <div class="col-md-8">


    <!-- HEADER, FOOTER, CENTERED -->
        <div class="card text-center">
            <div class="card-header">
               This is the Blog Post
            </div>
            <div class="card-body">

              <img class="card-img-top img-fluid" src="{{url('images',$post->image)}}" width="50px" alt="image">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{!! $post->body !!}</p>
                <a class="btn btn-dark" href="#">Read More</a>
            </div>
            <div class="card-footer text-muted">
               
            </div>


            <div class="card-footer text-muted">
                
            </div>
        </div>

        <br>
        <br>

      <div id="backend-comments" style="margin-top: 50px;">

   <h3>Comments <small>{{ $post->comments()->count() }} total</small></h3>





     <!-- INVERSE/DARK TABLE -->
        <table class="table table-dark">
            <thead>
                <tr>
                 
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th width="60px"></th>
                </tr>
            </thead>
            <tbody>

              @foreach ($post->comments as $comment)
                <tr>
                   
                    <td>{{ $comment->name }}</td>
                    
                  <td>{{ $comment->email }}</td>

                  <td>{{ $comment->comment }}</td>


                  <td>
                   <a class="btn btn-primary" href="{{ route('comments.edit', $comment->id) }}"><i class="fa fa-edit"></i></a>
                   
                   <a href="{{ route('comments.delete', $comment->id) }}"><i class="fa fa-trash-alt"></i>Delete</a>

                
                  </td>
                </tr>
              @endforeach 
            </tbody>
        </table>





</div>
    
</div> 

    <div class="col-md-4">


      <div class="p-4 mb-3 bg-light rounded">
    <div class="d-flex">

              <div class="p-4 align-self-start">
                <p>Url:</p>
              </div>
              <div class="p-4 align-self-end">
            

               <p><a href="{{ route('blog.comment', $post->slug) }}">{{ url($post->slug) }}</a> </p>
              </div>


            </div>

          </div>
     

       <div class="p-4 mb-3 bg-light rounded">
    <div class="d-flex">

              <div class="p-4 align-self-start">
                <p>Category:</p>
              </div>
              <div class="p-4 align-self-end">
            

               <p>{{  $post->category->name }}</p>
              </div>


            </div>

          </div>




        <div class="p-4 mb-3 bg-light rounded">
    <div class="d-flex">
              <div class="p-4 align-self-start">
                <p>Created At:</p>
              </div>
              <div class="p-4 align-self-end">
               

               <p>{{ date('M j, Y h:ia', strtotime($post->created_at) ) }}</p>
              </div>
          </div>
    </div>

   <div class="p-4 mb-3 bg-light rounded">
    <div class="d-flex">
              <div class="p-4 align-self-start">
                <p>Last Updated:</p>
              </div>
              <div class="p-4 align-self-end">
               

                <p>{{ date('M j, Y h:ia', strtotime($post->updated_at) ) }}</p>
              </div>
          </div>
    </div>




    </div>







    <hr>


   <div class="row">

    <div class="col-md-6">
     
     
     <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-block">Edit</a>

    </div>

      <div class="col-md-6">

        


         {!! Form::open(['method'=>'DELETE', 'action'=> ['PostController@destroy', $post->id]]) !!}


                  <td>  {!! Form::submit('Delete Post', ['class'=>'btn btn-danger btn-block']) !!}</td> 



          {!! Form::close() !!}

    </div>


     <br>

      <br>

        <br>

    <div class="col-md-12">

       <a href="{{route('posts.index',$post->id)}}" class="btn btn-primary btn-block">See All Posts</a>
    </div>


   </div>

  @endsection