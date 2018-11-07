<?php include("../includes/header-no-nav.php"); ?>
<div id="grubbie-gradient"></div>

<img src="http://localhost/grubbie/assets/images/profile_icon.png" alt = "logo" >

<form action="http://localhost/grubbie/user/manage.php" method = "post">
    <input type = "text" name = "Email" placeholder = "Email"/><p>
    <input type = "password" name = "Password" placeholder = "Password"/><p>
    <p align = "right"> <a href = "forgotpassword.php"> Forgot Password</a> </p>
    <input type = "submit" name = "Sign Up" value = "Sign In"><p>
</form>

<p align = "center"> Don't have an account? <a href = "signup.php">Sign Up</a> </p>

<?php include("../includes/footer-no-nav.php"); ?>
