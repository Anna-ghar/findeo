
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
{{--    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">--}}

</head>
<body>
<div id="wrapper">
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
                    <a href="{{route('welcome')}}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
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

                        <li><a class="current" href="#">Home</a>
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
                                        <li><a href="{{route('properties.index')}}">With Sidebar</a></li>
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
                                <li><a href="">Submit Property</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Pages</a>
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
                    @if(Auth::check())
                        <!-- User Menu -->
                        <div class="user-menu">
                            <div class="user-name"><span><img src="images/agent-03.jpg" alt=""></span>Hi, John!</div>
                            <ul>
                                <li><a href="my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
                                <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Bookmarks</a></li>
                                <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>
                                <li><a href="{{route('logout')}}"><i class="sl sl-icon-power"></i> Log Out</a></li>
                            </ul>
                        </div>
                    @else
                        <a href="{{route('loginPage')}}" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>
                    @endif
                    <a href="{{route('properties.create')}}" class="button border">Submit Property</a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
</div>
<!-- Header Container / End -->
{{--<script type="text/javascript" src="{{ asset('scripts/jquery-3.4.1.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/jquery-migrate-3.1.0.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/chosen.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/magnific-popup.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/owl.carousel.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/rangeSlider.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/rangeSlider.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/slick.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/masonry.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/mmenu.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/tooltips.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>--}}

{{--<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initAutocomplete"></script>--}}

</body>
