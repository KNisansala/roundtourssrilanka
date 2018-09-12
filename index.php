<!DOCTYPE html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="TRABBLE - Tour, Travel, Travel Agency Template">
        <meta name="keywords" content="Tour, Travel, Travel Agency Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Round Tours Sri Lanka</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Button Hover animate css -->
        <link rel="stylesheet" href="css/hover-min.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- slick css -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- chosen.min-->
        <link rel="stylesheet" href="css/chosen.min.css">
        <!-- chosen.min-->
        <link rel="stylesheet" href="css/jquery-customselect.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- magnific Css -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Revolution Slider -->
        <link rel="stylesheet" href="css/assets/revolution/layers.css">
        <link rel="stylesheet" href="css/assets/revolution/navigation.css">
        <link rel="stylesheet" href="css/assets/revolution/settings.css">
        <!-- custome css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body> 
        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>	

        <!-- header area start here -->
        <?php
        include './header.php';
        ?>
        <!-- header area end here -->
        <?php
        include './slider.php';
        ?>

        <!-- slider area end here -->

        <section class="tabbased-search-area tabbased-search-area-2">
            <div class="container">
                <!-- tab menu 2 start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="tabbable-menu background-opacity">
                            <ul class="tab-menu" id="myTab1">
                                <li class="active">
                                    <h6><a href="#hotels" data-easein="fadeIn">Hotels <img src="images/icon/hotel.png" alt=""></a></h6>
                                </li>
                                <li>
                                    <h6><a href="#tour" data-easein="fadeIn">Tour <img src="images/icon/tour.png" alt=""></a></h6>
                                </li>
                                <li>
                                    <h6><a href="#flights" data-easein="fadeIn">Flights <img src="images/icon/fly.png" alt=""></a></h6>
                                </li>
                                <li>
                                    <h6><a href="#vehicles" data-easein="fadeIn">Vehicles <img src="images/icon/car.png" alt=""></a></h6>
                                </li>
                                <li>
                                    <h6><a href="#ship" data-easein="fadeIn">Ship <img src="images/icon/ship.png" alt=""></a></h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- tab menu 2 end -->

                <!-- tab content 2 start -->
                <div class="row">
                    <div class="col-md-12 bg-shadoow-image">
                        <div class="tab-content tab-content-2" id="tab-content1">
                            <!-- hotels form -->
                            <div class="tab-pane active" id="hotels">
                                <div class="hotels-form">
                                    <form action="#" method="post">
                                        <div class="hotel-input-2  input-b-2">
                                            <input type="text" name="s" id="keyword" class="hotel-input-first" placeholder="Type Keyword">
                                        </div>
                                        <div class="hotel-input-4 input-b-2">
                                            <select id='standard1' name='standard' class='custom-select'>
                                                <option value=''>Select a Location</option>
                                                <option value='Us'>America</option>
                                                <option value='Canda'>Canada</option>
                                                <option value='london'>London</option>
                                                <option value='france'>Paris</option>
                                                <option value='bd'>Bangladesh</option>
                                            </select>
                                        </div>
                                        <div class="hotel-input-1 input-s-2">
                                            <input type="text" name="s" id="datepicker" class="hotel-input-first" placeholder="Check-In">
                                        </div>
                                        <div class="hotel-input-1 input-s-2">
                                            <input type="text" name="s" id="datepicker1" class="hotel-input-first" placeholder="Check-out">
                                        </div>
                                        <div class="hotel-input-1 input-s-2">
                                            <input type="number" name="s" id="guest" class="hotel-input-first" placeholder="Guest">
                                        </div>
                                        <div class="hotel-input-1 input-s-2">
                                            <input type="text" name="s" id="budget" class="hotel-input-first" placeholder="Budget">
                                        </div>
                                        <div class="search-btn-2">
                                            <button type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end hotels form -->

                            <!-- tour form -->
                            <div class="tab-pane" id="tour">
                                <div class="hotels-form">
                                    <form action="#" method="post">
                                        <div class="hotel-input-4-23 input-b-2">
                                            <input type="text" name="s" id="keyword2" class="hotel-input-first" placeholder="Type Keyword">
                                        </div>
                                        <div class="hotel-input-4-23 input-b-2">
                                            <select id='standard2' name='standard' class='custom-select'>
                                                <option value=''>Select a Location</option>
                                                <option value='Us'>America</option>
                                                <option value='Canda'>Canada</option>
                                                <option value='london'>London</option>
                                                <option value='france'>Paris</option>
                                                <option value='bd'>Bangladesh</option>
                                            </select>
                                        </div>
                                        <div class="hotel-input-4-23 input-s-2">
                                            <input type="text" name="s" id="datepicker2" class="hotel-input-first" placeholder="Check-In Date">
                                        </div>
                                        <div class="hotel-input-4-23 input-s-2">
                                            <input type="number" name="s" id="guest2" class="hotel-input-first" placeholder="Number of Guest">
                                        </div>
                                        <div class="search-btn-2">
                                            <button type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end tour forms -->

                            <!-- start flights form -->
                            <div class="tab-pane" id="flights">
                                <div class="hotels-form flights-form">
                                    <form action="#" method="post">
                                        <div class="tour-input-20 input-b">
                                            <select id='standard3' name='standard' class='custom-select'>
                                                <option value=''>Origin City or airport</option>
                                                <option value='Us'>America</option>
                                                <option value='Canda'>Canada</option>
                                                <option value='london'>London</option>
                                                <option value='france'>Paris</option>
                                                <option value='bd'>Bangladesh</option>
                                            </select>
                                        </div>
                                        <div class="tour-input-20 input-b">
                                            <select id='standard4' name='standard' class='custom-select'>
                                                <option value=''>Destination City</option>
                                                <option value='Us'>America</option>
                                                <option value='Canda'>Canada</option>
                                                <option value='london'>London</option>
                                                <option value='france'>Paris</option>
                                                <option value='bd'>Bangladesh</option>
                                            </select>
                                        </div>
                                        <div class="tour-input-15 input-s">
                                            <input type="text" name="s" id="datepicker3" class="hotel-input-first" placeholder="Daparture date">
                                        </div>

                                        <div class="tour-input-15 input-s">
                                            <input type="text" name="s" id="datepicker4" class="hotel-input-first" placeholder="Return date">
                                        </div>

                                        <div class="tour-input-15 input-b">
                                            <select id='nosearch' name='standard' class='custom-select'>
                                                <option value=''>Economy</option>
                                                <option value='Economy'>Economy</option>
                                                <option value='Business'>Business</option>
                                            </select>
                                        </div>

                                        <div class="tour-input-15 border-right-none  input-s">
                                            <select id='nosearch1' name='standard' class='custom-select'>
                                                <option value=''>Adult</option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                                <option value='6'>6</option>
                                                <option value='7'>7</option>
                                                <option value='8'>8</option>
                                                <option value='9'>9</option>
                                                <option value='10'>10</option>
                                            </select>
                                        </div>
                                        <div class="tour-input-15  input-s">
                                            <select id='nosearch2' name='standard' class='custom-select'>
                                                <option value=''>Kids</option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                                <option value='6'>6</option>
                                                <option value='7'>7</option>
                                                <option value='8'>8</option>
                                                <option value='9'>9</option>
                                                <option value='10'>10</option>
                                            </select>
                                        </div>
                                        <div class="search-btn-2">
                                            <button type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end flight forms -->

                            <!-- start vehicles form -->
                            <div class="tab-pane" id="vehicles">
                                <div class="hotels-form">
                                    <form action="#" method="post">
                                        <div class="hotel-input-4-23">
                                            <input type="text" name="s" id="pickupdate" class="hotel-input-first" placeholder="Pickup Date & time">
                                        </div>
                                        <div class="hotel-input-4-23">
                                            <input type="number" name="s" id="Hours" class="hotel-input-first" placeholder="Hours">
                                        </div>
                                        <div class="hotel-input-4-23">
                                            <input type="text" name="s" id="Location" class="hotel-input-first" placeholder="Pickup Location">
                                        </div>
                                        <div class="hotel-input-4-23">
                                            <input type="text" name="s" id="Location2" class="hotel-input-first" placeholder="Drop Location">
                                        </div>
                                        <div class="search-btn-2">
                                            <button type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end vehicles form -->

                            <!-- start ship forms -->
                            <div class="tab-pane" id="ship">
                                <div class="hotels-form">
                                    <form action="#" method="post">
                                        <div class="hotel-input-4-23">
                                            <input type="text" name="s" id="shippickupdate" class="hotel-input-first" placeholder="Pickup Date & time">
                                        </div>
                                        <div class="hotel-input-4-23">
                                            <input type="number" name="s" id="time" class="hotel-input-first" placeholder="Hours">
                                        </div>
                                        <div class="hotel-input-4-23">
                                            <input type="text" name="s" id="Location3" class="hotel-input-first" placeholder="Pickup Location">
                                        </div>
                                        <div class="hotel-input-4-23">
                                            <input type="text" name="s" id="Location4" class="hotel-input-first" placeholder="Drop Location">
                                        </div>
                                        <div class="search-btn-2">
                                            <button type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end ship forms -->
                        </div>
                    </div>
                </div> <!-- tab content 2 end -->
            </div>
        </section> <!--end header tab based search area-->

        <section class="section-paddings welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-welcome-area">
                            <div class="single-imag">
                                <img src="images/welcome/wel2.jpg" alt="" class="img-thumbnail img-responsive">
                            </div>
                            <div class="overlay-image">
                                <img src="images/welcome/wel1.jpg" alt="" class="img-thumbnail img-responsive">
                            </div>
                        </div>
                    </div> <!-- welcome area left side end -->

                    <div class="col-md-6">
                        <div class="single-welcome-text">
                            <div class="section-title-version-2">
                                <h2>Welcome to Round Tour Sri Lanka</h2>
                                <h5>Lorem ipsum dolor sitp amet conspectetuer adipiscing elit sed diam nonummy nibh euismody tincidunt ut laoree.</h5>
                                <div class="welcome-content">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismody tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim adi minim veniam, qu nostrud exerci tation ullamcorperea commodo consequat utm euismod tincidunt ut laore dolore magna aliquam erat volutpat.</p>
                                    <p>lorem ipsum dolor sit amet, consectetuer adipiscing elit yoused diam nonummy nibh euismody tincidunt ut laoreet dolore magna.</p>
                                    <a href="#" class="read-more hvr-fade">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- welcome area right side end -->
                </div>
            </div>
        </section> <!-- welcome area start end here -->

        <section class="tour-package-bg image-bg-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title-version-2-white text-center">
                            <h2>Let’s Enjoy Excellent Tour Packages</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
                        </div>
                    </div>
                    <!-- tour packages carosual -->
                    <div class="popular-packages-carasoul owl-carousel">
                        <div class="single-package-carasoul">
                            <div class="package-location">
                                <img src="images/packages/pac1.jpg" alt="">
                                <span>$150</span>
                            </div>

                            <div class="package-details">
                                <div class="package-places">
                                    <h4> Festival </h4>
                                    <span> <i class="fa fa-clock-o"></i> 4 Days, 5 Nights Stay</span>
                                    <div class="details">
                                        <p><span>Included</span>: Flight Facility, 5 Star Hotel, Sightseeing, Transfers, Meals.</p>
                                    </div>
                                </div>
                                <div class="package-ratings-review">
                                    <ul class="two-column">
                                        <li>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <p>(27 Reviews)</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-long-btn hvr-shutter-out-horizontal">
                                <a href="#">Book Now</a>
                            </div>
                        </div>

                        <div class="single-package-carasoul">
                            <div class="package-location">
                                <img src="images/packages/pac2.jpg" alt="">
                                <span>$150</span>
                            </div>
                            <div class="package-details">
                                <div class="package-places">
                                    <h4>Wild</h4>
                                    <span> <i class="fa fa-clock-o"></i> 4 Days, 5 Nights Stay</span>
                                    <div class="details">
                                        <p><span>Included</span>: Flight Facility, 5 Star Hotel, Sightseeing, Transfers, Meals.</p>
                                    </div>
                                </div>
                                <div class="package-ratings-review">
                                    <ul class="two-column">
                                        <li>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <p>(27 Reviews)</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-long-btn hvr-shutter-out-horizontal">
                                <a href="#">Book Now</a>
                            </div>
                        </div>

                        <div class="single-package-carasoul">
                            <div class="package-location">
                                <img src="images/packages/pac3.jpg" alt="">
                                <span>$150</span>
                            </div>

                            <div class="package-details">
                                <div class="package-places">
                                    <h4> Down South </h4>
                                    <span> <i class="fa fa-clock-o"></i> 4 Days, 5 Nights Stay</span>
                                    <div class="details">
                                        <p><span>Included</span>: Flight Facility, 5 Star Hotel, Sightseeing, Transfers, Meals.</p>
                                    </div>
                                </div>
                                <div class="package-ratings-review">
                                    <ul class="two-column">
                                        <li>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <p>(27 Reviews)</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-long-btn hvr-shutter-out-horizontal">
                                <a href="#">Book Now</a>
                            </div>
                        </div>

                        <div class="single-package-carasoul">
                            <div class="package-location">
                                <img src="images/packages/pac4.jpg" alt="">
                                <span>$150</span>
                            </div>

                            <div class="package-details">
                                <div class="package-places">
                                    <h4>Rafting</h4>
                                    <span> <i class="fa fa-clock-o"></i> 4Days, 5Nights Stay</span>
                                    <div class="details">
                                        <p><span>Included</span>: Flight Facility, 5 Star Hotel, Sightseeing, Transfers, Meals.</p>
                                    </div>
                                </div>
                                <div class="package-ratings-review">
                                    <ul class="two-column">
                                        <li>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <p>(27 Reviews)</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="package-long-btn hvr-shutter-out-horizontal">
                                <a href="#">Book Now</a>
                            </div>
                        </div>
                    </div> <!-- tour packages carosual end -->
                </div>
            </div>
        </section> <!-- Tour Packages end here -->



        <!-- most popular destination Start here -->

        <section class="pb-70 pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h2>Most popular destination</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
                        </div>
                    </div>
                </div>
                <div class="destination-slider-active owl-carousel">
                    <div class="single-destination">
                        <figure>
                            <a href="#"><img src="images/destination/de1.jpg" alt="">
                            </a>
                            <figcaption>
                                <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                            </figcaption>
                        </figure>
                        <div class="des-city">
                            <a href="#"><i class="fa fa-map-marker"></i>Yala</a>
                            <h4>Safari <span>3 Tours</span></h4>
                        </div>
                    </div> <!-- single popular destination  end-->

                    <div class="single-destination">
                        <figure>
                            <a href="#"><img src="images/destination/de2.jpg" alt="">
                            </a>
                            <figcaption>
                                <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                            </figcaption>
                        </figure>
                        <div class="des-city">
                            <a href="#"><i class="fa fa-map-marker"></i>Dabulla</a>
                            <h4>Dabulla Temple<span>5 Tours</span></h4>
                        </div>
                    </div> <!-- single popular destination  end-->

                    <div class="single-destination">
                        <figure>
                            <a href="#"><img src="images/destination/de3.jpg" alt="">
                            </a>
                            <figcaption>
                                <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                            </figcaption>
                        </figure>
                        <div class="des-city">
                            <a href="#"><i class="fa fa-map-marker"></i>Hikkaduwa</a>
                            <h4>Hikkaduwa Coral Reef<span>4 Tours</span></h4>
                        </div>
                    </div> <!-- single popular destination  end-->

                    <div class="single-destination">
                        <figure>
                            <a href="#"><img src="images/destination/de4.jpg" alt="">
                            </a>
                            <figcaption>
                                <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                            </figcaption>
                        </figure>
                        <div class="des-city">
                            <a href="#"><i class="fa fa-map-marker"></i>Galle</a>
                            <h4>Galle Fort<span>3 Tours</span></h4>
                        </div>
                    </div> <!-- single popular destination  end-->

                    <div class="single-destination">
                        <figure>
                            <a href="#"><img src="images/destination/de5.jpg" alt="">
                            </a>
                            <figcaption>
                                <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                            </figcaption>
                        </figure>
                        <div class="des-city">
                            <a href="#"><i class="fa fa-map-marker"></i>Arugam Bay</a>
                            <h4>Surfing Point<span>5 Tours</span></h4>
                        </div>
                    </div> <!-- single popular destination  end-->

                </div>

                <!--                <div class="col-md-12 col-sm-12 col-xs-12"> 
                
                                    <a href="#" class="travel-viewall-btn hvr-shutter-out-horizontal">View All</a>
                
                                </div>-->

                <div class="row">
                    <a href="#" class="view-all hvr-fade">View All</a>
                </div>
            </div>
        </section> <!-- end popular destination-->

        <!-- discount offer start here -->
       <!--        <section class="discount-bg">
                   <div class="container">
                       <div class="row">
                           <div class="col-sm-12">
                               <div class="discount-content text-center">
                                   <h2>50% Discount Offer!</h2>
                                   <h3>Italy – All Stunning Places</h3>
                                   <h4><span>$800</span> - 2 Persons - 4day, 5night Stay</h4>
                                   <div class="discount-btn">
                                       <a href="#" class="travel-primary-btn hvr-fade">Book Now</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section> -->
        <!-- discount offer end here -->

        <!-- Last minute offer start here -->
<!--        <section class="section-paddings offer-package">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title-version-2-black text-center">
                            <h2>Latest Offer</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col xs-12">
                        <div class="single-offer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 package-pho-res">
                                    <div class="single-offer-image">
                                        <img src="images/offer/1.jpg" alt="">
                                        <span>30%off</span>
                                    </div>
                                </div>
                                <div class="single-offers-elemetns">
                                    <div class="col-md-6 col-sm-6 col-xs-12 package-pho-res-text">
                                        <div class="single-offer-details">
                                            <div class="offer-title">
                                                <h4>Best tours in Thailand</h4>
                                                <p>4Days, 5Nights <del>$550</del> <span>$500</span>
                                                </p>
                                            </div>
                                            <div class="offer-details">
                                                <p>Lorem ipsum dolor sit amet consct etur adipiscing elit, sed do eiusmo tempor incididunt ut labore magn a aliqua .</p>
                                                <div class="offer-btn">
                                                    <a href="#" class="travel-booking-btn-lg hvr-shutter-out-horizontal">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  end single  offer 

                    <div class="col-md-6 col-sm-6 col xs-12">
                        <div class="single-offer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 package-pho-res">
                                    <div class="single-offer-image">
                                        <img src="images/offer/2.jpg" alt="">
                                        <span>20%off</span>
                                    </div>
                                </div>
                                <div class="single-offers-elemetns">
                                    <div class="col-md-6 col-sm-6 col-xs-12 package-pho-res-text">
                                        <div class="single-offer-details">
                                            <div class="offer-title">
                                                <h4>Best tours in Mexico</h4>
                                                <p>4Days, 5Nights <del>$450</del> <span>$400</span>
                                                </p>
                                            </div>
                                            <div class="offer-details">
                                                <p>Lorem ipsum dolor sit amet consct etur adipiscing elit, sed do eiusmo tempor incididunt ut labore magn a aliqua .</p>
                                                <div class="offer-btn">
                                                    <a href="#" class="travel-booking-btn-lg hvr-shutter-out-horizontal">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  end single  offer 

                    <div class="col-md-6 col-sm-6 col xs-12">
                        <div class="single-offer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 package-pho-res-text">
                                    <div class="single-offer-image">
                                        <img src="images/offer/3.jpg" alt="">
                                        <span>10%off</span>
                                    </div>
                                </div>
                                <div class="single-offers-elemetns">
                                    <div class="col-md-6 col-sm-6 col-xs-12 package-pho-res">
                                        <div class="single-offer-details">
                                            <div class="offer-title">
                                                <h4>Best tours in Paris</h4>
                                                <p>4Days, 5Nights <del>$550</del> <span>$500</span>
                                                </p>
                                            </div>
                                            <div class="offer-details">
                                                <p>Lorem ipsum dolor sit amet consct etur adipiscing elit, sed do eiusmo tempor incididunt ut labore magn a aliqua .</p>
                                                <div class="offer-btn">
                                                    <a href="#" class="travel-booking-btn-lg hvr-shutter-out-horizontal">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   end single  offer 

                    <div class="col-md-6 col-sm-6 col xs-12">
                        <div class="single-offer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 package-pho-res">
                                    <div class="single-offer-image">
                                        <img src="images/offer/4.jpg" alt="">
                                        <span>40%off</span>
                                    </div>
                                </div>
                                <div class="single-offers-elemetns">
                                    <div class="col-md-6 col-sm-6 col-xs-12 package-pho-res">
                                        <div class="single-offer-details">
                                            <div class="offer-title">
                                                <h4>Best tours in India</h4>
                                                <p>4Days, 5Nights <del>$550</del> <span>$500</span>
                                                </p>
                                            </div>
                                            <div class="offer-details">
                                                <p>Lorem ipsum dolor sit amet consct etur adipiscing elit, sed do eiusmo tempor incididunt ut labore magn a aliqua .</p>
                                                <div class="offer-btn">
                                                    <a href="#" class="travel-booking-btn-lg hvr-shutter-out-horizontal">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  end single  offer 
                </div>
            </div>
        </section> -->
        <!-- Last minute offer end here -->

        <!-- testimonial area start here -->
        <section class="testimonial-area image-bg-padding-100">
            <div class="testimonial-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-title-white text-center mbt-100">
                                <h2>What travellers Say About Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="custom-width text-center">
                            <!-- start top media -->
                            <div class="top-testimonial-image row slick-pagination">
                                <div class="carousel-images slider-nav">
                                    <div>
                                        <img src="images/client/1.jpg" alt="1" class="img-circle">
                                    </div>
                                    <div>
                                        <img src="images/client/2.jpg" alt="3" class="img-circle">
                                    </div>
                                    <div>
                                        <img src="images/client/3.jpg" alt="2" class="img-circle">
                                    </div>

                                    <div>
                                        <img src="images/client/2.jpg" alt="2" class="img-circle">
                                    </div>
                                    <div>
                                        <img src="images/client/6.jpg" alt="2" class="img-circle">
                                    </div>
                                </div>
                            </div>
                        </div><!-- end top media images -->

                        <div class="block-text row">
                            <div class="carousel-text slider-for col-sm-8 col-sm-offset-2">
                                <div class="testimonial-message">
                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibhu euismod tincidunt ut laoreet dolor you magna aliquam erat volutpat. Ut wisi enim adefra miniumyp veniam, quis nostrud exerci tation ullavolutpat.</p>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="client-bio">
                                        <h4>Jhonthan Smith</h4>
                                        <span>London Trip Travelers</span>
                                    </div>
                                </div> <!-- client testimonial end -->

                                <div class="testimonial-message">
                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibhu euismod tincidunt ut laoreet dolor you magna aliquam erat volutpat. Ut wisi enim adefra miniumyp veniam, quis nostrud.</p>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="client-bio">
                                        <h4>Daniel Baci</h4>
                                        <span>Thailand Trip Travelers</span>
                                    </div>
                                </div> <!-- client testimonial end -->

                                <div class="testimonial-message">
                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibhu euismod tincidunt ut laoreet dolor you magna aliquam erat volutpat. Ut wisi enim adefra miniumyp veniam, quis nostrud.</p>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="client-bio">
                                        <h4>John Doe</h4>
                                        <span>USA Trip Travelers</span>
                                    </div>
                                </div> <!-- client testimonial end -->

                                <div class="testimonial-message">
                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibhu euismod tincidunt ut laoreet dolor you magna aliquam erat volutpat. Ut wisi enim adefra miniumyp veniam, quis nostrud.</p>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="client-bio">
                                        <h4>Jhonthan Smith</h4>
                                        <span>London Trip Travelers</span>
                                    </div>
                                </div>	<!-- client testimonial end -->

                                <div class="testimonial-message">
                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibhu euismod tincidunt ut laoreet dolor you magna aliquam erat volutpat. Ut wisi enim adefra miniumyp veniam, quis nostrud.</p>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="client-bio">
                                        <h4>Jhonthan Smith</h4>
                                        <span>London Trip Travelers</span>
                                    </div>
                                </div> <!-- client testimonial end -->

                                <div class="testimonial-message">
                                    <div class="message">
                                        <p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibhu euismod tincidunt ut laoreet dolor you magna aliquam erat volutpat. Ut wisi enim adefra miniumyp veniam, quis nostrud</p>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="client-bio">
                                        <h4>Jhonthan Smith</h4>
                                        <span>London Trip Travelers</span>
                                    </div>
                                </div> <!-- client testimonial end -->
                            </div> <!-- /.block-text -->
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!-- testimonial area end here -->

        <!-- single popular destination start -->
        <!--        <section class="section-blog-bg blog-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="section-title-version-2-white text-center">
                                    <h2>Travel guide and Expert Advice</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                             single travel blog
                            <div class="col-md-4 col-sm-4 col-xs-12 single-item">
                                <div class="single-travel-blog single-travel-blog-2">
                                    <div class="blog-image">
                                        <a href="#"><img src="images/blog/5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-content">
                                            <h4>Tips for taking a long-term trip with kids.</h4>
                                            <div class="blog-meta">
                                                <ul class="post-social-2">
                                                    <li><a href="#"><i class="fa fa-calendar"></i> 12July, 2018</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-user"></i> Jusi Boy</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-comments"></i>43</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus.</p>
                                        </div>
                                        <div class="read-more-btn">
                                            <a href="#">Read More <i class="fa fa-angle-right"> </i></a>
                                        </div>
                                        <ul class="soical-share">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  single travel guide & security end
        
                            <div class="col-md-4 col-sm-4 col-xs-12 single-item">
                                <div class="single-travel-blog single-travel-blog-2">
                                    <div class="blog-image">
                                        <a href="#"><img src="images/blog/6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-content">
                                            <h4>Tips for taking a long-term trip with kids.</h4>
                                            <div class="blog-meta">
                                                <ul class="post-social-2">
                                                    <li><a href="#"><i class="fa fa-calendar"></i> 12July, 2018</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-user"></i> Jusi Boy</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-comments"></i>43</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus.</p>
                                        </div>
                                        <div class="read-more-btn">
                                            <a href="#">Read More <i class="fa fa-angle-right"> </i></a>
                                        </div>
                                        <ul class="soical-share">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  single travel guide & security end
        
                            <div class="col-md-4 col-sm-4 col-xs-12 single-item">
                                <div class="single-travel-blog single-travel-blog-2">
                                    <div class="blog-image">
                                        <a href="#"><img src="images/blog/7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-post-content">
                                            <h4>Tips for taking a long-term trip with kids.</h4>
                                            <div class="blog-meta">
                                                <ul class="post-social-2">
                                                    <li><a href="#"><i class="fa fa-calendar"></i> 12July, 2018</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-user"></i> Jusi Boy</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-comments"></i>43</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus.</p>
                                        </div>
                                        <div class="read-more-btn">
                                            <a href="#">Read More <i class="fa fa-angle-right"> </i></a>
                                        </div>
                                        <ul class="soical-share">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>  single travel guide & security end
                        </div>
                    </div>
                </section>-->
        <!-- single popular destination  end-->

        <section class="section-paddings">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="section-title-version-2-black text-center">
                            <h2>Gallery from Travelars</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum </p>
                        </div>
                    </div>
                </div>
                <!-- gallery iteam start here -->
                <div class="grid-3">
                    <div class="col-sm-12 col-md-6 grid-item">
                        <figure>
                            <img src="images/gallery/gal1.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/gal1.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Eiffel Tower</span></h4>
                                <h4>Caption By: <span>Michel Jusi</span></h4>
                            </figcaption>
                        </figure>
                    </div> <!-- end single gallery -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal2.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/gal2L.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Eiffel Tower</span></h4>
                                <h4>Caption By: <span>Michel Jusi</span></h4>
                            </figcaption>
                        </figure>
                    </div> <!-- end single gallery -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal3.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/gal3L.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Eiffel Tower</span></h4>
                                <h4>Caption By: <span>Michel Jusi</span></h4>
                            </figcaption>
                        </figure>
                    </div> <!-- end single gallery -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal4.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/1.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Eiffel Tower</span></h4>
                                <h4>Caption By: <span>Michel Jusi</span></h4>
                            </figcaption>
                        </figure>
                    </div> <!-- end single gallery -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal5.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/1.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Eiffel Tower</span></h4>
                                <h4>Caption By: <span>Michel Jusi</span></h4>
                            </figcaption>
                        </figure>
                    </div> <!--single gallery end -->

                    <div class=" col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal6.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/1.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Eiffel Tower</span></h4>
                                <h4>Caption By: <span>Michel Jusi</span></h4>
                            </figcaption>
                        </figure>
                    </div>
                    <!--single gallery end -->
                    <!--single gallery -->
                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal7.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/1.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Eiffel Tower</span></h4>
                                <h4>Caption By: <span>Michel Jusi</span></h4>
                            </figcaption>
                        </figure>
                    </div> <!--single gallery end -->

                    <div class="col-sm-6 col-md-3 grid-item">
                        <figure>
                            <img src="images/gallery/gal8.jpg" alt="">
                            <figcaption>
                                <a href="images/gallery/1.jpg"><i class="fa fa-pencil"></i></a>
                                <h4>Place <span>Eiffel Tower</span></h4>
                                <h4>Caption By: <span>Michel Jusi</span></h4>
                            </figcaption>
                        </figure>
                    </div> <!--single gallery end -->
                </div> <!-- gallery item end here -->
            </div>
        </section> <!-- gallery section end here -->

        <!-- footer start here -->
        <?php
        include './footer.php';
        ?>
        <!-- end footer -->

        <div class="to-top pos-rtive">
            <a href="#"><i class = "fa fa-angle-up"></i></a>
        </div> <!-- Scroll to top jump button end-->

        <!-- ============================
                JavaScript Files
        ============================= -->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-3.2.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- slick js -->
        <script src="js/slick.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- counter js -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- waypoints js -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- magnific js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Image loaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- chossen js -->
        <script src="js/chosen.jquery.min.js"></script>
        <script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
        <script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>
        <!-- Revolution Extensions -->
        <script src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
        <script src="js/assets/revolution/revolution.js"></script>
        <!-- Jquery plugin -->
        <script src="js/plugins.js"></script>
        <!-- select2 js plugin -->
        <script src="js/select2.min.js"></script>    
        <script src="js/colors.js"></script>
        <!-- Jquery plugin -->
        <script src="js/jquery-customselect.js"></script>
        <!-- main js -->
        <script src="js/custom.js"></script>
    </body>

</html>
