<?php include("../includes/header-no-nav.php"); ?>
<div id="grubbie-gradient"></div>

<div class="paper">
    <div class = "logo-white" >
        <a href = "http://localhost/grubbie"><img src="http://localhost/grubbie/assets/images/logo.png" alt = "logo" /></a>
    </div>

    <form action = "http://localhost/grubbie/menu/view.php" method="POST">
        <p><input type = "text" name = "firstname" placeholder = "First Name"/></p>
        <p><input type = "text" name = "lastname" placeholder = "Last Name"/></p>
        <p><input type = "text" name = "Email" placeholder = "Email"/></p>
        <p><select name = "type">
            <option value = "EIT"> EIT</option>
            <option value = "MINC"> MINC</option>
            <option value = "Fellow"> Teaching Fellow </option>
            <option value = "Staff"> Incubator Fellow </option>
          </select></p>
        <p><input type = "password" name = "Password" placeholder = "Password"/></p>
        <br/>
        <p><input type = "submit" name = "Sign Up" value = "Create Account"></p>
    </form>
    <p style = 'text-align: center'> <a href = "login.php">Have an account? Sign in</a> </p>
</div>


<?php include("../includes/footer-no-nav.php"); ?>
