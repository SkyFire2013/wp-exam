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
          <div class="row header">
               <div class="col col-sm-6 logo">
                    <a href="/">
                         <img class="site-logo "src="images/site-logo.png" alt="Crazy Domain">
                    </a>
               </div>
               <div class="col col-sm-6 ctas">
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
                         <li class="button">
                              <a href="#" class="primary-btn">
                                   <i class="far fa-paper-plane"></i>
                                   Book Now
                              </a>
                         </li>
                    </ul>
               </div>
          </div>
     </header>
     <div id="slider-block"> 
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
                         <img class="img-desktop" src="images/slider1.png" alt="Slider 1">
                         <img class="img-mobile" src="images/slider1-mobile.jpg" alt="Slider 1">
                         <div class="slider-content">
                              <div class="title">
                                   Let's Make Your Best Trip Ever
                              </div>
                              <div class="description">
                                   We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience.
                              </div>
                              <div class="cta">
                                   <a href="#" class="primary-btn block">
                                        <i class="far fa-paper-plane"></i>
                                        Book a tour
                                   </a>
                              </div>
                         </div>
                    </div>
                    <div class="item">
                         <img class="img-desktop" src="images/slider2.png" alt="Slider 2">
                         <img class="img-mobile" src="images/slider2-mobile.jpg" alt="Slider 2">
                         <div class="slider-content">
                              <div class="title">
                                   Let's Make Your Best Trip Ever
                              </div>
                              <div class="description">
                                   We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience.
                              </div>
                              <div class="cta">
                                   <a href="#" class="primary-btn block">
                                        <i class="far fa-paper-plane"></i>
                                        Book a tour
                                   </a>
                              </div>
                         </div>
                    </div>
                    <div class="item">
                         <img class="img-desktop" src="images/slider3.png" alt="Slider 3">
                         <img class="img-mobile" src="images/slider3-mobile.jpg" alt="Slider 3">
                         <div class="slider-content">
                              <div class="title">
                                   Let's Make Your Best Trip Ever
                              </div>
                              <div class="description">
                                   We are committed to offering travel services of the highest quality, combining our energy and enthusiasm, with our years of experience.
                              </div>
                              <div class="cta">
                                   <a href="#" class="primary-btn block">
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
     <div id="our-partners">
          <div class="section-title">
               Our Partners
          </div>
          <div class="partners row">
               <div class="col col-lg-2 partner">
                    <img src="images/client-climb-the-mountain.png" alt="Climb the mountain">
               </div>
               <div class="col col-lg-2 partner">
                    <img src="images/client-norcold.png" alt="Norcold">
               </div>
               <div class="col col-lg-2 partner">
                    <img src="images/client-goldengrid.png" alt="Golden Grid">
               </div>
               <div class="col col-lg-2 partner">
                    <img src="images/client-idea-box.png" alt="Idea Box">
               </div>
               <div class="col col-lg-2 partner">
                    <img src="images/client-cara-indoors.png" alt="Cara Indoor">
               </div>
               <div class="col col-lg-2 partner">
                    <img src="images/client-bullseye.png" alt="Bullseye">
               </div>
          </div>
     </div>
     <div id="client-feedbacks">
          <div class="section-title">
               What Our Clients Say
          </div>
          <div class="row clients">
               <div class="col col-lg-4 client">
                    <div class="row">
                         <div class="col col-sm-3">
                              <img src="images/lisaevants.png" alt="Lisa Evants">
                         </div>
                         <div class="col col-sm-9">
                              <div class="testimonial">
                                   Disney in December was absolutely delightful! From our 1 day at Magic Kingdom & 2 days at Animal Kingdom, our family was filled with excitement and magical memories.
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col col-lg-4 client">
                    <div class="row">
                         <div class="col col-sm-3">
                              <img src="images/nicholaslane.png" alt="Nicholas Lane">
                         </div>
                         <div class="col col-sm-9">
                              <div class="testimonial">
                                   You were an excellent Travel Agency for us! You considered our unique needs while planning our itinerary. Every suggestion you made was excellent!
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col col-lg-4 client">
                    <div class="row">
                         <div class="col col-sm-3">
                              <img src="images/ethandean.png" alt="Ethan Dean">
                         </div>
                         <div class="col col-sm-9">
                              <div class="testimonial">
                                   I’m sending you a sincere "thank you" for all of your assistance during my recent trip to Colorado. It was invaluable to me and I realize and appreciate it greatly.
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="row client-names">
               <div class="col col-lg-4">
                    <div class="row">
                         <div class="col col-sm-3"></div>
                         <div class="col col-sm-9 name">- Lisa Evants</div>
                    </div>
               </div>
               <div class="col col-lg-4">
                    <div class="row">
                         <div class="col col-sm-3"></div>
                         <div class="col col-sm-9 name">- Nicholas Lane</div>
                    </div>
               </div>
               <div class="col col-lg-4">
                    <div class="row">
                         <div class="col col-sm-3"></div>
                         <div class="col col-sm-9 name">- Ethan Dean</div>
                    </div>
               </div>
          </div>
          <div class="cta">
               <a href="#" class="primary-btn">
                    <i class="far fa-paper-plane"></i>
                    get in touch
               </a>
          </div>
     </div>
     <footer>
          <div class="row footer">
               <div class="col-sm-6 logo">
                    <a href="/">
                         <img class="site-logo" src="images/site-logo.png" alt="Crazy Domain">
                    </a>
               </div>
               <div class="col-sm-6 social-media-icons">
                    <ul>
                         <li>
                              <a href="#">
                                   <i class="fab fa-facebook-f"></i>
                              </a>
                         </li>
                         <li>
                              <a href="#">
                                   <i class="fab fa-twitter"></i>
                              </a>
                         </li>
                         <li>
                              <a href="#">
                                   <i class="fab fa-google-plus-g"></i>
                              </a>
                         </li>
                         <li>
                              <a href="#">
                                   <i class="fab fa-linkedin-in"></i>
                              </a>
                         </li>
                    </ul>
               </div>
          </div>
     </footer>
</body>
</html>