<!DOCTYPE HTML>
<html lang="RU">
<head>
    <title>Movie_store A Entertainment Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Movie_store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- start plugins -->
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <script src="/js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
</head>
<body>
<div class="container">
    <div class="container_wrap">
        <div class="header_top">
            <div class="col-sm-3 logo">
                <a href="">
                    <img src="images/logo.png" alt=""/></a>
            </div>
            <div class="col-sm-6 nav">
                <ul>
                    @foreach($categories as $cat => $value)
                        <li>
                            <a href="/category/{{ $cat }}">{{ $value }}</a>
                        </li>
                    @endforeach
                </ul>
                <!--<ul>
                    <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="comic"><a href="movie.html"> </a></span></li>
                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="movie"><a href="movie.html"> </a> </span></li>
                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="video"><a href="movie.html"> </a></span></li>
                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="game"><a href="movie.html"> </a></span></li>
                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="tv"><a href="movie.html"> </a></span></li>
                    <li><span class="simptip-position-bottom simptip-movable" data-tooltip="more"><a href="movie.html"> </a></span></li>
                </ul>-->
            </div>
            @if ($user = 0)
            <div class="col-sm-3 header_right">
                <ul class="header_right_box">
                    <li><img src="images/p1.png" alt=""/></li>
                    <li><p><a href="login.html">Carol Varois</a></p></li>
                    <li class="last"><i class="edit"> </i></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            @else
            <!--user block-->
            @endif
            <div class="clearfix"> </div>
        </div>
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li><img src="images/banner.jpg" class="img-responsive" alt=""/>
                        <div class="button">
                            <a href="#" class="hvr-shutter-out-horizontal">Watch Now</a>
                        </div>
                    </li>
                    <li><img src="images/banner1.jpg" class="img-responsive" alt=""/>
                        <div class="button">
                            <a href="#" class="hvr-shutter-out-horizontal">Watch Now</a>
                        </div>
                    </li>
                    <li><img src="images/banner2.jpg" class="img-responsive" alt=""/>
                        <div class="button">
                            <a href="#" class="hvr-shutter-out-horizontal">Watch Now</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="banner_desc">
                <div class="col-md-9">
                    <ul class="list_1">
                        <li>Published <span class="m_1">Feb 20, 2015</span></li>
                        <li>Updated <span class="m_1">Feb 20 2015</span></li>
                        <li>Rating <span class="m_1"><img src="images/rating.png" alt=""/></span></li>
                    </ul>
                </div>
                <div class="col-md-3 grid_1">
                    <ul class="list_1 list_2">
                        <li><i class="icon1"> </i><p>2,548</p></li>
                        <li><i class="icon2"> </i><p>215</p></li>
                        <li><i class="icon3"> </i><p>546</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="box_1">
               <h1 class="visually-hidden">Move Store</h1>
            </div>
            <div class="box_2">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<div class="container">
    <footer id="footer">
        <div id="footer-3d">
            <div class="gp-container">
                <span class="first-widget-bend"></span>
            </div>
        </div>
        <div id="footer-widgets" class="gp-footer-larger-first-col">
            <div class="gp-container">
                <div class="footer-widget footer-1">
                    <div class="wpb_wrapper">
                        <img src="images/f_logo.png" alt=""/>
                    </div>
                    <br>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
                    <p class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                </div>
                <div class="footer_box">
                    <div class="col_1_of_3 span_1_of_3">
                        <h3>Categories</h3>
                        <ul class="first">
                            <li><a href="#">Dance</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <h3>Information</h3>
                        <ul class="first">
                            <li><a href="#">New products</a></li>
                            <li><a href="#">top sellers</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <h3>Follow Us</h3>
                        <ul class="first">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                        <div class="copy">
                            <p>&copy; 2015 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </footer>
</div>
<template id="film-item">
    <li class="film__item">
        <h3 class="film__title">Title</h3>
        <p class="film__id">Film id</p>
        <p class="film__year" style="color: crimson;">year</p>
        <a class="film__link" href="/element/">link to film</a>
        <img class="film__img" src="https://image.freepik.com/free-icon/_318-1546.jpg" alt="">
    </li>
    <li class="film-item-slide">
        <img src="images/1.jpg" class="img-responsive film-item-slide__img" alt="" width="250" height="240">
        <div class="grid-flex">
            <a class="film-item-slide__link" href="#">Syenergy 2mm</a>
        </div>
    </li>
</template>
<script type="module" src="/js/backend.js"></script>
<script type="module" src="/js/index.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</body>
</html>
