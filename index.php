<!DOCTYPE html>
<html lang="en">
  <head>
    <!--
      Site created by Brian Design on youtube @ www.youtube.com/channel/UCsKsymTY_4BYR-wytLjex7A?view_as=subscriber
    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ice Pick Lodge</title>
    <link rel = "icon" href = "Images/Icon.png" type = "image/x-icon">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="slider.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
      integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <a href="index.php" id="navbar__logo"></i>Ice Pick Lodge</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="News.php" class="navbar__links">News</a>
          </li>
          <li class="navbar__item">
            <a href="Games.php" class="navbar__links">Games</a>
          </li>
          <li class="navbar__item">
            <a href="About us.php" class="navbar__links">About Us</a>
          </li>
          <li class="navbar__btn">
            <a href="Log In.php" class="button">Log In</a>
          </li>
          <li class="navbar__btn">
            <a href="Sign In.php" class="button">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Slider Section -->
    <div class="slider">
      <!-- fade css -->
      <div class="myslide fade">
        <div class="txt">
          <h1>Pathologic 2 is now available in Xbox Game Pass! </h1>
          <p>Try the game now if you have Xbox Game pass</p>
        </div>
        <img src="images/Game pass.jpg" style="width: 100%; height: 100%;">
      </div>
      
      <div class="myslide fade">
        <div class="txt">
          <h1>New Trailer of Know by heart out!</h1>
          <p>Check it out!</p>
        </div>
        <img src="images/Know by heart.jpg" style="width: 100%; height: 100%;">
      </div>
      
      <div class="myslide fade">
        <div class="txt">
          <h1>The Marble Nest is Here!</h1>
          <p>It's a two-hour spinoff story in the world of the Pathologic 2.</p>
        </div>
        <img src="images/the marbel nest.jpg" style="width: 100%; height: 100%;">
      </div>
      <!-- /fade css -->
      
      <!-- onclick js -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      <div class="dotsbox" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
      <!-- /onclick js -->
    </div>

    <!-- Services Section -->
    <div class="gallery-container">
      <h1 class="gallery-all-title"> Check out our games! </h1>
      <div class="gallery-all">
        <div class="gallery">
          <img class="img-gallery" src="images/S - Pathologic 2.png" alt="">
        </div>
        <div class="gallery">
          <img class="img-gallery" src="Images/S - Know by Heart.png" alt="">
        </div>
        <div class="gallery">
          <img class="img-gallery" src="Images/S - Cargo.png" alt="">
        </div>
        <div class="gallery">
          <img class="img-gallery" src="Images/S - Knock Knock.png" alt="">
        </div>
        <div class="gallery">
          <img class="img-gallery" src="Images/S - Pathologic.png" alt="">
        </div>
        <div class="gallery">
          <img class="img-gallery" src="Images/S - The Void.png" alt="">
        </div>
      </div>
    </div>

    <!-- Footer Section -->
    <div class="footer__container">
      <section class="social__media">
        <div class="social__media--wrap">
          <div class="footer__logo">
            <a id="footer__logo">Ice-Pick Lodge</a>
          </div>
          <p class="website__rights">© Ice-Pick Lodge 2020. All rights reserved</p>
          <div class="social__icons">
            <a
              class="social__icon--link"
              href="https://www.facebook.com/icepicklodge"
              target="_blank"
              aria-label="Facebook"
            >
              <i class="fab fa-facebook"></i>
            </a>
            <a
              class="social__icon--link"
              href="https://www.instagram.com/icepicklodge/"
              target="_blank"
              aria-label="Instagram"
            >
              <i class="fab fa-instagram"></i>
            </a>
            <a
              class="social__icon--link"
              href="https://www.youtube.com/icepicklodge"
              target="_blank"
              aria-label="Youtube"
            >
              <i class="fab fa-youtube"></i>
            </a>
            <a
              class="social__icon--link"
              href="https://twitter.com/IcePickLodge"
              target="_blank"
              aria-label="Twitter"
            >
              <i class="fab fa-twitter"></i>
            </a>
            <a
              class="social__icon--link"
              href="https://steamcommunity.com/groups/icepicklodge"
              target="_blank"
              aria-label="Steam"
            >
              <i class="fab fa-steam"></i>
            </a>
          </div>
        </div>
      </section>
    </div>
    <script src="app.js"></script>
    <script src="jsfile.js"></script>
  </body>
</html>
