<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <link href="{{asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">


    <link href="{{asset('dist/css/parsley.css')}}" rel="stylesheet">

    <link href="{{asset('dist/css/select2.min.css')}}" rel="stylesheet">

    <link href="{{asset('dist/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="{{asset('dist/css/styles.css')}}" rel="stylesheet">


</head>

<body>
    @include('partials.navbar')

    @include('partials.blogmessages')

    @yield('content')





    <script src="{{asset('dist/js/jquery.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('dist/js/jquery-3.3.1.slim.min.js')}}"></script>


    <script src="{{asset('dist/js/popper.min.js')}}"></script>


    <script src="{{asset('dist/js/parsley.min.js')}}"></script>

    <script src="{{asset('dist/js/select2.min.js')}}"></script>


    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>






</body>

</html>