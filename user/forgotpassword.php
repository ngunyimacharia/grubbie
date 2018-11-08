<?php include("../includes/header-no-nav.php"); ?>
<div id="grubbie-gradient"></div>

<div class="paper">
  <div class = "logo-white" >
    <a href = "http://localhost/grubbie"><img src="http://localhost/grubbie/assets/images/logo.png" alt = "logo" /></a>
  </div>
  <form action="http://localhost/grubbie/user/login.php" method="POST">
  <p>
    We need your email address so we can send you a reset link.
  </p>
  <br/>
    <input type = "text" name = "Email" placeholder = "Email"/><p>
      <input type = "submit" name = "Send me a Reset Link"><p>
      </form>

      <p align = "center"> <a href = "signup.php"> Don't have an account? Sign Up</a> </p>
    </div>
  </div>
  <?php include("../includes/footer-no-nav.php"); ?>
