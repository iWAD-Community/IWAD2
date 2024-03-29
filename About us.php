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
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="./assets/css/iwad store ani.css">
        <title>About page</title>
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
    <body >

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
                        <li class="nav__item"><a href="About us.php" class="nav__link active-link">About Us</a></li>
                        <li class="nav__item"><a href="iwad Store.php" class="nav__link">iWAD Store</a></li>
                        <li class="nav__item"><a href="Contacts.php" class="nav__link">Contact Us</a></li>
   
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
            <h2 class="section-title-center">The iWAD Custom Software Development Team</h2>
            <p class="share__description"><H4>Team work is our number one  priority</H4>

              iWAD (iNTERNET-WEB-APPLICATION and DEVELOPMENT),will Change how you view the world through 
              fusing ancient wisdom and modern technologies for a creative texture to life and  Empowering
               you with Knowledge to expand beyond your Imagination.We’re an international team of software
                designers, developers headquartered in Zimbabwe, Harare, specializing in custom web and mobile development.</p>
          
        </div>

        <div class="share__img">
            <img src="assets/img/send.png" alt="">
        </div>
    </div>
</section>
                  

              <!-- welcome section -->
              <div class = "head-body container">
                <div class = "head-body-content">
                <h2 class="section-title-center">iWAD’s development team</h2>
                 <p>
                provides development, implementation, and customization services for
                 such platforms as Microsoft .NET,Phython , Java, PHP, iOS, Android, 
                 and Windows Mobile at optimal quality. Our development team has years
                  of experience in those fields and has successfully overcome dozens of such challenges.
                  </p>
                 
                </div>
          
                <div class = "head-body-img">
                  <img src = "./assets/img/shared.PNG" alt = "header image">
                </div>
                  
  
              </div>
      

    <!--========== SEND Email==========-->
    <section class="send section">
        <div class="send__container bd-container bd-grid">
            <div class="send__content">
                <h2 class="section-title-center send__title">Send Email Now</h2>
                <p class="send__description">Contact us today and Join the vast growing online Community of iWAD.net! We welcome your feedback on changes we make to iWAD.net and your products so please send us an email with any comments you may have.</p>
                <form action="">
                    <div class="send__direction">
                        <input type="text" placeholder="Email address" class="send__input">
                        <a href="mailto:iwad.services21@gmail.com" class="button">Send</a>
                    </div>
                </form>
            </div>

            <div class="send__img">
                <img src="assets/img/pngegg (5).png" alt="">
            </div>
        </div>
    </section>
</main>

<!--========== SEND Email ==========-->

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
                      <li><a href="Computer Services.php" class="footer__link">Hardware Repares </a></li>
                      <li><a href="iwad Store.php" class="footer__link">Computer Sales</a></li>
                      <li><a href="Computer Services.php" class="footer__link">Desktop Support</a></li>
                  </ul>
              </div>

              <div class="footer__content">
                  <h3 class="footer__title">S E O</h3>
                  <ul>
                      <li><a href="Search Opt.php" class="footer__link">Google Ads</a></li>
                      <li><a href="Search Opt.php" class="footer__link">Google ranking</a></li>
                      <li><a href="Search Opt.php" class="footer__link">Youtube Ads</a></li>
                      <li><a href="Search Opt.php" class="footer__link">Facebook Ads</a></li>
                  </ul>
              </div>

              <div class="footer__content">
                  <h3 class="footer__title">Social</h3>
                  <a href="#" class="footer__social"><i class='bx bxl-facebook-circle '></i></a>
                  <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                  <a href="#" class="footer__social"><i class='bx bxl-instagram-alt'></i></a>
                  <ul>
                    <li><img class="contact_icon"; src="assets/img/placeholder.png" alt="icon"><a href="https://maps.app.goo.gl/DKGBg4174ws2CJ4a8" class="footer__link">No3 Radom Court 6th Street Harare</a></li>
                    <li><img class="contact_icon"; src="assets/img/gmail.png" alt="icon"><a href="mailto:info@iwad.co.zw" class="footer__link"> info@iwad.co.zw</a></li>
                    <li><img class="contact_icon"; src="assets/img/telephone.png" alt="icon"><a href="tel:+263775051445" class="footer__link"> +263 719 051 445</a></li>
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
