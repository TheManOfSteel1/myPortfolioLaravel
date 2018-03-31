<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <title>My New Portfolio @yield('title')</title>
    <style>
    body {
      background:url(../images/aboutbackgroundpic.jpg) no-repeat !important;

      background-size:cover;
    }

    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light text-center" class="nav-item hvr-float-shadow">
    <a style="color: white" class="navbar-brand" href="#">&nbspMy Porfolio </br>Javier Duarte</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a style="color: white" class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a style="color: white" class="nav-link" href="/about">Education</a>
            </li>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Projects
                </button>
                <div class="dropdown-menu bg-dark text-center" aria-labelledby="dropdownMenu2">
                    <li>

                        <a class="nav-item" "nav-link" href="https://protected-harbor-70739.herokuapp.com/">1 Stop Music</a> </br>
                        <a class="nav-item" "nav-link" href="https://git.heroku.com/thawing-castle-40650.git"> 504 Sports</a> </br>
                        <a class="nav-item" "nav-link" href="/project3"> Project 3</a>
                    </li>

                </div>
            </div>


            <li class="nav-item">
                <a style="color: white" class="nav-link" href="/contact">Contact Info</a>
            </li>
        </ul>
        <span class="navbar-text">
            <img src="../images/schoollogo.png" width="300" height="100"></br>
        </span>
    </div>
</nav>
<div class='container'>

    @yield('content')

</div>

<body>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>
