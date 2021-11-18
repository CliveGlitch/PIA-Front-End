<?php
  include_once 'Header.php'
?>
<section class="sign_in_form">
  <form class="form" action="signup.inc.php" method="post">
      
      <h1 class="form_title">Sign Up</h1>
      <div class="form_container">

        <div class="input_form_container">
        <input type="text" name="name" placeholder="Full Name">
        </div>
          
        <div class="input_form_container">
        <input type="text" name="email" placeholder="Email"> 
        </div>

        <div class="input_form_container">
        <input type="text" name="uid" placeholder="Username"> 
        </div>
          
        <div class="input_form_container">
        <input type="password" name="pwd" placeholder="Password">
        </div>

        <div class="input_form_container">
        <input type="password" name="pwdrepeat" placeholder="Repear Password">
        </div>

        <input type="submit" name="submit" value="Login" class="form_button">
        <p class="form_text">Already have and account? <a class="link" href="LogIn.php">Log In </a></p>
      </div>
  </form>
</section>


<?php
  include_once 'Footer.php'
?>
