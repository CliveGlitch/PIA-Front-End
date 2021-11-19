<?php
  include_once 'Header.php'
?>
<section class="sign_in_form">
  <form class="form" action="includes/signup.inc.php" method="post">
      
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

        <input type="submit" name="submit" value="Sign Up" class="form_button">
        <p class="form_text">Already have and account? <a class="link" href="LogIn.php">Log In </a></p>
      </div>
  </form>
  <?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<p class='form_text'>You must fill all fields.</p>"
    } else if($_GET["error"] = "invaliduid"){
      echo "<p class='form_text'>Choose a proper username.</p>"
    } else if($_GET["error"] = "invalidemail") {
      echo "<p class='form_text'>Choose a proper email.</p>"
    } else if($_GET["error"] = "pwdnotmatch") {
      echo "<p class='form_text'>Passwords don't match.</p>"
    } else if($_GET["error"] = "stmtfailed") {
      echo "<p class='form_text'>Something went wrong, try again.</p>"
    } else if($_GET["error"] = "usernametaken") {
      echo "<p class='form_text'>Username already in use.</p>"
    } else if($_GET["error"] = "none") {
      echo "<p class='form_text'>You have signed up</p>"
    }
  }
?>
</section>

<?php
  include_once 'Footer.php'
?>
