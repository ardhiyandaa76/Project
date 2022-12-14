@extends('master')






  @section('content') 




    <div class="row">


        <div class="col-md-8">
          <h1>Categories</h1>




           <!-- INVERSE/DARK TABLE -->
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($categories as $category)
                <tr>
                    <th>{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    
                </tr>

                @endforeach
               
            </tbody>
        </table>

        </div>
         
         <div class="col-md-3">


        {!!  Form::open(['route' => 'categories.store', 'method' => 'POST'])  !!}

         <h2>New Category</h2>


         {{  Form::label('name', 'Name:')  }}
         {{  Form::text('name', null, ['class' => 'form-control'])  }}

         <br>

         <br>

         {{  Form::submit('Create New Category', ['class' => 'btn btn-primary btn-block']) }}


        {!!  Form::close()  !!}

      </div>


    </div>






@endsection




































