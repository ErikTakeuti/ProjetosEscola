<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper red lighten-2">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">HOME</a></li>
                    <li><a href="badges.html">CADASTRO</a></li>
                    <li><a href="collapsible.html">EXIBIR</a></li>
                </ul>
            </div>
        </nav>
        <div class="countainer">
            <div class="carousel carousel-slider">
                <a class="carousel-item" href="#one!"><img src="img/download (6).jpg"></a>
                <a class="carousel-item" href="#two!"><img src="img/images (1).jpg"></a>
                <a class="carousel-item" href="#three!"><img src="img/images.jpg"></a>
                <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $('.carousel.carousel-slider').carousel({fullWidth: true});
        </script>
    </body>
</html>