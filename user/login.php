<?php include("../includes/header-no-nav.php"); ?>
<div id="grubbie-gradient"></div>

<div class="paper">
    <div class = "logo-white" >
        <img src="http://localhost/grubbie/assets/images/logo.png" alt = "logo">
    </div>

    <form action="http://localhost/grubbie/user/manage.php" method = "post">
        <input type = "text" name = "Email" placeholder = "Email"/><p>
        <input type = "password" name = "Password" placeholder = "Password"/><p>
        <p> <a href = "forgotpassword.php"> Forgot Password</a> </p>
        <input type = "submit" name = "Sign Up" value = "Sign In"><p>
    </form>

    <p style = 'padding-left: 50px;'> Don't have an account? <a href = "signup.php">Sign Up</a> </p>
</div>

<?php include("../includes/footer-no-nav.php"); ?>
