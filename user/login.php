<?php include("../includes/header-no-nav.php"); ?>
<div id="grubbie-gradient"></div>

<div class="paper">
    <div class = "logo-white" >
        <a href = "http://localhost/grubbie"><img src="http://localhost/grubbie/assets/images/logo.png" alt = "logo" /></a>
    </div>

    <form action="http://localhost/grubbie/user/manage.php" method = "post">
        <input type = "text" name = "Email" placeholder = "Email"/><p>
        <input type = "password" name = "Password" placeholder = "Password"/><p>
        <p style='text-align: right'> <a href = "forgotpassword.php"> Forgot Password</a> </p>
        <input type = "submit" name = "Sign Up" value = "Sign In"><p>
    </form>

    <p style = 'text-align: center'><a href = "signup.php"> Don't have an account? Sign Up</a> </p>
</div>

<?php include("../includes/footer-no-nav.php"); ?>
