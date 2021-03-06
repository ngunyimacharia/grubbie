<?php include('../includes/header-admin.php'); ?>

<div class = "row gmail-container admin-rate">
  <div class = "col-lg-3 col-md-3 col-sm-3 col-12 left-menu">
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
        Mukimu + Goat meat
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
        Chapati + Grilled chicken salad
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
        Chicken Biryani
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
        Fufu + Bitter leaf soup
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
        Ewedu + Gbegiri + Amala + Fish
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
        Viazi karai
        <br/>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <i class="far fa-star"></i>
        <br/>
        67 Reviews
      </li></a>
    </ul>
    <div class="xs">
      <div class="btn-grp">
        <button class="left active">Rating</button>
        <button class="right">Popularity</button>
      </div>
      <div class="clearfix"><br/></div>
      <div class="clearfix"><br/></div>
      <div class="row">
        <div class="col-3">
          <label>Food:</label>
        </div>
        <div class="col-9">
          <select>
            <option> Jollof rice + Grilled meat </option>
            <option>Chapati + Grilled chicken salad</option>
            <option>Fufu + Bitter leaf soup</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-9 col-12 right-main">
    <div class="top-options">
      <div class="row lg">
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
    </div>
    <div class="clearfix"><br/></div>
    <div class="row">
      <div class="col-3">
        <br/>
      &nbsp;&nbsp;<label>Period:</label>
    </div>
    <div class="col-9">
      <select class="date-select pull-right">
        <option>Nov 12, 2018 - Nov 16, 2018</option>
        <option>Nov 19, 2018 - Nov 23, 2018</option>
      </select>
    </div>
  </div>
    <div class="clearfix"><br/></div>
    <div class="main-section">
      <div class="cont">
        <div class="body">
          <div id="ratings-canvas-cont">
            <canvas id="canvas" style="width:150px;height:70px" ></canvas>
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
