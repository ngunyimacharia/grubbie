<?php include('../includes/header.php'); ?>

<div class="profile-view">
  <form action = "view_edit.php">
    <div id="Translation" class="row cont">
      <div class="col-lg-5 col-12">
        <div class="icon">
          <i class="fas fa-user-circle fa-8x"></i>
        </div>
        <h3 class="text-center">Daniel Kayode</h3>
      </div>
      <div class="col-lg-7 col-12">
        <div class="data-form">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-12 label">First name:</div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-12">
              <input type="text" value="Daniel" />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-12 label">Last name:</div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-12">
              <input type="text" value="Kayode" />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-5 label">Email:</div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-12">
              <input type="email" value="daniel.kayode@meltwater.org" />
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-12 label">Country:</div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-12">
              <select>
                <option selected>Nigeria</option>
                <option>Kenya</option>
                <option>Gambia</option>
                <option>Ghana</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-12 label">Allergies:</div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-12">
              <input type="text" value ="Peanut" >
              <input type="text" value ="Avocado" >
              <input type="text" value ="Pepper" >
              <div class="clearfix"><br/></div>
              <div class="text-right">
                <i class="fas fa-plus-circle"></i>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-12 label">Prefference:</div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-12"><input type="text" value="Vegeterian" /></div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-12 label">Category:</div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-12">
              <select>
                <option selected>EIT</option>
                <option selected>MINC</option>
                <option selected>Fellows</option>
                <option selected>Kitcehn Staff</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-12 label">Password:</div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-12"><input type="password" placeholder="Chage password" /></div>
          </div>
        </div>
        <div class="clearfix"><br/></div>
        <div class="row text-center">
          <div class="col-4"></div>
          <a class="btn-success col-3" href="http://localhost/grubbie/user/view.php"> Save </a>
        </div>
      </div>
      <div class="clearfix"><br/></div>
      <div class="clearfix"><br/></div>
    </div>
  </div>
</form>
<?php include('../includes/footer.php'); ?>
