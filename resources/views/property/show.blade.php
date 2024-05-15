<!DOCTYPE html>
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Findeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
{{--    <style>--}}
{{--        .thumb-image {--}}
{{--            width: 100px; /* Set the width as per your requirement */--}}
{{--            height: auto; /* Maintain aspect ratio */--}}
{{--        }--}}
{{--    </style>--}}

</head>

<body>
@include('navbar')
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


{{--    <!-- Header Container--}}
{{--    ================================================== -->--}}
{{--    <header id="header-container">--}}

{{--        <!-- Topbar -->--}}
{{--        <div id="top-bar">--}}
{{--            <div class="container">--}}

{{--                <!-- Left Side Content -->--}}
{{--                <div class="left-side">--}}

{{--                    <!-- Top bar -->--}}
{{--                    <ul class="top-bar-menu">--}}
{{--                        <li><i class="fa fa-phone"></i> (123) 123-456 </li>--}}
{{--                        <li><i class="fa fa-envelope"></i> <a href="#">office@example.com</a></li>--}}
{{--                        <li>--}}
{{--                            <div class="top-bar-dropdown">--}}
{{--                                <span>Dropdown Menu</span>--}}
{{--                                <ul class="options">--}}
{{--                                    <li><div class="arrow"></div></li>--}}
{{--                                    <li><a href="#">Nice First Link</a></li>--}}
{{--                                    <li><a href="#">Second Link With Long Title</a></li>--}}
{{--                                    <li><a href="#">Third Link</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

{{--                </div>--}}
{{--                <!-- Left Side Content / End -->--}}


{{--                <!-- Left Side Content -->--}}
{{--                <div class="right-side">--}}

{{--                    <!-- Social Icons -->--}}
{{--                    <ul class="social-icons">--}}
{{--                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>--}}
{{--                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>--}}
{{--                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>--}}
{{--                        <li><a class="pinterest" href="#"><i class="icon-pinterest"></i></a></li>--}}
{{--                    </ul>--}}

{{--                </div>--}}
{{--                <!-- Left Side Content / End -->--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="clearfix"></div>--}}
{{--        <!-- Topbar / End -->--}}


{{--        <!-- Header -->--}}
{{--        <div id="header">--}}
{{--            <div class="container">--}}

{{--                <!-- Left Side Content -->--}}
{{--                <div class="left-side">--}}

{{--                    <!-- Logo -->--}}
{{--                    <div id="logo">--}}
{{--                        <a href="index.html"><img src="images/logo.png" alt=""></a>--}}
{{--                    </div>--}}


{{--                    <!-- Mobile Navigation -->--}}
{{--                    <div class="mmenu-trigger">--}}
{{--                        <button class="hamburger hamburger--collapse" type="button">--}}
{{--						<span class="hamburger-box">--}}
{{--							<span class="hamburger-inner"></span>--}}
{{--						</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}


{{--                    <!-- Main Navigation -->--}}
{{--                    <nav id="navigation" class="style-1">--}}
{{--                        <ul id="responsive">--}}

{{--                            <li><a href="#">Home</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="index.html">Home 1</a></li>--}}
{{--                                    <li><a href="index-2.html">Home 2</a></li>--}}
{{--                                    <li><a href="index-3.html">Home 3</a></li>--}}
{{--                                    <li><a href="index-4.html">Home 4</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a href="#">Listings</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">List Layout</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>--}}
{{--                                            <li><a href="listings-list-with-map.html">With Map</a></li>--}}
{{--                                            <li><a href="listings-list-full-width.html">Full Width</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">Grid Layout</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="listings-grid-standard-with-sidebar.html">Standard With Sidebar</a></li>--}}
{{--                                            <li><a href="listings-grid-compact-with-sidebar.html">Compact With Sidebar</a></li>--}}
{{--                                            <li><a href="listings-grid-with-map.html">With Map</a></li>--}}
{{--                                            <li><a href="listings-grid-full-width.html">Full Width</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">Half Map</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="listings-half-map-list.html">List Layout</a></li>--}}
{{--                                            <li><a href="listings-half-map-grid-standard.html">Grid Standard Layout</a></li>--}}
{{--                                            <li><a href="listings-half-map-grid-compact.html">Grid Compact Layout</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a class="current" href="#">Features</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">Single Properties</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="single-property-page-1.html">Property Style 1</a></li>--}}
{{--                                            <li><a href="single-property-page-2.html">Property Style 2</a></li>--}}
{{--                                            <li><a href="single-property-page-3.html">Property Style 3</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">Search Styles</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="index.html">Home Search 1</a></li>--}}
{{--                                            <li><a href="index-2.html">Home Search 2</a></li>--}}
{{--                                            <li><a href="index-3.html">Home Search 3</a></li>--}}
{{--                                            <li><a href="listings-list-full-width.html">Advanced Style</a></li>--}}
{{--                                            <li><a href="listings-list-with-sidebar.html">Sidebar Search</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">My Account</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="my-profile.html">My Profile</a></li>--}}
{{--                                            <li><a href="my-bookmarks.html">Bookmarked Listings</a></li>--}}
{{--                                            <li><a href="my-properties.html">My Properties</a></li>--}}
{{--                                            <li><a href="change-password.html">Change Password</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">Agencies & Agents</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="agencies-list.html">Agencies List</a></li>--}}
{{--                                            <li><a href="agency-page.html">Agency Page</a></li>--}}
{{--                                            <li><a href="agents-list.html">Agents List</a></li>--}}
{{--                                            <li><a href="agent-page.html">Agent Page</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}

{{--                                    <li><a href="compare-properties.html">Compare Properties</a></li>--}}
{{--                                    <li><a href="submit-property.html">Submit Property</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                            <li><a href="#">Pages</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="blog.html">Blog</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="blog.html">Blog</a></li>--}}
{{--                                            <li><a href="blog-post.html">Blog Post</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="contact.html">Contact</a></li>--}}
{{--                                    <li><a href="elements.html">Elements</a></li>--}}
{{--                                    <li><a href="pricing-tables.html">Pricing Tables</a></li>--}}
{{--                                    <li><a href="typography.html">Typography</a></li>--}}
{{--                                    <li><a href="icons.html">Icons</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}

{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                    <div class="clearfix"></div>--}}
{{--                    <!-- Main Navigation / End -->--}}

{{--                </div>--}}
{{--                <!-- Left Side Content / End -->--}}

{{--                <!-- Right Side Content / End -->--}}
{{--                <div class="right-side">--}}
{{--                    <!-- Header Widget -->--}}
{{--                    <div class="header-widget">--}}
{{--                        <a href="login-register.html" class="sign-in"><i class="fa fa-user"></i> Log In / Register</a>--}}
{{--                        <a href="submit-property.html" class="button border">Submit Property</a>--}}
{{--                    </div>--}}
{{--                    <!-- Header Widget / End -->--}}
{{--                </div>--}}
{{--                <!-- Right Side Content / End -->--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Header / End -->--}}

{{--    </header>--}}
{{--    <div class="clearfix"></div>--}}
{{--    <!-- Header Container / End -->--}}



    <!-- Titlebar
    ================================================== -->
    <div id="titlebar" class="property-titlebar margin-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <a href="listings-list-with-sidebar.html" class="back-to-listings"></a>
                    <div class="property-title">
                        <h2>Selway Apartments <span class="property-badge">For Sale</span></h2>
                        <span>
						<a href="#location" class="listing-address">
							<i class="fa fa-map-marker"></i>
							7843 Durham Avenue, MD
						</a>
					</span>
                    </div>

                    <div class="property-pricing">
                        <div class="property-price">$420,000</div>
                        <div class="sub-price">$770 / sq ft</div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row margin-bottom-50">
            <div class="col-md-12">

                <!-- Slider -->
                <div class="property-slider default">
                    @foreach($property->images as $image)
                        <a href="{{ asset('storage/' . $image->url) }}" data-background-image="{{ asset('storage/' . $image->url) }}" class="item mfp-gallery"></a>
                    @endforeach
                </div>

                <!-- Slider Thumbs -->
                <div class="property-slider-nav">
                    @foreach($property->images as $image)
                        <div class="item"><img src="{{ asset('storage/' . $image->url) }}" alt="" class="thumb-image"></div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Property Description -->
            <div class="col-lg-8 col-md-7 sp-content">
                <div class="property-description">

                    <!-- Main Features -->
                    <ul class="property-main-features">
                        <li>Area <span>{{$property->area}} sq ft</span></li>
                        <li>Rooms <span>{{$property->rooms}}</span></li>
                        <li>Bedrooms <span>{{$property->bedrooms}}</span></li>
                        <li>Bathrooms <span>{{$property->bathrooms}}</span></li>
                    </ul>


                    <!-- Description -->
                    <h3 class="desc-headline">Description</h3>
                    <div class="show-more">
                        {{$property->description}}
{{--                        <p>--}}
{{--                            Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis mi tortor finibus turpis.--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.--}}
{{--                        </p>--}}

{{--                        <p>--}}
{{--                            Nam mattis lobortis felis eu blandit. Morbi tellus ligula, interdum sit amet ipsum et, viverra hendrerit lectus. Nunc efficitur sem vel est laoreet, sed bibendum eros viverra. Vestibulum finibus, ligula sed euismod tincidunt, lacus libero lobortis ligula, sit amet molestie ipsum purus ut tortor. Nunc varius, dui et sollicitudin facilisis, erat felis imperdiet felis, et iaculis dui magna vitae diam. Donec mattis diam nisl, quis ullamcorper enim malesuada non. Curabitur lobortis eu mauris nec vestibulum. Nam efficitur, ex ac semper malesuada, nisi odio consequat dui, hendrerit vulputate odio dui vitae massa. Aliquam tortor urna, tincidunt ut euismod quis, semper vel ipsum. Ut non vestibulum mauris. Morbi euismod, felis non hendrerit viverra, nunc sapien bibendum ligula, eget vehicula nunc dolor eu ex. Quisque in semper odio. Donec auctor blandit ligula. Integer id lectus non nibh vulputate efficitur quis at arcu.--}}
{{--                        </p>--}}

                        <a href="#" class="show-more-button">Show More <i class="fa fa-angle-down"></i></a>
                    </div>

                    <!-- Features -->
{{--                    <h3 class="desc-headline">Features</h3>--}}
{{--                    <ul >--}}
{{--                        @foreach($features as $feature)--}}
{{--                            <input type="checkbox" name="features[]" value="{{ $feature->id }}" {{ $property->features->contains($feature->id) ? 'checked' : '' }}>--}}
{{--                            <label>{{ $feature->name }}</label><br>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
                    <h3 class="desc-headline">Features</h3>
                    <ul class=" checkboxes margin-top-0">
                        @foreach($features as $feature)
                            <li>
                                <input type="checkbox" name="features[]" value="{{ $feature->id }}" {{ $property->features->contains($feature->id) ? 'checked' : '' }}>
                                <label>{{ $feature->name }}</label>
                            </li>
                        @endforeach
                    </ul>


                </div>
            </div>
            <!-- Property Description / End -->


            <!-- Sidebar -->
            <div class="col-lg-4 col-md-5 sp-sidebar">
                <div class="sidebar sticky right">

                    <!-- Widget -->
                    <div class="widget margin-bottom-30">
                        <button class="widget-button with-tip" data-tip-content="Print"><i class="sl sl-icon-printer"></i></button>
                        <button class="widget-button with-tip" data-tip-content="Add to Bookmarks"><i class="fa fa-star-o"></i></button>
                        <button class="widget-button with-tip compare-widget-button" data-tip-content="Add to Compare"><i class="icon-compare"></i></button>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Widget / End -->


                    <!-- Booking Widget -->
                    <div class="widget">
                        <div id="booking-widget-anchor" class="boxed-widget booking-widget margin-top-35">
                            <h3><i class="fa fa-calendar-check-o"></i> Schedule a Tour</h3>
                            <div class="row with-forms  margin-top-0">

                                <!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
                                <div class="col-lg-12">
                                    <input type="text" id="date-picker" placeholder="Date" readonly="readonly">
                                </div>

                                <!-- Panel Dropdown -->
                                <div class="col-lg-12">
                                    <div class="panel-dropdown time-slots-dropdown">
                                        <a href="#">Time</a>
                                        <div class="panel-dropdown-content padding-reset">
                                            <div class="panel-dropdown-scrollable">

                                                <!-- Time Slot -->
                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-1">
                                                    <label for="time-slot-1">
                                                        <strong>8:30 am - 9:00 am</strong>
                                                        <span>1 slot available</span>
                                                    </label>
                                                </div>

                                                <!-- Time Slot -->
                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-2">
                                                    <label for="time-slot-2">
                                                        <strong>9:00 am - 9:30 am</strong>
                                                        <span>2 slots available</span>
                                                    </label>
                                                </div>

                                                <!-- Time Slot -->
                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-3">
                                                    <label for="time-slot-3">
                                                        <strong>9:30 am - 10:00 am</strong>
                                                        <span>1 slots available</span>
                                                    </label>
                                                </div>

                                                <!-- Time Slot -->
                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-4">
                                                    <label for="time-slot-4">
                                                        <strong>10:00 am - 10:30 am</strong>
                                                        <span>3 slots available</span>
                                                    </label>
                                                </div>

                                                <!-- Time Slot -->
                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-5">
                                                    <label for="time-slot-5">
                                                        <strong>13:00 pm - 13:30 pm</strong>
                                                        <span>2 slots available</span>
                                                    </label>
                                                </div>

                                                <!-- Time Slot -->
                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-6">
                                                    <label for="time-slot-6">
                                                        <strong>13:30 pm - 14:00 pm</strong>
                                                        <span>1 slots available</span>
                                                    </label>
                                                </div>

                                                <!-- Time Slot -->
                                                <div class="time-slot">
                                                    <input type="radio" name="time-slot" id="time-slot-7">
                                                    <label for="time-slot-7">
                                                        <strong>14:00 pm - 14:30 pm</strong>
                                                        <span>1 slots available</span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Panel Dropdown / End -->

                            </div>

                            <!-- Book Now -->
                            <a href="#" class="button book-now fullwidth margin-top-5">Send Request</a>
                        </div>

                    </div>
                    <!-- Booking Widget / End -->


                    <!-- Widget -->
                    <div class="widget">

                        <!-- Agent Widget -->
                        <div class="agent-widget">
                            <div class="agent-title">
                                <div class="agent-photo"><img src="images/agent-avatar.jpg" alt="" /></div>
                                <div class="agent-details">
                                    <h4><a href="#">Jennie Wilson</a></h4>
                                    <span><i class="sl sl-icon-call-in"></i>(123) 123-456</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <input type="text" placeholder="Your Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$">
                            <input type="text" placeholder="Your Phone">
                            <textarea>I'm interested in this property [ID 123456] and I'd like to know more details.</textarea>
                            <button class="button fullwidth margin-top-5">Send Message</button>
                        </div>
                        <!-- Agent Widget / End -->

                    </div>
                    <!-- Widget / End -->


                    <!-- Widget -->
                    <div class="widget">
                        <h3 class="margin-bottom-30 margin-top-30">Mortgage Calculator</h3>

                        <!-- Mortgage Calculator -->
                        <form action="javascript:void(0);" autocomplete="off" class="mortgageCalc" data-calc-currency="USD">
                            <div class="calc-input">
                                <div class="pick-price tip" data-tip-content="Set This Property Price"></div>
                                <input type="text" id="amount" name="amount" placeholder="Sale Price" required>
                                <label for="amount" class="fa fa-usd"></label>
                            </div>

                            <div class="calc-input">
                                <input type="text" id="downpayment" placeholder="Down Payment">
                                <label for="downpayment" class="fa fa-usd"></label>
                            </div>

                            <div class="calc-input">
                                <input type="text" id="years" placeholder="Loan Term (Years)" required>
                                <label for="years" class="fa fa-calendar-o"></label>
                            </div>

                            <div class="calc-input">
                                <input type="text" id="interest" placeholder="Interest Rate" required>
                                <label for="interest" class="fa fa-percent"></label>
                            </div>

                            <button class="button calc-button" formvalidate>Calculate</button>
                            <div class="calc-output-container"><div class="notification success">Monthly Payment: <strong class="calc-output"></strong></div></div>
                        </form>
                        <!-- Mortgage Calculator / End -->

                    </div>
                    <!-- Widget / End -->


                    <!-- Widget -->
                    <div class="widget">
                        <h3 class="margin-bottom-35">Featured Properties</h3>

                        <div class="listing-carousel outer">
                            <!-- Item -->
                            <div class="item">
                                <div class="listing-item compact">

                                    <a href="#" class="listing-img-container">

                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                            <span>For Sale</span>
                                        </div>

                                        <div class="listing-img-content">
                                            <span class="listing-compact-title">Eagle Apartments <i>$275,000</i></span>

                                            <ul class="listing-hidden-content">
                                                <li>Area <span>530 sq ft</span></li>
                                                <li>Rooms <span>3</span></li>
                                                <li>Beds <span>1</span></li>
                                                <li>Baths <span>1</span></li>
                                            </ul>
                                        </div>

                                        <img src="images/listing-01.jpg" alt="">
                                    </a>

                                </div>
                            </div>
                            <!-- Item / End -->

                            <!-- Item -->
                            <div class="item">
                                <div class="listing-item compact">

                                    <a href="#" class="listing-img-container">

                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                            <span>For Sale</span>
                                        </div>

                                        <div class="listing-img-content">
                                            <span class="listing-compact-title">Selway Apartments <i>$245,000</i></span>

                                            <ul class="listing-hidden-content">
                                                <li>Area <span>530 sq ft</span></li>
                                                <li>Rooms <span>3</span></li>
                                                <li>Beds <span>1</span></li>
                                                <li>Baths <span>1</span></li>
                                            </ul>
                                        </div>

                                        <img src="images/listing-02.jpg" alt="">
                                    </a>

                                </div>
                            </div>
                            <!-- Item / End -->

                            <!-- Item -->
                            <div class="item">
                                <div class="listing-item compact">

                                    <a href="#" class="listing-img-container">

                                        <div class="listing-badges">
                                            <span class="featured">Featured</span>
                                            <span>For Sale</span>
                                        </div>

                                        <div class="listing-img-content">
                                            <span class="listing-compact-title">Oak Tree Villas <i>$325,000</i></span>

                                            <ul class="listing-hidden-content">
                                                <li>Area <span>530 sq ft</span></li>
                                                <li>Rooms <span>3</span></li>
                                                <li>Beds <span>1</span></li>
                                                <li>Baths <span>1</span></li>
                                            </ul>
                                        </div>

                                        <img src="images/listing-03.jpg" alt="">
                                    </a>

                                </div>
                            </div>
                            <!-- Item / End -->
                        </div>

                    </div>
                    <!-- Widget / End -->

                </div>
            </div>
            <!-- Sidebar / End -->

        </div>
    </div>


    <!-- Footer
    ================================================== -->
    <div class="margin-top-55"></div>

    <div id="footer" class="sticky-footer">
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
    <script type="text/javascript" src="{{ asset('scripts/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/jquery-migrate-3.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/chosen.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/rangeSlider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/rangeSlider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/masonry.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/mmenu.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/tooltips.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('scripts/custom.js') }}"></script>

    <!-- Maps -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="scripts/infobox.min.js"></script>
    <script type="text/javascript" src="scripts/markerclusterer.js"></script>
    <script type="text/javascript" src="scripts/maps.js"></script>

    <!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
    <script src="scripts/moment.min.js"></script>
    <script src="scripts/daterangepicker.js"></script>
    <script>
        // Calendar Init
        $(function() {
            $('#date-picker').daterangepicker({
                "opens": "left",
                singleDatePicker: true,

                // Disabling Date Ranges
                isInvalidDate: function(date) {
                    // Disabling Date Range
                    var disabled_start = moment('09/02/2018', 'MM/DD/YYYY');
                    var disabled_end = moment('09/06/2018', 'MM/DD/YYYY');
                    return date.isAfter(disabled_start) && date.isBefore(disabled_end);

                    // Disabling Single Day
                    // if (date.format('MM/DD/YYYY') == '08/08/2018') {
                    //     return true;
                    // }
                }
            });
        });

        // Calendar animation
        $('#date-picker').on('showCalendar.daterangepicker', function(ev, picker) {
            $('.daterangepicker').addClass('calendar-animated');
        });
        $('#date-picker').on('show.daterangepicker', function(ev, picker) {
            $('.daterangepicker').addClass('calendar-visible');
            $('.daterangepicker').removeClass('calendar-hidden');
        });
        $('#date-picker').on('hide.daterangepicker', function(ev, picker) {
            $('.daterangepicker').removeClass('calendar-visible');
            $('.daterangepicker').addClass('calendar-hidden');
        });
    </script>


    <!-- Replacing dropdown placeholder with selected time slot -->
    <script>
        $(".time-slot").each(function() {
            var timeSlot = $(this);
            $(this).find('input').on('change',function() {
                var timeSlotVal = timeSlot.find('strong').text();

                $('.panel-dropdown.time-slots-dropdown a').html(timeSlotVal);
                $('.panel-dropdown').removeClass('active');
            });
        });
    </script>





</div>
<!-- Wrapper / End -->


</body>
</html>
