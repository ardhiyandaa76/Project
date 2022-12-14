@extends('master')






@section('content')



<div class="row">





  <div class="col-md-12">


    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}


    {{ Form::label('title', 'Title:') }}






    <h1>{{ Form::text('title', null, ["class" => 'form-control']) }}</h1>

    {{ Form::label('slug', 'Slug:') }}
    <h1>{{ Form::text('slug', null, ["class" => 'form-control']) }}</h1>



    {{ Form::label('category_id', 'Category:') }}
    {{ Form::select('category_id', $showcat, null, ['class' => 'form-control']) }}


    {{ Form::label('tags', 'Tags:')}}
    {{ Form::select('tags[]', $showtags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}


    <br>
    {{ Form::label('body', "Body:")}}
    {{ Form::textarea('body', null, ['class' => 'form-control'])  }}



    <div class="well">


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

    <a href="{{route('posts.show',$post->id)}}" class="btn btn-danger btn-block">Cancel</a>





    {{ Form::submit('Submit', array('class' => 'btn btn-primary btn btn-block')) }}

    {!! Form::close() !!}




  </div>




</div>





@endsection