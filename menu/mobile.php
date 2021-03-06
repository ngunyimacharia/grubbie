<?php include('../includes/header.php'); ?>

<div class="create-menu">
  <div class="clearfix"><br/></div>
  <div class="row">
    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
      <div class="preview">
        <div class="row">
          <div class = "col-lg-7 col-md-7 col-sm-7 col-5">
            <h2>Meals</h2>
          </div>
          <div class = "col-lg-5 col-md-5 col-sm-5 col-7">
            <br/>
            <select class="date-select pull-right">
              <option>Nov 12, 2018 - Nov 16, 2018</option>
              <option>Nov 19, 2018 - Nov 23, 2018</option>
            </select>
          </div>
        </div>
        <hr/>

        <!-- days of the week -->
        <?php include('../includes/ui/days.php'); ?>
        <div class="meal-choices">
          <div class="meal-type">Breakfast</div>
          <div class="rounded-container active">
              <div class="rounded-wrapper">
                  <div class="rounded-image"></div>
                  <div class="rounded-text">
                    Tea and Bread
                    <a class="pull-right" href="http://localhost/grubbie/meal/view.php">
                      View
                    </a>
                  </div>
              </div>
          </div>
          <div class="rounded-container">
              <div class="rounded-wrapper">
                  <div class="rounded-image"></div>
                  <div class="rounded-text">Chicken Sandwitch
                  <a class="pull-right" href="http://localhost/grubbie/meal/view.php">
                    View meal
                  </a>
                </div>
              </div>
          </div>
          <div class="rounded-container">
              <div class="rounded-wrapper">
                  <div class="rounded-image"></div>
                  <div class="rounded-text">Sausages
                  <a class="pull-right" href="http://localhost/grubbie/meal/view.php">
                    View meal
                  </a>
                </div>
              </div>
          </div>

          <div class="meal-type">Lunch</div>
          <div class="rounded-container">
              <div class="rounded-wrapper">
                  <div class="rounded-image"></div>
                  <div class="rounded-text">Chapati + Grilled chicken salad
                  <a class="pull-right" href="http://localhost/grubbie/meal/view.php">
                    View meal
                  </a>
                </div>
              </div>
          </div>
          <div class="rounded-container active">
              <div class="rounded-wrapper">
                  <div class="rounded-image"></div>
                  <div class="rounded-text">Chicken Biryani
                  <a class="pull-right" href="http://localhost/grubbie/meal/view.php">
                    View meal
                  </a>
                </div>
              </div>
          </div>
          <div class="rounded-container">
              <div class="rounded-wrapper">
                  <div class="rounded-image"></div>
                  <div class="rounded-text">Fufu + Bitter leaf soup
                  <a class="pull-right" href="http://localhost/grubbie/meal/view.php">
                    View meal
                  </a>
                </div>
              </div>
          </div>

          <div class="meal-type">Supper</div>
          <div class="rounded-container">
              <div class="rounded-wrapper">
                  <div class="rounded-image"></div>
                  <div class="rounded-text">Native soup + Semovita
                  <a class="pull-right" href="http://localhost/grubbie/meal/view.php">
                    View meal
                  </a>
                </div>
              </div>
          </div>
          <div class="rounded-container">
              <div class="rounded-wrapper">
                  <div class="rounded-image"></div>
                  <div class="rounded-text">Edikaiko soup + Pounded yam
                  <a class="pull-right" href="http://localhost/grubbie/meal/view.php">
                    View meal
                  </a>
                </div>
              </div>
          </div>
          <div class="rounded-container active">
              <div class="rounded-wrapper">
                  <div class="rounded-image"></div>
                  <div class="rounded-text">Mukimu + Goat meat
                  <a class="pull-right" href="http://localhost/grubbie/meal/view.php">
                    View meal
                  </a>
                </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <br/>
            <div class="submit text-center">
              <button>Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>


<?php include('../includes/footer.php'); ?>
