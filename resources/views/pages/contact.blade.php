<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Pacifico&family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Pacifico&family=Roboto+Mono:wght@200&display=swap');

        /* Height for devices larger than 576px */



        .navbar .nav-link {
            color: #fff !important;
        }

        .bg-image .imgfrigate {
            width: 1440px;
            height: 500px;
            margin-top: -158px;
        }

        .bg-image .font1 {
            margin-left: 230px;
            margin-top: -65px;
            color: white;
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <div class="bg-image">
        <img class="imgfrigate" src="dist/img/frigate.jpg">
        <h1 class="font1">Contact Us</h1>
    </div>

    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
            <!--Section: Content-->
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                            <img src="dist/img/g20.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 gx-5 mb-4">
                        <h4><strong>Commonwealth And Defence Force Indonesia</strong></h4>
                        <p class="text-muted">
                            The Commonwealth Indonesia investigates complaints from the general public about the administrative actions of the Department. The Defence Force Indonesia investigates complaints from serving member, former members and the families of present and former Indonesia Defence Force members.
                        </p>
                        <p><strong>Defence Legal?</strong></p>
                        <p class="text-muted">
                            For Defence Legal contact information, including address details for Court orders for production of documents (e.g. Subpoenas, Notices to Produce or Summonses).
                        </p>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>Let us help you find the right area to contact.
                    </strong></h4>

                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title">South Korea Office</h5>
                                <p class="card-text">
                                    +82-10-6203-3087
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Jakarta Office</h5>
                                <p class="card-text">
                                    +021 8700 60
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title">Brussels Office</h5>
                                <p class="card-text">
                                    +32 81 00 00 00
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
</body>