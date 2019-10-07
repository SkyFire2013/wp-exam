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
     <link rel="stylesheet" href="css/styles.css">
     <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
     <script src="https://kit.fontawesome.com/8064e623c9.js" crossorigin="anonymous"></script>
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
                         <a href="#" class="btn main">
                              <i class="far fa-paper-plane"></i>
                              Book Now
                         </a>
                    </li>
               </ul>
          </div>
     </header>
     <div class="container">
          
     </div>
</body>
</html>