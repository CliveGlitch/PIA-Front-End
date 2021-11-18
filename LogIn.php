<?php
  include_once 'Header.php'
?>
<section class="log_in_form">
  <form class="form" action="includes/login.inc.php" method="post">
      
      <h1 class="form_title">Log In</h1>
      <div class="form_container">
          
          <div class="input_form_container">
          <input type="text" name="name" placeholder="Username or Email"> 
          </div>
          
          <div class="input_form_container">
          <input type="password" name="pwd" placeholder="Password">
          </div>

          <input type="submit" value="Log In" class="form_button">
          <p class="form_text">Don't have an account? <a class="link" href="SignUp.php">Sign up </a></p>
      </div>
  </form>
</section>
<?php
  include_once 'Footer.php'
?>
