<?php
  include_once 'Header.php'
?>

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

<?php
  include_once 'Footer.php'
?>