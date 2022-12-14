  @extends('master')






  @section('content')


  <div class="container">

    <!-- FORM -->
    {!! Form::open(['route' => 'posts.store', 'method' => 'post', 'files' => true, 'data-parsley-validate' => '']) !!}

    <div class="form-group">
      {{ Form::label('title', 'Title:') }}
      {{ Form::text('title', null, array('class' => 'form-control','required'=>'','required'=>'','minlength'=>'3', 'maxlength'=>'210')) }}
    </div>


    <div class="form-group">
      {{ Form::label('slug', 'Slug:') }}
      {{ Form::text('slug', null, array('class' => 'form-control','required'=>'','maxlength'=>'250')) }}
    </div>

    <div class="form-group">
      {{ Form::label('category_id', 'Category:') }}
      <select class="form-control" name="category_id">


        @foreach($categories as $category)
        <option value='{{ $category->id }}'>{{ $category->name }}</option>

        @endforeach

      </select>
    </div>


    <div class="form-group">
      {{ Form::label('tags', 'Tags:') }}
      <select class="form-control select2-multi" name="tags[]" multiple="multiple">


        @foreach($tags as $tag)
        <option value='{{ $tag->id }}'>{{ $tag->name }}</option>

        @endforeach

      </select>
    </div>

    {{ Form::label('image', 'Upload Image:') }}

    {{ Form::file('image') }}

    <div class="form-group">
      {{ Form::label('body', 'Post Body:') }}
      {{ Form::textarea('body', null, array('class' => 'form-control','required'=>'','minlength'=>'3', 'maxlength'=>'3000')) }}
    </div>


    {{ Form::submit('Create New Post', array('class' => 'btn btn-primary btn-block', 'style' => 'marging-top: 20px;')) }}


    {!! Form::close() !!}


  </div>


  @endsection






  @yield('scripts')


  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'link code',
      menubar: false
    });
  </script>