<?php include('../includes/header-admin.php');

$data = [
  ["Name"=>"Solomon Igori","Status"=>"Active","Country"=>"Nigeria"],
  ["Name"=>"Amanda Williams","Status"=>"Suspended","Country"=>"Nigeria"],
  ["Name"=>"Daniel Kayode","Status"=>"Active","Country"=>"Nigeria"],
  ["Name"=>"Esther Mwangi","Status"=>"Active","Country"=>"Kenya"],
  ["Name"=>"Kelvin Macharia","Status"=>"Active","Country"=>"Kenya"],
];

?>

<div class = "row gmail-container">
  <div class = "col-lg-2 col-md-2 col-sm-3 col-12 left-menu">
    <ul class="lg">
      <a href="#" class="active"><li>EIT</li></a>
      <a href="#"><li>Fellow</li></a>
      <a href="#"><li>MINC</li></a>
      <a href="#"><li>Kitchen Staff</li></a>
      <a href="#"><li>Admin</li></a>
      <a href="#" class="btn"><li>Create User</li></a>
    </ul>
    <div class="xs">
      <div>
        <button href="#" class="btn-success col-5 pull-right">
          <i class="far fa-user fa-sm"></i>
          &nbsp;
          Add User
        </button>
      </div>
      <div class="clearfix"><br/></div>
      <div class="clearfix"><br/></div>
      <div class="dark row">
        <div class='col-6 description'>
          Select User Type:
        </div>
        <select class="col-6">
          <option>EIT</option>
          <option>Fellow</option>
          <option>MINC</option>
          <option>Kitchen Staff</option>
          <option>Admin</option>
        </select>
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
        <div class="row">
          <button class="btn-success col-lg-3 col-md-3 col-sm-3 col-3">Activate</button>
          <button class="btn-warning col-lg-3 col-md-3 col-sm-3  col-3">Suspend</button>
          <button class="btn-danger col-lg-3 col-md-4 col-sm-4  col-4">Deactivate</button>
        </div>
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
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              Name
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-3">
              Status
            </div>
          </div>
        </div>
        <div class="body">
          <?php foreach($data as $row): ?>
            <div class="row lg">
              <div class="col-lg-1 col-md-1 col-sm-1 col-1">
                <input type="checkbox" />
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                <?= $row["Name"]; ?>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <?= $row['Status']; ?>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-2 hv">
                Country :  <?= $row["Country"]; ?>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-12 hv">
                <?php if($row["Status"] == "Active"): ?>
                  <a class="circ-warning" href="#">
                    <i class="fas fa-pause fa-xs"></i>
                  </a>
                <?php else: ?>
                  <a class="circ-success" href="#">
                    <i class="fas fa-play fa-xs"></i>
                  </a>
                <?php endif; ?>
                <a class="circ-danger" href="#">
                  <i class="fas fa-times fa-xs"></i>
                </a>
              </div>
            </div>
            <div class="row xs">
              <div class="col-1">
                <input type="checkbox" />
              </div>
              <div class = "col-9">
                <div class="data">
                  <div>
                    <label>Name:</label> <?= $row["Name"]; ?>
                  </div>
                  <div>
                    <label>Status:</label> <?= $row['Status']; ?>
                  </div>
                  <div>
                    <label>Country:</label>  <?= $row["Country"]; ?>
                  </div>
                  <div class="clearfix"></div>
                  <div class="actions">
                    <?php if($row["Status"] == "Active"): ?>
                      <a class="circ-warning" href="#">
                        <i class="fas fa-pause fa-xs"></i>
                      </a>
                    <?php else: ?>
                      <a class="circ-success" href="#">
                        <i class="fas fa-play fa-xs"></i>
                      </a>
                    <?php endif; ?>
                    <a class="circ-danger" href="#">
                      <i class="fas fa-times fa-xs"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</div>
<?php include('../includes/footer-admin.php'); ?>
