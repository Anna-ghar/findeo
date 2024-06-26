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
{{--                                    <li><a href="#">Agents</a>--}}
{{--                                        <ul>--}}
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

{{--                        <!-- User Menu -->--}}
{{--                        <div class="user-menu">--}}
{{--                            <div class="user-name"><span><img src="images/agent-03.jpg" alt=""></span>Hi, John!</div>--}}
{{--                            <ul>--}}
{{--                                <li><a href="my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>--}}
{{--                                <li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Bookmarks</a></li>--}}
{{--                                <li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>--}}
{{--                                <li><a href="index.html"><i class="sl sl-icon-power"></i> Log Out</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

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
    <div id="titlebar" class="submit-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><i class="fa fa-plus-circle"></i> Add Property</h2>
                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row">

            <!-- Submit Page -->
            <div class="col-md-12">
                <form action="{{route('properties.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="submit-page">

                    <div class="notification notice large margin-bottom-55">
                        <h4>Don't Have an Account?</h4>
                        <p>If you don't have an account you can create one by entering your email address in contact details section. A password will be automatically emailed to you.</p>
                    </div>

                    <!-- Section -->
                    <h3>Basic Information</h3>
                    <div class="submit-section">

                        <!-- Title -->
                        <div class="form">
                            <h5>Property Title <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
                            <input class="search-field" type="text" value="" name="title"/>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Status -->
                            <div class="col-md-6">
                                <h5>Status</h5>
                                <select class="chosen-select-no-single" name="status">
                                    <option label="blank"></option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>

                            <!-- Type -->
                            <div class="col-md-6">
                                <h5>Type</h5>
                                <select class="chosen-select-no-single" name="type_id">
                                    <option label="blank"></option>
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <!-- Row / End -->


                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Price -->
                            <div class="col-md-4">
                                <h5>Price <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
                                <div class="select-input disabled-first-option">
                                    <input type="text" data-unit="USD" name="price">
                                </div>
                            </div>

                            <!-- Area -->
                            <div class="col-md-4">
                                <h5>Area</h5>
                                <div class="select-input disabled-first-option">
                                    <input type="text" data-unit="Sq Ft" name="area">
                                </div>
                            </div>

                            <!-- Rooms -->
                            <div class="col-md-4">
                                <h5>Rooms</h5>
                                <select class="chosen-select-no-single" name="rooms">
                                    <option label="blank"></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>More than 5</option>
                                </select>
                            </div>

                        </div>
                        <!-- Row / End -->

                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <h3>Gallery</h3>
                    <div class="submit-section">
{{--                            <input type="file" class="form-control" name="photos[]" multiple />--}}
                        <div id="fileInputs">
                            <input type="file" class="form-control" name="photos[]" multiple />
                        </div>
                        <button type="button" id="addFileInput">Add More Files</button>
                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <h3>Location</h3>
                    <div class="submit-section">

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Address -->
                            <div class="col-md-6">
                                <h5>Address</h5>
                                <input type="text" name="address">
                            </div>

                            <!-- City -->
                            <div class="col-md-6">
                                <h5>City</h5>
                                <input type="text" name="city">
                            </div>

                            <!-- City -->
                            <div class="col-md-6">
                                <h5>State</h5>
                                <input type="text" name="state">
                            </div>

                            <!-- Zip-Code -->
                            <div class="col-md-6">
                                <h5>Zip-Code</h5>
                                <input type="text" name="zip-code">
                            </div>

                        </div>
                        <!-- Row / End -->

                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <h3>Detailed Information</h3>
                    <div class="submit-section">

                        <!-- Description -->
                        <div class="form">
                            <h5>Description</h5>
                            <textarea class="WYSIWYG" name="description" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                        </div>

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Age of Home -->
                            <div class="col-md-4">
                                <h5>Building Age <span>(optional)</span></h5>
                                <select class="chosen-select-no-single" name="building_age">
                                    <option label="blank"></option>
                                    <option>0 - 1 Years</option>
                                    <option>0 - 5 Years</option>
                                    <option>0 - 10 Years</option>
                                    <option>0 - 20 Years</option>
                                    <option>0 - 50 Years</option>
                                    <option>50 + Years</option>
                                </select>
                            </div>

                            <!-- Beds -->
                            <div class="col-md-4">
                                <h5>Bedrooms <span>(optional)</span></h5>
                                <select class="chosen-select-no-single" name="bedrooms">
                                    <option label="blank"></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <!-- Baths -->
                            <div class="col-md-4">
                                <h5>Bathrooms <span>(optional)</span></h5>
                                <select class="chosen-select-no-single" name="bathrooms">
                                    <option label="blank"></option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                        </div>
                        <!-- Row / End -->


                        <!-- Checkboxes -->
                        <h5 class="margin-top-30">Other Features <span>(optional)</span></h5>
                        <div class="checkboxes in-row margin-bottom-20">

                            @foreach($features as $feature)
                                <input id="check-{{ $feature->id }}" type="checkbox" name="features[]" value="{{ $feature->id }}">
                                <label for="check-{{ $feature->id }}">{{ $feature->name }}</label>
                            @endforeach

{{--                            <input id="check-2" type="checkbox" name="check">--}}
{{--                            <label for="check-2">Air Conditioning</label>--}}

{{--                            <input id="check-3" type="checkbox" name="check">--}}
{{--                            <label for="check-3">Swimming Pool</label>--}}

{{--                            <input id="check-4" type="checkbox" name="check" >--}}
{{--                            <label for="check-4">Central Heating</label>--}}

{{--                            <input id="check-5" type="checkbox" name="check">--}}
{{--                            <label for="check-5">Laundry Room</label>--}}


{{--                            <input id="check-6" type="checkbox" name="check">--}}
{{--                            <label for="check-6">Gym</label>--}}

{{--                            <input id="check-7" type="checkbox" name="check">--}}
{{--                            <label for="check-7">Alarm</label>--}}

{{--                            <input id="check-8" type="checkbox" name="check">--}}
{{--                            <label for="check-8">Window Covering</label>--}}

                        </div>
                        <!-- Checkboxes / End -->

                    </div>
                    <!-- Section / End -->


                    <!-- Section -->
                    <h3>Contact Details</h3>
                    <div class="submit-section">

                        <!-- Row -->
                        <div class="row with-forms">

                            <!-- Name -->
                            <div class="col-md-4">
                                <h5>Name</h5>
                                <input type="text">
                            </div>

                            <!-- Email -->
                            <div class="col-md-4">
                                <h5>E-Mail</h5>
                                <input type="text">
                            </div>

                            <!-- Name -->
                            <div class="col-md-4">
                                <h5>Phone <span>(optional)</span></h5>
                                <input type="text">
                            </div>

                        </div>
                        <!-- Row / End -->

                    </div>
                    <!-- Section / End -->


                    <div class="divider"></div>
{{--                    <a href="#" class="button preview margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></a>--}}
                    <button type="submit" class="button preview margin-top-5">Preview <i class="fa fa-arrow-circle-right"></i></button>

                </div>
                </form>
            </div>

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

</div>
<!-- Wrapper / End -->

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


    <!-- DropZone | Documentation: http://dropzonejs.com -->
    <script type="text/javascript" src="scripts/dropzone.js"></script>
    <script>
        $(".dropzone").dropzone({
            dictDefaultMessage: "<i class='sl sl-icon-plus'></i> Click here or drop files to upload",
        });
    </script>
<script>
    document.getElementById('addFileInput').addEventListener('click', function() {
        var input = document.createElement('input');
        input.type = 'file';
        input.className = 'form-control';
        input.name = 'photos[]';
        input.multiple = true;
        document.getElementById('fileInputs').appendChild(input);
    });
</script>







</body>
</html>
