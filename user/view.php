<?php
  $title = "Your Profile";
?>
<?php include('../includes/header.php');?>


<div class="profile-view">
  <form action = "view_edit.php">
    <div id="Translation" class="row cont">
      <div class="col-lg-5 col-12">
        <div class="icon">
          <i class="fas fa-user-circle fa-8x"></i>
        </div>
        <h3 class="text-center">Daniel Kayode</h3>
        <div class="row lg">
          <div class="col-2"></div>
          <a class="btn-warning col-3" href="http://localhost/grubbie/user/view_edit.php"> Edit </a>
          <div class="col-1"></div>
          <a class="btn-danger col-3"  href="http://localhost/grubbie"> Logout </a>
        </div>
      </div>
      <div class="col-lg-7 col-12">
        <div class="data">
          <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-5 col-5">First name:</div>
              <div class="col-7">Daniel</div>
          </div>
          <div class="row">
              <div class="col-5">Last name:</div>
              <div class="col-7">Kayode</div>
          </div>
          <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-5 col-5">Email:</div>
              <div class="col-lg-7 col-md-7 col-sm-7 col-12">daniel.kayode@meltwater.org</div>
          </div>
          <div class="row">
              <div class="col-5">Country:</div>
              <div class="col-7">Nigeria</div>
          </div>
          <div class="row">
              <div class="col-5">Allergies:</div>
              <div class="col-7">Peanut ; Avocado ; Pepper</div>
          </div>
          <div class="row">
              <div class="col-5">Prefference:</div>
              <div class="col-7">Vegeterian</div>
          </div>
          <div class="row">
              <div class="col-5">Category:</div>
              <div class="col-7">EIT</div>
          </div>
          <div class="row">
              <div class="col-5">Password:</div>
              <div class="col-7">.............</div>
          </div>
        </div>
        <div class="clearfix"><br/></div>
        <div class="row xs text-center">
          <div class="col-2"></div>
          <a class="btn-warning col-4" href="http://localhost/grubbie/user/view_edit.php"> Edit </a>
          <a class="btn-danger col-4"  href="http://localhost/grubbie"> Logout </a>
        </div>
      </div>
      <div class="clearfix"><br/></div>
      <div class="clearfix"><br/></div>
      </div>
    </div>
  </form>
  <?php include('../includes/footer.php'); ?>
