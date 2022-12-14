@extends('master')


 

  @section('content') 


  <div class="row">

    <div class="col-md-8">

   <h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>

  

   <br>

   <!-- INVERSE/DARK TABLE -->
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Tags</th>
                  
                </tr>
            </thead>
            <tbody>

              @foreach ($tag->posts as $post)
                <tr>

                  
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>@foreach ($post->tags as $tag)

                         <span class="label label-default">{{ $tag->name }}</span>
                        @endforeach
                    </td>

                    <td><a href="{{ route('posts.show',$post->id)}}" class="btn btn-danger">View Post</a></td>
                     
                </tr>
                 @endforeach 
            </tbody>
        </table>


   </div>

   <div class="col-md-4">
  

  <div class="well">
    

    <div class="p-4 mb-3 bg-light rounded">
    <div class="d-flex">

              <div class="p-4 align-self-start">
                <p>Url:</p>
              </div>
              <div class="p-4 align-self-end">
            

               <p></p>
              </div>


            </div>

          </div>


     <div class="p-4 mb-3 bg-light rounded">
    <div class="d-flex">

              <div class="p-4 align-self-start">
                <p>Category:</p>
              </div>
              <div class="p-4 align-self-end">
            

               <p></p>
              </div>


            </div>

          </div>


 <div class="p-4 mb-3 bg-light rounded">
    <div class="d-flex">

              <div class="p-4 align-self-start">
                <p>Created At:</p>
              </div>
              <div class="p-4 align-self-end">
            

               <p></p>
              </div>
          </div>
    </div>

   <div class="p-4 mb-3 bg-light rounded">
    <div class="d-flex">
              <div class="p-4 align-self-start">
                <p>Last Updated:</p>
              </div>
              <div class="p-4 align-self-end">
              

                <p></p>
              </div>
          </div>
    </div>

  

</div>


   <hr>


   <div class="row">

    <div class="col-md-6">
     
     
      <h1><a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-danger btn-sm">Edit Tag</a></h1>

      
      {!! Form::open(['method'=>'DELETE', 'action'=> ['TagController@destroy', $tag->id]]) !!}


      {!! Form::submit('Delete Tag', ['class'=>'btn btn-danger btn-block']) !!} 



      {!! Form::close() !!}




    </div>

      <div class="col-md-6">

       









    </div>


    <br>

      <br>

        <br>

   

   </div>
   
</div>

</div>


@endsection