<!DOCTYPE html>
<html>
<head>
    <title>Business Template</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic'
          rel='stylesheet' type='text/css'>

    @stylesheets('app')

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body ng-app="myApp">
<div class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html">
                <strong>Pirates of the Horn</strong>
            </a>

            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about-us.html">Maps</a></li>
                    {{--
                    <!--                    <li class="dropdown">-->
                    <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
                    <!--                            PAGES-->
                    <!--                            <b class="caret"></b>-->
                    <!--                        </a>-->
                    <!--                        <ul class="dropdown-menu">-->
                    <!--                            <li><a href="features.html">Features</a></li>-->
                    <!--                            <li><a href="pricing.html">Pricing</a></li>-->
                    <!--                            <li><a href="portfolio.html">Portfolio</a></li>-->
                    <!--                            <li><a href="coming-soon.html">Coming Soon</a></li>-->
                    <!--                            <li><a href="sign-in.html">Sign in</a></li>-->
                    <!--                            <li><a href="sign-up.html">Sign up</a></li>-->
                    <!--                            <li><a href="backgrounds.html">Backgrounds</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    --}}
                    <li><a href="#">Somelink</a></li>
                    <li><a href="contact">CONTACT US</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

<div id="blog_post">
    <div class="container">
        <div class="section_header">
            <h3>App</h3>

            <input type="text" class="input-large search-query" placeholder="Search">
        </div>

        <div class="row">
            <div class="span8">
                <img class="post_pic" src="img/blog_post.jpg"/>

            </div>

            <!-- SideBar -->
            <div class="span3 sidebar offset1">box2
                <div class="box">
                    <div class="sidebar_header">
                        <h4>Menu</h4>
                    </div>

                    <ul class="sidebar_menu">
                        <ul>
                            <li><a href="#">Coffee</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Packaging </a></li>
                        </ul>
                    </ul>
                </div>

                <div class="box last">
                    <div class="sidebar_header">
                        <h4>Recent Posts</h4>
                    </div>

                    <div class="recent">
                            <span>
                                <img src="img/recent_photos.jpg" alt="">
                            </span>

                        <p>There are many embarrassing hidden in the middle of text.</p>
                    </div>
                    <div class="recent">
                            <span>
                                <img src="img/recent_photos.jpg" alt="">
                            </span>

                        <p>There are many embarrassing hidden in the middle of text.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- starts footer -->
    <footer id="footer">
        <div class="container">
            <div class="row info">
                <div class="span6 residence">
                    <ul>
                        <li>Nairobi Kenya</li>
                        <li>P.o. Box Blah.</li>
                    </ul>
                </div>
                <div class="span5 touch">
                    <ul>
                        <li><strong>P.</strong> 1 817 274 2933</li>
                        <li><strong>E.</strong><a href="#"> developers@codegladiators.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="row credits">
                <div class="span12">
                    <div class="row social">
                        <div class="span12">
                            <a href="#" class="facebook">
                                <span class="socialicons ico1"></span>
                                <span class="socialicons_h ico1h"></span>
                            </a>
                            <a href="#" class="twitter">
                                <span class="socialicons ico2"></span>
                                <span class="socialicons_h ico2h"></span>
                            </a>
                            <a href="#" class="gplus">
                                <span class="socialicons ico3"></span>
                                <span class="socialicons_h ico3h"></span>
                            </a>
                            <a href="#" class="flickr">
                                <span class="socialicons ico4"></span>
                                <span class="socialicons_h ico4h"></span>
                            </a>
                            <a href="#" class="pinterest">
                                <span class="socialicons ico5"></span>
                                <span class="socialicons_h ico5h"></span>
                            </a>
                            <a href="#" class="dribble">
                                <span class="socialicons ico6"></span>
                                <span class="socialicons_h ico6h"></span>
                            </a>
                            <a href="#" class="behance">
                                <span class="socialicons ico7"></span>
                                <span class="socialicons_h ico7h"></span>
                            </a>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="span12">
                            © 2013 Pirates of the Horn.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @javascripts('app')

</body>
</html>