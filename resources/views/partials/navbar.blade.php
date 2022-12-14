  <!-- NAVBAR WITH RESPONSIVE TOGGLE -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-3">
    <div class="container">
      <img src="dist/img/tnial.png" alt="himars" width="60" height="60" style="margin-right:0px;">
      <a class=" navbar-brand" href="/">Ard Ministry Of Defence</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/blog">Article</a>
          </li>



          @if (Auth::check())
          <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My Account
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>

              <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>

              <a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a>

              <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>

            </div>
          </div>
          @else
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">

            <li class="nav-item">
              <a class="nav-link" href="{{url('/login')}}">Login</a>
            </li>

            </li>
          </ul>
          @endif

      </div>
    </div>
  </nav>