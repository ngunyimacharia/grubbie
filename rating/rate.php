<?php include('../includes/header.php'); ?>

<div class="create-menu">
  <div class="clearfix"><br/></div>
  <div class="row">
    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
      <br/>
      <div class="row">
        <div class = "col-lg-7 col-md-7 col-sm-7 col-5">
          <h2>Rating</h2>
        </div>
        <div class = "col-lg-4 col-md-4 col-sm-4 col-7">
          <br/>
          <select class="date-select">
            <option>Nov 12, 2018 - Nov 16, 2018</option>
            <option>Nov 19, 2018 - Nov 23, 2018</option>
          </select>
        </div>
      </div>
      <hr/>
      <?php include ('../includes/ui/days.php'); ?>

      <!-- input checkbox, checkbox with dropdown -->
      <div class="rounded-container">
        <div class="rate-wrapper">
            <div class="rounded-image"></div>
            <div class="rate-text">
                Tea and Bread <br/>
                <?php include('../includes/ui/stars.php'); ?>
                <input type="text" name="" id="" value="Wonderful meal!" disabled>
            </div>
        </div>
    </div>
    <div class="rounded-container">
        <div class="rate-wrapper">
            <div class="rounded-image"></div>
            <div class="rate-text">
                Jollof Rice <br/>
                <?php include('../includes/ui/stars.php'); ?>
                <input type="text" name="" id="" value="Jollof was on point!" disabled>
            </div>
        </div>
    </div>
    <div class="rounded-container">
        <div class="rate-wrapper">
            <div class="rounded-image"></div>
            <div class="rate-text">
                Rice and Stew <br/>
                <?php include('../includes/ui/stars.php'); ?>
                <input type="text" name="" id="" value="Loved the stew!!" disabled>
            </div>
        </div>
    </div>
    <div class="row">
          <div class="col">
            <br/>
            <div class="submit text-center">
              <!-- <button disabled></button> -->
              Feedback sent!
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

</div>


<?php include('../includes/footer.php'); ?>
