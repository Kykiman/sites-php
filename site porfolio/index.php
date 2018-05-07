<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/blockScroll.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Kylian Manzini - Homepage</title>
    </head>
    <body>
        <div id="main-wrap">
            <div class="container monospace">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="vert">>
                            <span class="typing"></span></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        <h3 class="vert">>kylian manzini</h3>
                        <h3>>a swiss guy</h3>
                        <h3>>a student in</h3>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4>>graphic design</h4>
                            <h4>>web developpement</h4>
                            <h4>>marketing</h4>
                        </div>
                        <h3>>a polyvalent guy</h3>
                        <h3>>a fast learner</h3>
                        <h3>>a futur web developper</h3>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1>Projects</h1>
                        <p>
                            List of my projects :</p>
                    </div>
                </div>

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="la.jpg" alt="Los Angeles">
                        </div>

                        <div class="item">
                            <img src="chicago.jpg" alt="Chicago">
                        </div>

                        <div class="item">
                            <img src="ny.jpg" alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/blockScroll.js"></script>
        <script src="js/typed.min.js"></script>
        <script>
            var typed = new Typed('.typing', {
                strings: ["Who am I ?"],
                typeSpeed: 100,
                startDelay: 1000,
                loop: false
            });
            $(function () {
                var blockScroller = $("#main-wrap").blockScroll();
            });
        </script>
    </body>
</html>