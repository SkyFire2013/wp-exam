<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
//define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
//require( dirname( __FILE__ ) . '/wp-blog-header.php' ); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Crazy demo</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     <script src="https://kit.fontawesome.com/8064e623c9.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/styles.css">
     <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
</head>
<body>
     <header>
          <div class="container">
               <div class="logo-container">
                    <a href="/">
                         <img src="images/site-logo.png" alt="Crazy Domain">
                    </a>
               </div>
               <ul class="ctas">
                    <li class="with-pipe">
                         <a href="tel:+12345678" class="phn">
                              <i class="fas fa-phone-alt"></i>
                              +1234 5678
                         </a>
                    </li>
                    <li>
                         <a href="mailto:mail@crazydomains.com" class="mail">
                              <i class="far fa-envelope"></i>
                              crazydomains.com
                         </a>
                    </li>
                    <li>
                         <a href="#" class="primary-btn">
                              <i class="far fa-paper-plane"></i>
                              Book Now
                         </a>
                    </li>
               </ul>
          </div>
     </header>
     <div class="slider-block"> 
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>

               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                    <div class="item active">
                         <img src="images/slider1.png" alt="Slider 1">
                         <div class="slider-content">
                              <div class="title">
                                   Let's Make Your Best Trip Ever
                              </div>
                              <div class="description">
                                   We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience.
                              </div>
                              <div class="cta">
                                   <a href="#" class="primary-btn">
                                        <i class="far fa-paper-plane"></i>
                                        Book a tour
                                   </a>
                              </div>
                         </div>
                    </div>
                    <div class="item">
                         <img src="images/slider2.png" alt="Slider 2">
                         <div class="slider-content">
                              <div class="title">
                                   Let's Make Your Best Trip Ever
                              </div>
                              <div class="description">
                                   We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience.
                              </div>
                              <div class="cta">
                                   <a href="#" class="primary-btn">
                                        <i class="far fa-paper-plane"></i>
                                        Book a tour
                                   </a>
                              </div>
                         </div>
                    </div>
                    <div class="item">
                         <img src="images/slider3.png" alt="Slider 3">
                         <div class="slider-content">
                              <div class="title">
                                   Let's Make Your Best Trip Ever
                              </div>
                              <div class="description">
                                   We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience.
                              </div>
                              <div class="cta">
                                   <a href="#" class="primary-btn">
                                        <i class="far fa-paper-plane"></i>
                                        Book a tour
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div id="featured-tours">
          <div class="container">
               <div class="section-title">Featured Tours</div>
               <div class="section-text">
                    Explore the world with Intense! We offer you a vast variety of tours of all types featuring both exotic and already well-known destinations, some of which are listed below.
               </div>
               <div id="tours" class="row">
                    <div class="col col-lg-3">
                         <img class="img-responsive" src="images/tour1.png" alt="Tour 1">
                         <div class="tour-name">
                              Kamalame Cay Resort  
                         </div>
                         <div class="tour-details">
                              Kamalame Cay, The Bahamas
                         </div>
                         <div class="tour-read-more">
                              <a href="#" class="primary-btn">
                                   <i class="far fa-paper-plane"></i>
                                   read more
                              </a>
                         </div>
                    </div>
                    <div class="col col-lg-3">
                         <img class="img-responsive" src="images/tour2.png" alt="Tour 2">
                         <div class="tour-name">
                              Kamalame Cay Resort  
                         </div>
                         <div class="tour-details">
                              Kamalame Cay, The Bahamas
                         </div>
                         <div class="tour-read-more">
                              <a href="#" class="primary-btn">
                                   <i class="far fa-paper-plane"></i>
                                   read more
                              </a>
                         </div>
                    </div>
                    <div class="col col-lg-3">
                         <img class="img-responsive" src="images/tour3.png" alt="Tour 3">
                         <div class="tour-name">
                              Kamalame Cay Resort  
                         </div>
                         <div class="tour-details">
                              Kamalame Cay, The Bahamas
                         </div>
                         <div class="tour-read-more">
                              <a href="#" class="primary-btn">
                                   <i class="far fa-paper-plane"></i>
                                   read more
                              </a>
                         </div>
                    </div>
                    <div class="col col-lg-3">
                         <img class="img-responsive" src="images/tour4.png" alt="Tour 4">
                         <div class="tour-name">
                              Kamalame Cay Resort  
                         </div>
                         <div class="tour-details">
                              Kamalame Cay, The Bahamas
                         </div>
                         <div class="tour-read-more">
                              <a href="#" class="primary-btn">
                                   <i class="far fa-paper-plane"></i>
                                   read more
                              </a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div id="best-tours">
          <img class="img-responsive" src="images/bg-sea.png" alt="Sea">
          <div class="row content">
               <div class="title">
                    We Provide Only the Best Tours
               </div>
               <div class="description">
                    With more than 230 trips to worldwide destinations, including Europe, North & Central, South America, Asia,  Australia & New Zealand, we continue to offer new ways and the best tours for traveling every year.
               </div>
               <div class="cta">
                    <a href="#" class="secondary-btn">
                         <i class="far fa-paper-plane"></i>
                         GET IN TOUCH
                    </a>
               </div>
          </div>
          <div class="row why-us">
               <div class="section-title">
                    Why Us?
               </div>
               <div class="row boxes">
                    <div class="col col-lg-4 box">
                         <img src="images/best-services.png" alt="The Best Services">
                         <div class="title">The Best Service</div>
                         <div class="description">
                              Our aim is to provide you with the tour service of the top quality, and we'll do our best to find the suitable tour for you.
                         </div>
                    </div>
                    <div class="col col-lg-4 box">
                         <img src="images/everything-included.png" alt="Everthing is included">
                         <div class="title">Everything is included</div>
                         <div class="description">
                              There are dozens of aspects to pay attention to, while organizing a trip, and we’ll make sure your tour includes everything you need.
                         </div>
                    </div>
                    <div class="col col-lg-4 box">
                         <img src="images/great-prices.png" alt="Great Prices">
                         <div class="title">Great Prices</div>
                         <div class="description">
                              All our tours and excursions are available at really affordable prices so you can always pick a great destination.
                         </div>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>