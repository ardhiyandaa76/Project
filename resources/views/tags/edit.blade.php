@extends('master')





    @section('content') 



      <div class="row">


 


    <div class="col-md-12">

    
     {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT'])  !!}
           {{ Form::label('name', 'Title:') }}
    <h1>{{ Form::text('name', null, ["class" => 'form-control input-lg']) }}</h1>
        



 



        {{ Form::submit('Submit', array('class' => 'btn btn-primary btn btn-block')) }}
           

     {!! Form::close() !!}


     

    </div>

   


</div>





    @endsection
