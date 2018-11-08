<?php include('../includes/header-admin.php');

$inventory = [
  ["quantity"=>"24","description"=>"Bag of rice","price"=>"235"],
  ["quantity"=>"34","description"=>"Crates of tomatoes","price"=>"525"],
  ["quantity"=>"21","description"=>"Loaves of bread","price"=>"236"],
  ["quantity"=>"24","description"=>"Bag of rice","price"=>"235"],
  ["quantity"=>"34","description"=>"Crates of tomatoes","price"=>"525"],
  ["quantity"=>"21","description"=>"Loaves of bread","price"=>"236"],
  ["quantity"=>"24","description"=>"Bag of rice","price"=>"235"],
  ["quantity"=>"34","description"=>"Crates of tomatoes","price"=>"525"],
  ["quantity"=>"21","description"=>"Loaves of bread","price"=>"236"],
  ["quantity"=>"24","description"=>"Bag of rice","price"=>"235"],
  ["quantity"=>"34","description"=>"Crates of tomatoes","price"=>"525"],
  ["quantity"=>"21","description"=>"Loaves of bread","price"=>"236"],
  ["quantity"=>"24","description"=>"Bag of rice","price"=>"235"],
  ["quantity"=>"34","description"=>"Crates of tomatoes","price"=>"525"],
  ["quantity"=>"21","description"=>"Loaves of bread","price"=>"236"],
  ["quantity"=>"24","description"=>"Bag of rice","price"=>"235"],
  ["quantity"=>"34","description"=>"Crates of tomatoes","price"=>"525"],
  ["quantity"=>"21","description"=>"Loaves of bread","price"=>"236"],
];

?>
<div class="inventory">


  <div class="row top-actions">
    <div class="col-lg-7 col-md-6 col-sm-4 col-7">
      <input type="checkbox" /> Select All
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 col-5">
      <button class="btn-danger col-lg-3 col-md-4 col-sm-4  col-12 pull-right">Delete</button>
    </div>
  </div>

  <div class="lg">
    <div class="header">
      <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1 col-1">
          &nbsp;
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-2">
          Quantity
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
          Description
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-2">
          Price
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 ">
          &nbsp;
        </div>
      </div>
    </div>
    <div class="body">
      <?php foreach ($inventory as $inv): ?>
        <div class="row">
          <div class="col-lg-1 col-md-1 col-sm-1 col-1">
            <input type="checkbox" />
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2">
            <?= $inv['quantity']; ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-4">
            <?= $inv['description']; ?> for
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2">
            GHC <?= $inv['price']; ?>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-12 hv">
            <a class="circ-success" href="#" title="Add usage">
              <i class="fas fa-plus-square fa-xs"></i>
            </a>
            <a class="circ-danger" href="#" title="Delete entry">
              <i class="fas fa-times fa-xs"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
      <form>
        <div class="row">
          <div class="col-lg-1 col-md-1 col-sm-1 col-1">
            &nbsp;
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2">
            <input type="name" name="name" placeholder="Quantity">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-2">
            <input type="name" name="name" placeholder="Item name">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-2 ">
            <input type="name" name="name" placeholder="Price">
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-12 ">
            <a class="circ-success" href="#" title="Delete entry">
              <i class="fas fa-plus fa-xs"></i>
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>


  <div class="xs">
    <div class="body">
      <?php foreach ($inventory as $inv): ?>
        <div class="row">
          <div class="col-1">
            <input type="checkbox" />
          </div>
          <div class="col-10 data">
            <div>
              <label>Quantity: </label> <?= $inv['quantity']; ?>
            </div>
            <div>
              <label>Description: </label> <?= $inv['description']; ?> for
            </div>
            <div>
              <label>Price: </label> GHC <?= $inv['price']; ?>
            </div>
            <div class="hv">
              <a class="circ-success" href="#" title="Add usage">
                <i class="fas fa-plus-square fa-xs"></i>
              </a>
              <a class="circ-danger" href="#" title="Delete entry">
                <i class="fas fa-times fa-xs"></i>
              </a>
            </div>
        </div>
    </div>
      <?php endforeach; ?>
      <form>
        <div>
          <div>
            <input type="name" name="name" placeholder="Quantity">
          </div>
          <div>
            <input type="name" name="name" placeholder="Item name">
          </div>
          <div >
            <input type="name" name="name" placeholder="Price">
          </div>
          <br/>
          <div class="text-center">
            <a class="btn-success">
              Add new Item
            </a>
          </div>
          <br/>
        </div>
      </form>
    </div>
  </div>

</div>

</div>
<?php include('../includes/footer-admin.php'); ?>
