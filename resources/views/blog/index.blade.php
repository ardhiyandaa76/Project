@extends('master')
@section('content')

<div class="row">
  <div class="col-md-12">
    <h1>Blog</h1>
  </div>

</div>


@foreach ($posts as $post)
<!-- TODO:FIX DESIGN UI -->
<div class="row">

  <div class="col-md-8 col-md-offset-2">



    <div class="card">
      <div class="card-header">

      </div>
      <div class="card-body">

        <h2 class="card-title">{{ $post->title }}</h2>
        <h5 class="card-text">Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
        <p>{{ substr(strip_tags($post->body), 0, 3000) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

        <a href="{{  route('blog.comment', $post->slug)  }}" class="btn btn-danger">Read More</a>
      </div>

    </div>
  </div>
</div>

</div>
@endforeach

<br>


<br>
<div class="row">

  <div class="col-md-12">

    <div class="text-center">

      {!! $posts->links() !!}

    </div>

  </div>




  @endsection