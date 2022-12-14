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

        .container .row .col #paragraph {
            margin-left: 70px;
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    <div class="bg-image">
        <img class="imgfrigate" src="dist/img/su30.jpeg">
        <h1 class="font1">Overview</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="font-family:oswald,sans-serif;margin-top:20px;margin-left:70px;">Our mission and purpose</h1>
                <p id="paragraph">Defence's mission and purpose is to defend Indonesia and its national interests in order to<br>advance Indonesia ’s security and prosperity.
                <p id="paragraph">In fulfilling this mission and purpose, Defence serves the Government of the day and is<br>accountable to the Commonwealth Parliament, which represents the Indonesia people, to<br>efficiently and effectively carry out the Government's defence policy.</p>
                <p id="paragraph">Defence defends Indonesia and its national interests through the conduct of operations and<br> provision of support for the Indonesia community and civilian authorities in accordance with <br>Government direction.</p>
                </p>
                <p id="paragraph">
                    Defence protects and advances Indonesia’s strategic interests through the provision of strategic<br> policy, the development, delivery and sustainment of military, intelligence and enabling<br>capabilities, and the promotion of regional and global security and stability as directed by<br>Government.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 style="font-family:oswald,sans-serif;margin-top:20px;margin-left:70px;">Our priorities</h1>
                <p id="paragraph">Defence’s primary roles are to protect and advance Indonesia’s strategic interests through the <br>
                    promotion of security and stability, provide military capabilities to defend Indonesia and its national interests,<br>
                    and support the Indonesian community and civilian authorities as directed by the Government.</p>
                <p id="paragraph">Defence prioritises the preparedness of current capability to meet Government-directed requirements.<br> Concurrently, Defence is also focused on building a more potent, capable and agile future force to<br>better meet and respond to future challenges. This includes using our current capability to shape and deter<br> within our region, and being able to respond with credible military force.</p>

            </div>
        </div>
    </div>




</body>