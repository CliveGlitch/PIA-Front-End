<?php
  include_once 'Header.php'
?>
<form class="form">
    
    <h1 class="form_title">Log In</h1>
     <div class="form_container">
         
         <div class="input_form_container">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico">
         
         </div>
         
         <div class="input_form_container">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Password">
         
         </div>
         <input type="submit" value="Login" class="form_button">
         <p class="form_text">Do you agree to the inexistent terms and conditions?</p>
         <p class="form_text">Don't have an account? <a class="link" href="registrarvista.html">Sign in </a></p>
     </div>
</form>
<?php
  include_once 'Footer.php'
?>
