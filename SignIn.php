<?php
  include_once 'Header.php'
?>
<div class="sign_in_form">
  <form class="form">
      
      <h1 class="input_form_container">Sign In</h1>
      <div class="form_container">

        <div class="input-contenedor">
        <input type="text" placeholder="Nombre Completo">
        </div>
          
        <div class="input_form_container">
        <input type="text" placeholder="Correo Electronico"> 
        </div>
          
        <div class="input_form_container">
        <input type="password" placeholder="Password">
          
        </div>
        <input type="submit" value="Login" class="form_button">
        <p class="form_text">Already have and account? <a class="link" href="Log In.php">Log In </a></p>
      </div>
  </form>
</div>

<?php
  include_once 'Footer.php'
?>
