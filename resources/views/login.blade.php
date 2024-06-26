<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Findeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    {{--    <link rel="stylesheet" href="css/style.css">--}}
    {{--    <link rel="stylesheet" href="css/color.css">--}}
{{--    ================================================== -->--}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


    <!-- Compare Properties Widget
    ================================================== -->
    <div class="compare-slide-menu">

        <div class="csm-trigger"></div>

        <div class="csm-content">
            <h4>Compare Properties <div class="csm-mobile-trigger"></div></h4>

            <div class="csm-properties">

                <!-- Property -->
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>For Sale</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">Eagle Apartments <i>$420,000</i></span>
                        </div>
                        <img src="images/listing-01.jpg" alt="">
                    </a>
                </div>

                <!-- Property -->
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>For Sale</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">Selway Apartments <i>$420,000</i></span>
                        </div>
                        <img src="images/listing-03.jpg" alt="">
                    </a>
                </div>

                <!-- Property -->
                <div class="listing-item compact">
                    <a href="single-property-page-2.html" class="listing-img-container">
                        <div class="remove-from-compare"><i class="fa fa-close"></i></div>
                        <div class="listing-badges">
                            <span>For Sale</span>
                        </div>
                        <div class="listing-img-content">
                            <span class="listing-compact-title">Oak Tree Villas <i>$535,000</i></span>
                        </div>
                        <img src="images/listing-05.jpg" alt="">
                    </a>
                </div>

            </div>

            <div class="csm-buttons">
                <a href="compare-properties.html" class="button">Compare</a>
                <a href="#" class="button reset">Reset</a>
            </div>
        </div>

    </div>
    <!-- Compare Properties Widget / End -->


    <!-- Header Container
    ================================================== -->
    <header id="header-container">

        <!-- Topbar -->
        <div id="top-bar">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Top bar -->
                    <ul class="top-bar-menu">
                        <li><i class="fa fa-phone"></i> (123) 123-456 </li>
                        <li><i class="fa fa-envelope"></i> <a href="#">office@example.com</a></li>
                        <li>
                            <div class="top-bar-dropdown">
                                <span>Dropdown Menu</span>
                                <ul class="options">
                                    <li><div class="arrow"></div></li>
                                    <li><a href="#">Nice First Link</a></li>
                                    <li><a href="#">Second Link With Long Title</a></li>
                                    <li><a href="#">Third Link</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- Left Side Content / End -->


                <!-- Left Side Content -->
                <div class="right-side">

                    <!-- Social Icons -->
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>
                    </ul>

                </div>
                <!-- Left Side Content / End -->

            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Topbar / End -->


        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>


                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                        </button>
                    </div>


                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">

                            <li><a href="#">Home</a>
                                <ul>
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Listings</a>
                                <ul>
                                    <li><a href="#">List Layout</a>
                                        <ul>
                                            <li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
                                            <li><a href="listings-list-with-map.html">With Map</a></li>
                                            <li><a href="listings-list-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Grid Layout</a>
                                        <ul>
                                            <li><a href="listings-grid-standard-with-sidebar.html">Standard With Sidebar</a></li>
                                            <li><a href="listings-grid-compact-with-sidebar.html">Compact With Sidebar</a></li>
                                            <li><a href="listings-grid-with-map.html">With Map</a></li>
                                            <li><a href="listings-grid-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Half Map</a>
                                        <ul>
                                            <li><a href="listings-half-map-list.html">List Layout</a></li>
                                            <li><a href="listings-half-map-grid-standard.html">Grid Standard Layout</a></li>
                                            <li><a href="listings-half-map-grid-compact.html">Grid Compact Layout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#">Features</a>
                                <ul>
                                    <li><a href="#">Single Properties</a>
                                        <ul>
                                            <li><a href="single-property-page-1.html">Property Style 1</a></li>
                                            <li><a href="single-property-page-2.html">Property Style 2</a></li>
                                            <li><a href="single-property-page-3.html">Property Style 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Search Styles</a>
                                        <ul>
                                            <li><a href="index.html">Home Search 1</a></li>
                                            <li><a href="index-2.html">Home Search 2</a></li>
                                            <li><a href="index-3.html">Home Search 3</a></li>
                                            <li><a href="listings-list-full-width.html">Advanced Style</a></li>
                                            <li><a href="listings-list-with-sidebar.html">Sidebar Search</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">My Account</a>
                                        <ul>
                                            <li><a href="my-profile.html">My Profile</a></li>
                                            <li><a href="my-bookmarks.html">Bookmarked Listings</a></li>
                                            <li><a href="my-properties.html">My Properties</a></li>
                                            <li><a href="change-password.html">Change Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Agencies & Agents</a>
                                        <ul>
                                            <li><a href="agencies-list.html">Agencies List</a></li>
                                            <li><a href="agency-page.html">Agency Page</a></li>
                                            <li><a href="agents-list.html">Agents List</a></li>
                                            <li><a href="agent-page.html">Agent Page</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="compare-properties.html">Compare Properties</a></li>
                                    <li><a href="submit-property.html">Submit Property</a></li>
                                </ul>
                            </li>

                            <li><a class="current" href="#">Pages</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-post.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
                <div class="right-side">
                    <!-- Header Widget -->
                    <div class="header-widget">
                        <a href="login-register.html" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>
                        <a href="submit-property.html" class="button border">Submit Property</a>
                    </div>
                    <!-- Header Widget / End -->
                </div>
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->



    <!-- Titlebar
    ================================================== -->
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Log In & Register</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Log In & Register</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <!-- Contact ================================================== -->

    <!-- Container -->
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="row">
            <div class="col-md-4 col-md-offset-4">

                <button class="button social-login via-twitter"><i class="fa fa-twitter"></i> Log In With Twitter</button>
                <button class="button social-login via-gplus"><i class="fa fa-google-plus"></i> Log In With Google Plus</button>
                <button class="button social-login via-facebook"><i class="fa fa-facebook"></i> Log In With Facebook</button>

                <!--Tab -->
                <div class="my-account style-1 margin-top-5 margin-bottom-40">

                    <ul class="tabs-nav">
                        <li class=""><a href="#tab1">Log In</a></li>
                        <li><a href="#tab2">Register</a></li>
                    </ul>

                    <div class="tabs-container alt">

                        <!-- Login -->
                        <div class="tab-content" id="tab1" style="display: none;">
                            <form method="post" class="login">
                            @csrf
                                <p class="form-row form-row-wide">
                                    <label for="name">Username:
                                        <i class="im im-icon-Male"></i>
                                        <input type="text" class="input-text" name="name" id="username" value="" />
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="password">Password:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password" id="password"/>
                                    </label>
                                </p>

                                <p class="form-row">
                                    <input type="submit" class="button border margin-top-10" name="login" value="Login" />

                                    <label for="rememberme" class="rememberme">
                                        <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
                                </p>

                                <p class="lost_password">
                                    <a href="#" >Lost Your Password?</a>
                                </p>

                            </form>
                        </div>

                        <!-- Register -->
                        <div class="tab-content" id="tab2" style="display: none;">

                            <form method="post" class="register" action="{{route('registration')}}">
                                @csrf
                                <p class="form-row form-row-wide">
                                    <label for="username2">Username:
                                        <i class="im im-icon-Male"></i>
                                        <input type="text" class="input-text" name="username" id="username2" value="" />
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="email2">Email Address:
                                        <i class="im im-icon-Mail"></i>
                                        <input type="text" class="input-text" name="email" id="email2" value="" />
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="password1">Password:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password" id="password1"/>
                                    </label>
                                </p>

                                <p class="form-row form-row-wide">
                                    <label for="password2">Repeat Password:
                                        <i class="im im-icon-Lock-2"></i>
                                        <input class="input-text" type="password" name="password_confirmation" id="password2"/>
                                    </label>
                                </p>

                                <p class="form-row">
                                    <input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
                                </p>

                            </form>
                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>
    <!-- Container / End -->



    <!-- Footer
    ================================================== -->
    <div class="margin-top-55"></div>

    <div id="footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="images/logo.png" alt="">
                    <br><br>
                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <h4>Helpful Links</h4>
                    <ul class="footer-links">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Add Property</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>

                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Our Agents</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>12345 Little Lonsdale St, Melbourne</span> <br>
                        Phone: <span>(123) 123-456 </span><br>
                        E-Mail:<span> <a href="#">office@example.com</a> </span><br>
                    </div>

                    <ul class="social-icons margin-top-20">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                    </ul>

                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">© 2016 Findeo. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


    <!-- Scripts
    ================================================== -->
    <script type="text/javascript" src="scripts/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="scripts/jquery-migrate-3.1.0.min.js"></script>
    <script type="text/javascript" src="scripts/chosen.min.js"></script>
    <script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
    <script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
    <script type="text/javascript" src="scripts/rangeSlider.js"></script>
    <script type="text/javascript" src="scripts/sticky-kit.min.js"></script>
    <script type="text/javascript" src="scripts/slick.min.js"></script>
    <script type="text/javascript" src="scripts/masonry.min.js"></script>
    <script type="text/javascript" src="scripts/mmenu.min.js"></script>
    <script type="text/javascript" src="scripts/tooltips.min.js"></script>
    <script type="text/javascript" src="scripts/custom.js"></script>





</div>
<!-- Wrapper / End -->


</body>
</html>
