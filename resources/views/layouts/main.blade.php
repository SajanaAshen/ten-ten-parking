<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Ten Ten Parking</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    @stack('header')

    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> --}}
    {{-- <link href=
    'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
              rel='stylesheet'>
          
        <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" >
        </script>
          
        <script src=
    "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" >
        </script> --}}
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
        $( function() {
          $( ".datepicker" ).datepicker();
        } );
        </script>
</head>


<!-- page wrapper -->

<body>
    @include('sweetalert::alert')
    <div class="boxed_wrapper">

        <!-- preloader -->
        {{-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="t" class="letters-loading">
                                T
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                T
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                N
                            </span>
                        </div>
                        <div class="txt-loading">
                            <span data-text-preloader="p" class="letters-loading">
                                P
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="k" class="letters-loading">
                                K
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="g" class="letters-loading">
                                G
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- preloader end -->


        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><a href="index-2.html"><img src="assets/images/logo.png"
                                alt=""></a></figure>
                    <div class="close-search pull-right"><span class="far fa-times"></span></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
                        <form method="post" action="https://st.ourhtmldemo.com/new/Udrive/index.html">
                            <div class="form-group">
                                <fieldset>
                                    <input type="search" class="form-control" name="search-input" value=""
                                        placeholder="Type your keyword and hit" required>
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-2 xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-3 xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-4 xs-bg-black"></div>
            <div class="xs-overlay xs-overlay-5 xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <!-- <a href="index-2.html"><img src="assets/images/logo.png" alt="" /></a> -->
                                    <a href="index-2.html"><img src="assets/images/logo.jpeg" alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <p>Explain to you how all this mistaken denouncing pleasure and praising pain was
                                        born and we will give you a complete account of the system, and expound the
                                        actual teachings.</p>
                                    <p>Mistaken denouncing pleasure and praising pain was born and we will give you
                                        complete account of the system expound.</p>
                                    <a href="about.html" class="theme-btn btn-one">About Us</a>
                                </div>
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li><a href="tel:07518402614">07518402614</a></li>
                                        <li><a href="mailto:info@tentenparking.co.uk">info@tentenparking.co.uk</a></li>
                                    </ul>
                                </div>
                                <!-- <ul class="social-box">
                                          <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                                          <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                                          <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                                          <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                                          <li class="youtube"><a href="#" class="fab fa-youtube"></a></li>
                                      </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->


        <!-- main header -->
        <header class="main-header my_theme">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner">
                    <div class="single-item">
                        <div class="icon"><i class="flaticon-call"></i></div>
                        <h6>Call:<span>07518402614<i class="flaticon-right-arrow"></i></span>
                        </h6>
                    </div>
                    <ul class="share-box">
                        <!-- <li>
                                  <h6><i class="flaticon-share"></i>Social media:</h6>
                              </li>
                              <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="index-2.html"><i class="fab fa-youtube"></i></a></li>
                              <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                              <li><a href="index-2.html"><i class="fab fa-instagram"></i></a></li> -->
                    </ul>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box clearfix">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.php"><img src="assets/images/logo.jpeg"
                                    width="220"></a></figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class="menu-right">

                        </div>
                        <div class="support-box">
                            <div class="icon"><img src="assets/images/icons/icon-1.png" alt=""></div>
                            <h6>Dial to Drive</h6>
                            <h4><a href="tel:07518402614">07518402614</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header my_theme">
                <div class="outer-box clearfix">
                    <div class="logo-box">
                        <figure class="logo"><a href="index.php"><img src="assets/images/logo.jpeg"
                                    width="220"></a></figure>
                    </div>
                    <div class="menu-area">
                        <nav class="main-menu">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <div class="menu-right">
                        </div>
                        <div class="support-box">
                            <div class="icon"><img src="assets/images/icons/icon-1.png" alt=""></div>
                            <h6>Dial to Drive</h6>
                            <h4><a href="tel:07518402614">07518402614</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href="tel:07518402614">07518402614</a></li>
                        <li><a href="mailto:info@tentenparking.co.uk">info@tentenparking.co.uk</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <!-- banner-section end -->
    </div>
        @yield('content')
        <!-- highlights-style-two -->


        <!-- main-footer -->
        <footer class="main-footer my_theme">
            <div class="bg-layer" style="background-image: url(assets/images/background/footer-bg.jpg);"></div>
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index-2.html"><img src="assets/images/logo1.png"
                                            width="200"></a></figure>
                                <div class="copyright">
                                    <p>Copyrights <span>&copy; 2022 <a href="index-2.html">TEN TEN PARKING</a>.</span>
                                        <br />All Rights Reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_40">
                                <div class="widget-title">
                                    <h4>Our Company</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Essential Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <!-- <li><a href="privacy-policy.php">Privacy Policy</a></li> -->
                                        <li><a href="terms-and-conditions">Terms & Conditions</a></li>
                                        <!-- <li><a href="#">Cancellation Policy</a></li>
                                      <li><a href="#">Site Map</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->

    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/nav-tool.js"></script>
    <script src="assets/js/jquery.lettering.min.js"></script>
    <script src="assets/js/jquery.circleType.js"></script>

    @stack('scripts')
    <!-- main-js -->
    <script src="assets/js/script.js"></script>
    <script>
	$( function() {
		$( "#datepicker" ).datepicker();
	} );
    </script>
</body><!-- End of .page_wrapper -->

</html>
