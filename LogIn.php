<?php
  include_once 'Header.php'
?>
<div class="log_in_form">
  <form class="form">
      
      <h1 class="form_title">Log In</h1>
      <div class="form_container">
          
          <div class="input_form_container">
          <input type="text" placeholder="Email">
          
          </div>
          
          <div class="input_form_container">
          <input type="password" placeholder="Password">
          
          </div>
          <input type="submit" value="Login" class="form_button">
          <p class="form_text">Don't have an account? <a class="link" href="SignIn.php">Sign up </a></p>
      </div>
  </form>
</div>
<?php
  include_once 'Footer.php'
?>
