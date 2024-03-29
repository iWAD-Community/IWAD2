<?php
  session_start();

 ?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Website icon -->
        <link rel="shortcut icon" type="image/png" href="assets/img/iwad logo icon 1.png">
        <!-- Website icon -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

           <!-- Custom CSS -->
   <link rel = "stylesheet" href="assets/css/main.css">
   <!-- Google fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Varela+Round&display=swap" rel="stylesheet">
   <!-- Font awesome -->
   <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
   <!-- Owl carousel -->
   <link rel = "stylesheet" href = "OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
   <link rel = "stylesheet" href = "OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-220504577-1">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-220504577-1');
    </script>
    </head>
    <body>
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
       
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="index.php" class="nav__logo"><img src="assets/img/home.png"></a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        
                        <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
                        <li class="nav__item"><a href="Services.php" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="About us.php" class="nav__link">About Us</a></li>
                        <li class="nav__item"><a href="iwad Store.php" class="nav__link">iWAD Store</a></li>
                        <li class="nav__item"><a href="Contacts.php" class="nav__link active-link">Contact Us</a></li>
   
                        <li class="nav__item"><a href="signup.php" class="nav__links">Sign Up</a></li>
                    
                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>

                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>
  <!--========== SHARE ==========-->
  <section class="share section bd-container" id="share">
    <div class="share__container bd-grid">
        <div class="share__data">
            <h2 class="section-title-center"> Contact Us | What Ever it Maybe we are here | </h2>
            <p class="share__description"><H4>Submit a Request</H4> Send a request directly to us! Typical response time: within 1 business day <H4>|Schedule a meeting</H4>Set up a meeting with us:

              Earliest time & date <h4>Live chat </h4>  Live chat is not available in your region yet.

              You can contact us via email or by calling one of the numbers below.</p>
          
        </div>

        <div class="share__img">
            <img src="assets/img/send.png" alt="">
        </div>
    </div>
</section>

   <!-- contact section -->
   <section class = "contact py-4" id = "contact">
    <div class = "container">
      <div class = "title">
        <h2 class = "title-text">get in touch</h2>
        <div class = "title-underline"></div>
      </div>

      <div class = "contact-wrapper">
        <!-- contact info -->
        <div class = "contact-info">
          <!-- single item -->
          <div class = "single-contact">
            <span>
              <i class = "fas fa-phone"></i>
            </span>
            <h2 class = "text-large">Phone</h2>
            <p class = "text-light">+263719 051 445</p>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class = "single-contact">
            <span>
              <i class = "fas fa-envelope"></i>
            </span>
            <h2 class = "text-large">Email</h2>
            <p class = "text-light">info@iwad.net</p>
          </div>
          <!-- end of single item -->
          <!-- single item -->
          <div class = "single-contact">
            <span>
              <i class = "fas fa-map-marker-alt"></i>
            </span>
            <h2 class = "text-large">Location</h2>
            <p class = "text-light">Belvedere Harare</p>
          </div>
          <!-- end of single item -->
        </div>

        <form class = "form">
          <div class = "form-group">
            <input type = "text" class = "form-control" placeholder="Name">
            <input type = "text" class = "form-control" placeholder="Email">
          </div>
          <input type = "text" class = "form-control" placeholder="Subject">
          <textarea rows = "4" placeholder="Message"></textarea>
          <button type = "button" class = "btn-form">Send Message</button>
        </form>
      </div>
    </div>
  </section>
  <!-- end of contact section -->

        <!--========== FOOTER ==========-->
        <footer class="footer section">
          <div class="footer__container bd-container bd-grid">
              <div class="footer__content">
                  <h3 class="footer__title">
                    <a href="#" class="footer__logo">Web Development </a>
                  </h3>
                  <p class="footer__description">
                    
                    Ecommerce Sites <br>

                    Blog Sites<br>
                    
                    Directrory<br>
                    
                    Contact Pages<br>
                    
                    Magazine Websites<br>
                    
                    Social Media sites.
                    
                  </p>
              </div>

              <div class="footer__content">
                  <h3 class="footer__title">Computer Services</h3>
                  <ul>
                      <li><a href="Services.php" class="footer__link">Hardware Repares </a></li>
                      <li><a href="Services.php" class="footer__link">Computer Sales</a></li>
                      <li><a href="Services.php" class="footer__link">Desktop Support</a></li>
                  </ul>
              </div>

              <div class="footer__content">
                  <h3 class="footer__title">S E O</h3>
                  <ul>
                      <li><a href="Services.php" class="footer__link">Google Ads</a></li>
                      <li><a href="Services.php" class="footer__link">Google ranking</a></li>
                      <li><a href="Services.php" class="footer__link">Youtube Ads</a></li>
                      <li><a href="Services.php" class="footer__link">Facebook Ads</a></li>
                  </ul>
              </div>

              <div class="footer__content">
                  <h3 class="footer__title">Social</h3>
                  <a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                  <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                  <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                  <ul>
                    <li><img class="contact_icon"; src="assets/img/placeholder.png" alt="icon"><a href="https://maps.app.goo.gl/DKGBg4174ws2CJ4a8" class="footer__link">No3 Radom Court 6th Street Harare</a></li>
                    <li><img class="contact_icon"; src="assets/img/gmail.png" alt="icon"><a href="mailto:info@iwad.co.zw" class="footer__link">info@iwad.co.zw</a></li>
                    <li><img class="contact_icon"; src="assets/img/telephone.png" alt="icon"><a href="tel:+263775051445" class="footer__link">. +263 719 051 445</a></li>
                  </ul>
              </div>
          </div>

          <p class="footer__copy"> <?php
                // Prints the day, date, month, year, time, AM or PM
                echo date("Y");
          ?> Iwad.Net All right reserved</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="assets/js/main.js"></script>
    </body>
</html>