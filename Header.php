<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ice Pick Lodge</title>
    <link rel = "icon" href = "images/Icon.png" type = "image/x-icon">
    <link rel="stylesheet" href="assets/styles.css" />
    <link rel="stylesheet" href="assets/slider.css" />
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
            <a href="AboutUs.php" class="navbar__links">About Us</a>
          </li>
          <?php
            if(isset($_SESSION["useruid"])){
              echo "<li class='navbar__btn'>
                      <a href='Dashboard.php' class='button'>Dashboard</a>
                    </li>";
              echo "<li class='navbar__btn'>
                      <a href='includes/LogOut.inc.php' class='button'>Log Out</a>
                    </li>";
            } else {
              echo "<li class='navbar__btn'>
                      <a href='LogIn.php' class='button'>Log In</a>
                    </li>";
              echo "<li class='navbar__btn'>
                      <a href='SignUp.php' class='button'>Sign Up</a>
                    </li>";
            }
          ?>
        </ul>
      </div>
    </nav>