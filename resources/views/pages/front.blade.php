<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Pacifico&family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body onload="slider()">
    <div class="banner">
        <div class="slider">
            <img src="dist/images/aircraftcarr.jpg" id="slideImg">
        </div>
        <div class="overlay">
            <div class="navbar">
                <div class="logo">
                    <img src="dist/img/tnial.png">
                </div>


                @if (Auth::check())
                <div class="menu-icons">
                    <a href="/about">
                        <h1 class="bi bi-file-earmark-person-fill" id="texticon"></h1>
                        </h1>
                    </a>
                    <a href="/contact">
                        <h1 class="bi bi-person-lines-fill" id="texticon"></h1>
                    </a>
                    <a href="/blog">
                        <h1 class="bi bi-file-earmark-post-fill" id="texticon"></h1>
                    </a>
                </div>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" style="background-color:transparent;margin-left:20px;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h2 class="bi bi-person-circle" width="100px" height="100px"></h2>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>

                        <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>

                        <a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a>

                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>

                    </div>
                </div>
                @else
                <div class="menu-icons">
                    <a href="/about">
                        <h1 class="bi bi-file-earmark-person-fill" id="texticon"></h1>
                        </h1>
                    </a>
                    <a href="/contact">
                        <h1 class="bi bi-person-lines-fill" id="texticon"></h1>
                    </a>
                    <a href="/blog">
                        <h1 class="bi bi-file-earmark-post-fill" id="texticon"></h1>
                    </a>
                    <a href="{{url('/login')}}">
                        <h1 class="bi bi-door-open" id="texticon"></h1>
                    </a>
                </div>
                @endif
            </div>
            <div class="content">
                <h1>WELCOME TO
                </h1>
                <h3>
                    Ard Ministry Of Defence
                </h3>
            </div>
        </div>
    </div>


    <div class="banner">
        <div class="slider">
            <img src="dist/img/bg-pattern-grey.svg" id="slideImg2">
        </div>
        <div class="container">
            <div class=" row">
                <div class="col">
                    <h1 style="font-family:oswald,sans-serif;" class="h1exp">Explore Our Stories</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @foreach($posts as $post)
                    <div class=" card mx-3 bg-light rounded" style="width: 20rem; height: auto;margin-right:auto;margin-top:30px;">
                        <img class="card-img-top img-fluid image-size" src="{{url('images',$post->image)}}" width="50px" alt="image">
                        <div class="card-body">
                            <div class="tags d-flex" s>
                                <p style="color:#A84420">Categories</p>
                                <p style="margin-left:auto;">News</p>
                            </div>
                            <h3>{{ $post->title }}</h3>
                            <p class=" card-text">{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                            <a href="{{ url('blog/'.$post->slug) }}" class="stretched-link"></a>
                            <p style="color:grey;margin-top:20px;" class="bi bi-tags-fill"> </i>
                        </div>
                    </div>
                    @endforeach

                </div>

                <div class="col-4">


                    <div class="p-4 mb-3 bg-secondary bg-gradient text-white" style="margin-top:23px;">
                        <h4 class="font-italic" style="text-align:center;">Latest Member</h4>
                        <hr>
                        <!--Make a list of all the members-->
                        <ol class="list-unstyled mb-0">
                            @foreach($users as $user)
                            <li><a href="#" class="text-white">{{ $user->name }}</a></li>
                            @endforeach
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <h1 style="text-align:center;font-weight:100;"> Defence Images</h1>
                </div>
            </div>
            <div class="row">
                <div class="col mx-5 px-5">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="dist/img/f15.jpg" class="d-block w-100" alt="apache">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="font-weight-bold" style="font-size:35px;">F-15 Strike Eagle</h5>
                                    <p>The McDonnell Douglas (now Boeing) F-15E Strike Eagle is an American all-weather multirole strike fighter[8] derived from the McDonnell Douglas F-15 Eagle. The F-15E was designed in the 1980s for long-range, high-speed interdiction without relying on escort or electronic-warfare aircraft. United States Air Force (USAF) F-15E Strike Eagles can be generally distinguished from other US Eagle variants by darker aircraft camouflage, conformal fuel tanks (CFTs) mounted along the engine intake ramps (although CFTs can also be mounted on earlier F-15 variants) and a tandem-seat cockpit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="dist/img/humvee.jpg" class="d-block w-100" alt="himars">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="font-weight-bold" style="font-size:35px;">Humvee</h5>
                                    <p>The High Mobility Multipurpose Wheeled Vehicle (HMMWV; colloquial: Humvee) is a family of light, four-wheel drive, military trucks and utility vehicles produced by AM General</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="dist/img/f35.jpg" class="d-block w-100" alt="mig31">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="font-weight-bold" style="font-size:35px;">F35</h5>
                                    <p>US Multirole Jet Fighter</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="dist/img/ship.jpg" class="d-block w-100" alt="ship">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="font-weight-bold" style="font-size:35px;">Reagan Replenishment</h5>
                                    <p>The aircraft carrier USS Ronald Reagan conducts a replenishment-at-sea with the Military Sealift Command dry cargo and ammunition ship USNS Carl Brashear in the Philippine Sea, Nov. 28, 2022.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="dist/img/m1.jpg" class="d-block w-100" alt="m1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="font-weight-bold" style="font-size:35px;">M1 Abrams</h5>
                                    <p>Soldiers watch two Polish Mi-24 helicopters fly overhead during the Bull Run live-fire exercise in Bemowo Piskie, Poland, Nov. 17, 2022. The troops are working alongside NATO allies and regional security partners to provide combat-credible forces to V Corps, America's forward deployed corps in Europe.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row2">
            <div class="col2" style="background-color:#131313;margin-left:auto;margin-top:20px;">
                <h2 style="padding-top:40px;text-align:center;font-weight:100;color:white;">Equipping Defence </h2>

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <img src="dist/img/darkstar72.jpg" class="card-img-top" alt="">
                                    <div class="card-body bg-dark">
                                        <h5 class="card-title">UAV</h5>
                                        <p class="card-text">The Lockheed Martin SR-72, colloquially referred to as "Son of Blackbird",[1] is an American hypersonic UAV </p>
                                    </div>
                                </div>
                                <div class="card d-none d-md-block">
                                    <img src="dist/img/b21raider.jpeg" class="card-img-top" alt="">
                                    <div class="card-body bg-dark">
                                        <h5 class="card-title">Stealth Bomber</h5>
                                        <p class="card-text">The Northrop (later Northrop Grumman) B-2 Spirit, also known as the Stealth Bomber, is an American heavy strategic bomber, featuring low observable stealth technology designed for penetrating</p>
                                    </div>
                                </div>
                                <div class="card d-none d-md-block">
                                    <img src="dist/img/s400.png" class="card-img-top" alt="">
                                    <div class="card-body bg-dark">
                                        <h5 class="card-title">Missile System</h5>
                                        <p class="card-text">The S-400 Triumf (Russian: C-400 Триумф – Triumf; translation: Triumph; NATO reporting name: SA-21 Growler), previously known as the S-300 PMU-3,[2] is a mobile, surface-to-air missile (SAM) system
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <img src="dist/img/radar.jpeg" class="card-img-top" alt="">
                                    <div class="card-body bg-dark">
                                        <h5 class="card-title">Radar</h5>
                                        <p class="card-text">The 96L6 is an all-altitude surveillance radar intended specially to detect ballistic missiles as well as hypersonic missiles and aircraft flying at very high altitudes. It is integrated onto an 8x8 wheeled chassis similar to the one employed by the 92N6 multi-role fire control radar.</p>
                                    </div>
                                </div>
                                <div class="card d-none d-md-block">
                                    <img src="dist/img/himars.jpg" class="card-img-top" alt="">
                                    <div class="card-body bg-dark">
                                        <h5 class="card-title">Artillery</h5>
                                        <p class="card-text">The M142 HIMARS (M142 High Mobility Artillery Rocket System) is a light multiple rocket launcher developed in the late 1990s for the United States Army and mounted on a standard United States Army Family of Medium Tactical Vehicles (FMTV) truck frame.</p>
                                    </div>
                                </div>
                                <div class="card d-none d-md-block">
                                    <img src="dist/img/sattellite.jpeg" class="card-img-top" alt="">
                                    <div class="card-body bg-dark ">
                                        <h5 class="card-title">Satellite</h5>
                                        <p class="card-text">A military satellite is an artificial satellite used for a military purpose. The most common missions are intelligence gathering, navigation and military communications.The first military satellites were photographic reconnaissance missions. As of 2013, there are 950 satellites.

                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>



        <!-- TODO:Make Carousel -->



        <!--
    <div class=" container">
                    <div class="row">
                        <div class="col">
                            <h1 class="h1exp">Explore Our Stories</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            @foreach($posts as $post)
                            <div class="card" style="width: 20rem;margin-right:auto;">
                                <img class="card-img-top img-fluid image-size" src="{{url('images',$post->image)}}" width="50px" alt="image">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                                    </div>
                    </div>
                    <br>
                    @endforeach
                </div>
                <div class="col-4">
                    <div class="card p-4 bg-light rounded" style="margin-top:50px;">
                        <div class="card-body">
                            <h5>TOP Post from @IndonesiaDefence</h5>
                            <hr>
                            @foreach($posts as $post)
                            <img class="card-img-top img-fluid image-size" src="{{url('images',$post->image)}}" width="50px" alt="image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                                <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                            </div>
                            <hr>

                            @endforeach
                        </div>
                    </div>
                    <div class="p-4 mb-3 bg-secondary bg-gradient text-white" style="margin-top:23px;">
                        <h4 class="font-italic" style="text-align:center;">Member Active</h4>
                        <hr>
                        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
        -->


        <script>
            var slideImg = document.getElementById("slideImg");
            var images = new Array(
                "dist/img/aircraftcarr.jpg",
                "dist/img/mig31.jpg",
                "dist/img/g20.jpg",
            );
            var len = images.length;
            var i = 0;

            function slider() {
                if (i > len - 1) {
                    i = 0;
                }
                slideImg.src = images[i];
                i++;
                setTimeout('slider()', 3000);
            }
        </script>
</body>

</html>