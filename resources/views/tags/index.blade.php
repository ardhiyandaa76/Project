@extends('master')







@section('content')




<div class="row">


    <div class="col-md-8">
        <h1>Tags</h1>




        <!-- INVERSE/DARK TABLE -->
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tags Link</th>
                    <th>Tags</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($tags as $tag)
                <tr>
                    <th>{{ $tag->id }}</th>
                    <th><a href="{{  route('tags.show', $tag->id)  }}">{{ $tag->name }}</a></th>
                    <td>{{ $tag->name }}</td>
                    <!-- Make a delete button -->
                    <td>
                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!}
                    </td>
                    <!-- Make a edit button -->
                    <td>
                        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-block">Edit</a>
                    </td>

                </tr>

                @endforeach

            </tbody>
        </table>

    </div>


    <div class="col-md-3">


        {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}

        <h2>New Tag</h2>


        {{ Form::label('name', 'Name:')  }}
        {{ Form::text('name', null, ['class' => 'form-control'])  }}

        <br>

        <br>

        {{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block']) }}


        {!! Form::close() !!}

    </div>


</div>








@endsection