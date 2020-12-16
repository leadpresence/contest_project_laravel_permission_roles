<!DOCTYPE html>
<html lang="en">

<!-- dustech/  13 Nov 2019 12:52:03 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> National Tech-Innovation Challenge </title>

    <link href=" {{ asset('/') }}assets/assets/css/themify-icons.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/flaticon.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/animate.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/owl.carousel.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/owl.theme.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/slick.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/slick-theme.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/swiper.min.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/owl.transitions.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href=" {{ asset('/') }}assets/assets/css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {{ asset('/') }}assets/
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">


        <div class="preloader">
            <div class="loader">
                <div class="gear two">
                    <svg viewbox="0 0 100 100" fill="#131e4a">
                        <path
                            d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z">
                        </path>
                    </svg>
                </div>
                <div class="gear three">
                    <svg viewbox="0 0 100 100" fill="#fd5f17">
                        <path
                            d="M97.6,55.7V44.3l-13.6-2.9c-0.8-3.3-2.1-6.4-3.9-9.3l7.6-11.7l-8-8L67.9,20c-2.9-1.7-6-3.1-9.3-3.9L55.7,2.4H44.3l-2.9,13.6      c-3.3,0.8-6.4,2.1-9.3,3.9l-11.7-7.6l-8,8L20,32.1c-1.7,2.9-3.1,6-3.9,9.3L2.4,44.3v11.4l13.6,2.9c0.8,3.3,2.1,6.4,3.9,9.3      l-7.6,11.7l8,8L32.1,80c2.9,1.7,6,3.1,9.3,3.9l2.9,13.6h11.4l2.9-13.6c3.3-0.8,6.4-2.1,9.3-3.9l11.7,7.6l8-8L80,67.9      c1.7-2.9,3.1-6,3.9-9.3L97.6,55.7z M50,65.6c-8.7,0-15.6-7-15.6-15.6s7-15.6,15.6-15.6s15.6,7,15.6,15.6S58.7,65.6,50,65.6z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
        <!-- end preloader -->



        <!-- Start header -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <nav class="navigation navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.html"><img src="assets/images/logo.png" alt></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="ti-close"></i></button>
                        <ul class="nav navbar-nav">

                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('login')}}">Compete</a></li>
                            <li><a href="#">FAQ</a></li>

                            <li><a href="{{route('home')}}">My account</a></li>

                            <li class="menu-item-has-children">
                                <a href="#">Programs</a>
                                <!-- <ul class="sub-menu">
                                    <li><a href="software.html">Software Engineering</a></li>
                                    <li><a href="robotics.html">Robotics</a></li>
                                    <li><a href="#">Embedded Systems</a></li>
                                </ul> -->
                            </li>

                    </div><!-- end of nav-collapse -->

                    <div class="search-contact">
                        <div class="header-search-area">
                            <div class="header-search-form">
                                <form class="form">
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here">
                                    </div>
                                    <button type="submit" class="btn"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <div>
                                <button class="btn open-btn"><i class="ti-search"></i></button>
                            </div>
                        </div>
                        <div class="contact">
                            <div class="call">
                                @guest
                                    @foreach($contests as $contest)
                                  <span style="color:#ffffff">  {{  $contest->challenge_name?? '' }}   <span> <a href="{{route('login')}}" class="theme-btn"> Apply</a>
                                @endforeach
                                @else
                               <a  style="color:white;margin-right:12px" href="#" class="nav navbar-nav">Hey {{ Auth::user()->name }} </a>
                                <a href="{{route('logout')}}" class="theme-btn" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest

                        </div>
                    </div>
                    <!-- end of container -->
            </nav>
        </header>

        @yield('content')


        <footer class="site-footer">
            <div class="upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="assets/images/logo.png" alt>
                                </div>
                                <p>National Inventor's Challenge is one of its kind in Nigeria. we are poised to
                                    support best Nigerian minds who are ready to take the power of invention and make
                                    them a reality</p>
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Usefull Links</h3>
                                </div>
                                <ul>
                                    <li><a href="{{route('home')}}">Apply</a></li>
                                    <li><a href="#">Programs</a></li>
                                    <!-- <li><a href="#">Contact us</a></li> -->
                                    <!-- <li><a href="#">Meet team</a></li> -->
                                </ul>
                                <ul>
                                    <!-- <li><a href="#">Provacy Policy</a></li> -->
                                    <!-- <li><a href="#">Testimonials</a></li> -->
                                    <!-- <li><a href="#">News</a></li> -->
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget contact-widget service-link-widget">
                                <div class="widget-title">
                                    <h3>Our Address</h3>
                                </div>
                                <ul>
                                    <li></li>
                                    <li><span>Phone:</span> +23480664523</li>
                                    <li><span>Email:</span> hello@nic.com</li>
                                    <li><span>Office Time:</span> 10AM- 5PM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget newsletter-widget">
                                <div class="widget-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <p>You will be notified when somthing new will be appear.</p>
                                <form>
                                    <div class="input-1">
                                        <input type="email" class="form-control" placeholder="Email Address *" required>
                                    </div>
                                    <div class="submit clearfix">
                                        <button type="submit"><i class="ti-email"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="separator"></div>
                        <div class="col col-xs-12">
                            <p class="copyright"><a href="roboticscenterhq.com">Robotics Center</a></p>
                            <div class="extra-link">
                                <!-- <ul>
                                    <li><a href="#">Privace & Policy</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end site-footer -->


    </div>
    <!-- end of page-wrapper -->

    {{ asset('/') }}landing/

    <!-- All JavaScript files
    ================================================== -->
    <script src="{{ asset('/') }}assets/assets/js/jquery.min.js"></script>
    <script src=" {{ asset('/') }}assets/assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src=" {{ asset('/') }}assets/assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="{{ asset('/') }}assets/assets/js/script.js"></script>
</body>

<!-- dustech/  13 Nov 2019 12:54:40 GMT -->

</html>
