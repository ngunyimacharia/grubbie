<?php include('../includes/header-admin.php'); ?>

<div class = "row gmail-container inventory">
  <div class = "col-lg-2 col-md-2 col-sm-3 col-12 left-menu">
    
    <ul class="lg">
      <div class='money'><a href="#" class="active"><li>$1500</li></a></div>
      <li></li>
      <a href="#"><li></li></a>
      <a href="#"><li></li></a>
      <a href="#"><li></li></a>
      <a href="#" class="btn"><li>STATS</li></a>
    </ul>
    <div class="xs">
      <div class="row">
        
        <button class="btn col-lg-3 col-md-4 col-sm-4  col-12 stats">STATS</button>
        <!-- <i class="fas fa-plus"></i> -->
        <!-- <select class="col-9">
          <option>STATS</option>
          <option></option>
          <option></option>
          <option></option>
          <option></option>
        </select> -->
        <!-- <a href="#" class="btn-success col-2">
          <i class="fas fa-plus fa-xs"></i>
          <i class="far fa-user fa-sm"></i>
        </a> -->
      </div>
      <div class="clearfix"><br/></div>
    </div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-9 col-12 right-main">
    <div class="row top-actions">
      <div class="col-lg-7 col-md-6 col-sm-4 col-12 select">
        <input type="checkbox" /> Select All
      </div>
      <div class="col-lg-5 col-md-6 col-sm-8 col-12">
        <!-- <button class="btn-success col-lg-3 col-md-3 col-sm-3 col-12">Activate</button>
        <button class="btn-warning col-lg-3 col-md-3 col-sm-3  col-12">Suspend</button> -->
        <button class="btn-danger col-lg-3 col-md-4 col-sm-4  col-12">Delete</button>
      </div>
    </div>
    <div class="clearfix"><br/></div>
    <div class="clearfix"><br/></div>
    <div class="main-section">
      <div class="cont">
        <div class="headers">
          <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
              &nbsp;
            </div>
            <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              Name
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              Status
            </div> -->
          </div>
        </div>
        <div class="body">
          <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
              <input type="checkbox" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              1
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
              Bag of rice for
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
              $200
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-12 ">
              <!-- <a class="circ-warning" href="#">
                <i class="fas fa-pause fa-xs"></i>
              </a> -->
              <a class="circ-danger" href="#">
                <i class="fas fa-times fa-xs"></i>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
              <input type="checkbox" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              30
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
              Crates of tomatoes for
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
              $2000
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-12 ">
              <!-- <a class="circ-warning" href="#">
                <i class="fas fa-pause fa-xs"></i>
              </a> -->
              <a class="circ-danger" href="#">
                <i class="fas fa-times fa-xs"></i>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
              <input type="checkbox" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              100
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
              Loaves of bread for
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
              $300
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-12 ">
              <!-- <a class="circ-warning" href="#">
                <i class="fas fa-pause fa-xs"></i>
              </a> -->
              <a class="circ-danger" href="#">
                <i class="fas fa-times fa-xs"></i>
              </a>
            </div>
          </div>
          <!-- <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
              <input type="checkbox" />
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              Kelvin Macharia
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
              Active
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2 hv">
              Country :  Kenya
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-12 hv">
              <a class="circ-warning" href="#">
                <i class="fas fa-pause fa-xs"></i>
              </a>
              <a class="circ-danger" href="#">
                <i class="fas fa-times fa-xs"></i>
              </a>
            </div>
          </div> -->
          <form>
            <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
              <!-- <input type="checkbox" /> -->
            </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                <input type="name" name="name" placeholder="Quantity">
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <input type="name" name="name" placeholder="Item name">
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
                <input type="name" name="name" placeholder="Price">
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-12 ">
                <!-- <a class="circ-warning" href="#">
                  <i class="fas fa-pause fa-xs"></i>
                </a> -->
                <a  href="#">
                  <span class="fa-stack " style="vertical-align: top;">
                    <!-- <i class="far fa-circle fa-stack-2x plus"></i> -->
                    <i class="fas fa-plus fa-stack-1x plus"></i>
                  </span>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
<?php include('../includes/footer-admin.php'); ?>
