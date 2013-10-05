<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>OpenDSS | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- @todo: fill with your company info or remove -->
    <meta name="description" content="">
    <meta name="author" content="Themelize.me">

    {{basset_stylesheets("appstrap")}}
    {{basset_stylesheets("nvd3")}}
    {{basset_javascripts("nvd3")}}

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>

    {{basset_javascripts("htmler")}}
        <![endif]-->

    <!-- Le fav and touch icons - @todo: fill with your icons or remove -->
    <link rel="shortcut icon" href="img/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Rambla|Calligraffitti' rel='stylesheet' type='text/css'>
</head>

<body class="page page-index">
<div id="navigation" class="wrapper">
    <div class="navbar  navbar-static-top">

        <!--Hidden Header Region-->


        <!--Header & Branding region-->
        <div class="header">
            <div class="header-inner container">
                <div class="row-fluid">
                    <div class="span6">
                        <!--branding/logo-->
                        <a class="brand" href="index.htm" title="Home">
                            <h1><span>Open</span>DSS<span>.</span></h1>
                        </a>
                        <div class="slogan">An Open Decision Support System</div>
                    </div>


                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-inner">

                <!--mobile collapse menu button-->
                <a class="btn btn-navbar pull-left" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>




                <!--everything within this div is collapsed on mobile-->
                <div class="nav-collapse collapse">

                    <!--main navigation-->
                    <ul class="nav" id="main-menu">
                        <li class="home-link"><a href="index.htm"><i class="icon-home hidden-phone"></i><span class="visible-phone">Home</span></a></li>
                        <li class="dropdown"><a href="features.htm" class="dropdown-toggle menu-item" id="features-drop" data-toggle="dropdown">Features +</a>
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu mega-menu" role="menu" aria-labelledby="features-drop">
                                <li class="mega-menu-wrapper" role="menuitem"> <span class="menu-title">Mega Menu with links & text items</span>
                                    <ul class="row-fluid" role="menu">
                                        <li class="span4" role="menuitem"> <a href="features.htm"><img src="img/features/feature-1.png" alt="Feature 1" /></a> <a href="features.htm" tabindex="-1" class="menu-item">Mobile Friendly</a> <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> </li>
                                        <li class="span4" role="menuitem"> <a href="features.htm"><img src="img/features/feature-2.png" alt="Feature 2" /></a> <a href="features.htm" tabindex="-1" class="menu-item">24/7 Support</a> <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> </li>
                                        <li class="span4" role="menuitem"> <a href="features.htm"><img src="img/features/feature-4.png" alt="Feature 4" /></a> <a href="features.htm" tabindex="-1" class="menu-item">99% Uptime</a> <span>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio!</span> </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="pricing.htm" class="menu-item">Pricing</a></li>
                        <li><a href="customers.htm" class="menu-item">Customers</a></li>
                        <li class="dropdown"> <a href="about.htm" class="dropdown-toggle" id="about-drop" data-toggle="dropdown">About +</a>
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu" role="menu" aria-labelledby="about-drop">
                                <li role="menuitem"><a href="about.htm" tabindex="-1" class="menu-item">About Us</a></li>
                                <li role="menuitem"><a href="team.htm" tabindex="-1" class="menu-item">Our Team</a></li>
                                <li role="menuitem"><a href="contact.htm" tabindex="-1" class="menu-item">Contact</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"> <a href="blog.htm" class="dropdown-toggle" id="blog-drop" data-toggle="dropdown">Blog +</a>
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu pull-left" role="menu" aria-labelledby="blog-drop">
                                <li role="menuitem"><a href="blog.htm" tabindex="-1" class="menu-item">Right Sidebar</a></li>
                                <li role="menuitem"><a href="blog-leftbar.htm" tabindex="-1" class="menu-item">Left Sidebar</a></li>
                                <li role="menuitem"><a href="blog-post.htm" tabindex="-1" class="menu-item">Blog Post</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>
@yield("content")
<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="span3 col">
                <div class="block contact-block">
                    <!--@todo: replace with company contact details-->
                    <h3>Contact Us</h3>
                    <address>
                        <p><abbr title="Phone"><i class="icon-phone"></i></abbr> 019223 8092344</p>
                        <p><abbr title="Email"><i class="icon-envelope"></i></abbr> info@appstrap.me</p>
                        <p><abbr title="Address"><i class="icon-home"></i></abbr> Sunshine House, Sunville. SUN12 8LU.</p>
                    </address>
                </div>
            </div>
            <div class="span5 col">
                <div class="block">
                    <h3>About Us</h3>
                    <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
                </div>
            </div>
            <div class="span4 col">
                <div class="block newsletter">
                    <h3>Newsletter</h3>
                    <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
                    <!--@todo: replace with mailchimp code-->
                    <form class="form-inline">
                        <div class="input-append">
                            <input class="input-medium" type="text" placeholder="Email" />
                            <button class="btn btn-primary" type="button">Go!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div id="toplink"><a href="#top" class="top-link" title="Back to top">Back To Top <i class="icon-chevron-up"></i></a></div>
            <!--@todo: replace with company copyright details-->
            <div class="subfooter">
                <div class="span6">
                    <p>Site template by <a href="#">OpenDSS</a> | Copyright 2013 &copy; Pirates Of The Horn</p>
                </div>
                <div class="span6">
                    <ul class="inline pull-right">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--Scripts -->
{{basset_javascripts("appstrap")}}
</body>
</html>