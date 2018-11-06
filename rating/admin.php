<?php include('../includes/header-admin.php'); ?>

<div class = "row gmail-container">
  <div class = "col-lg-2 col-md-2 col-sm-3 col-12 left-menu">
    <ul class="lg">
      <li>
        <div class="btn-grp">
          <button class="left active">Rating</button>
          <button class="right">Popularity</button>
        </div>
      </li>
      <li>
        <div class="clearfix"><br/><br/><br/></div>
        <div class="row text-right">
          <div class="col-lg-12">
            <label>Filter:</label>
            <br/>
            <select>
              <option>Highest to Lowest</option>
              <option>Lowest to Highest</option>
            </select>
          </div>
        </div>
      </li>
      <a href="#" class="active"><li>
        Jollof rice + Grilled meat
        <br/>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <br/>
        167 Reviews
      </li></a>
      <a href="#"><li>
        Banku + Tilapia Fish Stew
        <br/>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="far fa-star"></i>
        <br/>
        67 Reviews
      </li></a>
      <a href="#"><li>
        Tea and Bread
        <br/>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="far fa-star"></i>
        <br/>
        67 Reviews
      </li></a>
      <a href="#"><li> </li></a>
    </ul>
    <div class="xs">
      <div class="btn-grp">
        <button class="left active">Rating</button>
        <button class="right">Popularity</button>
      </div>
      <div class="clearfix"><br/></div>
      <div class="row text-right">
        <div class="col-lg-12">
          <label>Filter:</label>
          <select>
            <option>Highest to Lowest</option>
            <option>Lowest to Highest</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-10 col-md-10 col-sm-9 col-12 right-main">
    <div class="row top-options">
      <div class="col-lg-3 col-md-3 col-sm-3 col-12">
        <button class="btn-circ">Daily</button>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12">
        <button class="btn-circ active">Weekly</button>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12">
        <button class="btn-circ">Monthly</button>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12">
        <button class="btn-circ">Quaterly</button>
      </div>
    </div>
    <div class="clearfix"><br/></div>
    <div class="clearfix"><br/></div>
    <div class="main-section">
      <div class="cont">
        <div class="body">
          <div id="ratings-canvas-cont">
            <canvas id="canvas" width="300" height="150px" ></canvas>
          </div>
          <div class="row text-right">
            <div class="col-lg-12">
              <label>Filter:</label>
              <br/>
              <select>
                <option>Worst to Best</option>
                <option>Best to Worst</option>
              </select>
            </div>
          </div>

          <div>
            <p>
              "I hate jollof"
            </p>
            <p>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </p>
          </div>
          <div>
            <p>
              "Too spicy, please reduce the spices especially pepper"
            </p>
            <p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </p>
          </div>
          <div>
            <p>
              "Nigerian jollof tastes better"
            </p>
            <p>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<script src="http://localhost/grubbie/assets/js/ratings-graph.js"></script>
<?php include('../includes/footer-admin.php'); ?>
