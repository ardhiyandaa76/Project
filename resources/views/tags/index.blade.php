@extends('master')







  @section('content') 




    <div class="row">


        <div class="col-md-8">
          <h1>Tags</h1>




           <!-- INVERSE/DARK TABLE -->
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                
                </tr>
            </thead>
            <tbody>

                @foreach ($tags as $tag)
                <tr>
                    <th>{{ $tag->id }}</th>
                    <th><a href="{{  route('tags.show', $tag->id)  }}">{{ $tag->name }}</a></th>
                    <td>{{ $tag->name }}</td>
                    
                </tr>

                @endforeach
               
            </tbody>
        </table>

        </div>


       <div class="col-md-3">


        {!!  Form::open(['route' => 'tags.store', 'method' => 'POST'])  !!}

         <h2>New Tag</h2>


         {{  Form::label('name', 'Name:')  }}
         {{  Form::text('name', null, ['class' => 'form-control'])  }}

         <br>

         <br>

         {{  Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block']) }}


        {!!  Form::close()  !!}

      </div>


    </div>








@endsection
