<?php
include('../includes/header-admin.php');
$carbs = ["Jollof Rice","Fried Yam","White Rice","Potatoe Chips","Eba","Plantain","Fufu","Banku","Amala","Acheke","Chapati","Mukimu","Githeri","Akuoroba","Viazi","Semovita","Wache","Kenke"];
$stews = ["Grilled chicken salad","Goat meat","Bitter leaf soup","Grilled fish","Fish stew","Chicken curry sauce","Fish curry sauce"];
$vegs = ["Chick peas","Mushroom stew","Ovacado salad","Vegetable stew","Beans stew","Green grams stew"];
?>
<div class="create-menu">
  <div class="clearfix"><br/></div>
  <div class="row">
    <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
      <br/>
      <div class="row">
        <div class = "col-lg-7 col-md-7 col-sm-7 col-5">
          <h2>Create Menu</h2>
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
      <!-- breakfast lunch dinner -->
      <div class="bls">
        <button class="breakfast">Breakfast</button>
        <button class="lunch">Lunch</button>
        <button class="dinner">Dinner</button>
      </div>
      <!-- input checkbox, checkbox with dropdown -->
      <div class="order-options">
        <br />
        <br />
        <h4 class="text-center">Choose meal options:</h4>
        <br/>
        <?php foreach($carbs as $carb): ?>
          <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1">
              <input onClick="showAdds(event)" type="checkbox" name="<?= $carb; ?>" id="" />
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-5">
              <label for="jollofRice"><?= $carb; ?></label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-5 text-center">
              <!-- <i class="fas fa-caret-down adds"></i> -->
            </div>
            <div class="col-lg-12 adds">
              <select class="pull-right col-5" name="general">
                <option value="general">General</option>
                <?php foreach ($stews as $stew): ?>
                  <option><?= $stew; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-lg-12 adds">
              <select class="pull-right col-5">
                <option value="general">Vegeterian</option>
                <?php foreach ($vegs as $veg): ?>
                  <option><?= $veg; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
      <div class="preview">
        <div class="row">
          <div class = "col-lg-7 col-md-7 col-sm-7 col-5">
            <h2>View Menu</h2>
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
        <div>
          <button class="edit"><i class="fas fa-pen"></i> &nbsp;Edit</button>
        </div>
        <div class="clearfix"></div>
        <div class="lg">
          <table>
            <tr class="day"><td colspan="3">Monday</td></tr>
            <tr>
              <th>Breakfast</th>
              <th>Lunch</th>
              <th>Dinner</th>
            </tr>

            <tr>
              <td>
                <ul>
                  <li>Sausages</li>
                  <li>Chicken Sandwitch</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Chapati + Grilled chicken salad</li>
                  <li>Chicken Biryani</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Viazi karai</li>
                  <li>Mukimu + Goat meat</li>
                </ul>
              </td>
            </tr>
            <tr class="day"><td colspan="3">Tuesday</td></tr>
            <tr>
              <th>Breakfast</th>
              <th>Lunch</th>
              <th>Dinner</th>
            </tr>

            <tr>
              <td>
                <ul>
                  <li>Fried plaintain + Egg sauce</li>
                  <li>Akara + Pap</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Fufu + Bitter leaf soup</li>
                  <li>Ewedu + Gbegiri + Amala + Fish</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Native soup + Semovita</li>
                  <li>Edikaiko soup + Pounded yam</li>
                </ul>
              </td>
            </tr>
            <tr class="day"><td colspan="3">Wednesday</td></tr>
            <tr>
              <th>Breakfast</th>
              <th>Lunch</th>
              <th>Dinner</th>
            </tr>

            <tr>
              <td>
                <ul>
                  <li>Sausages</li>
                  <li>Chicken Sandwitch</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Chapati + Grilled chicken salad</li>
                  <li>Chicken Biryani</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Viazi karai</li>
                  <li>Mukimu + Goat meat</li>
                </ul>
              </td>
            </tr>
            <tr class="day"><td colspan="3">Thursday</td></tr>
            <tr>
              <th>Breakfast</th>
              <th>Lunch</th>
              <th>Dinner</th>
            </tr>

            <tr>
              <td>
                <ul>
                  <li>Fried plaintain + Egg sauce</li>
                  <li>Akara + Pap</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Fufu + Bitter leaf soup</li>
                  <li>Ewedu + Gbegiri + Amala + Fish</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Native soup + Semovita</li>
                  <li>Edikaiko soup + Pounded yam</li>
                </ul>
              </td>
            </tr>
            <tr class="day"><td colspan="3">Friday</td></tr>
            <tr>
              <th>Breakfast</th>
              <th>Lunch</th>
              <th>Dinner</th>
            </tr>

            <tr>
              <td>
                <ul>
                  <li>Sausages</li>
                  <li>Chicken Sandwitch</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Chapati + Grilled chicken salad</li>
                  <li>Chicken Biryani</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li>Viazi karai</li>
                  <li>Mukimu + Goat meat</li>
                </ul>
              </td>
            </tr>

          </table>
        </div>
        <div class="xs">
          <div class="table">
            <div class="day">
              Monday
            </div>

            <div class="row">
              <div class="col-3">
                Breakfast
              </div>
              <div class="col-9">
                <ul>
                  <li>Sausages</li>
                  <li>Chicken Sandwitch</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-3">
                Lunch
              </div>
              <div class="col-9">
                <ul>
                  <li>Chapati + Grilled chicken salad</li>
                  <li>Chicken Biryani</li>
                </ul>
              </div>
            </div>
              <div class = "row">
                <div class="col-3">
                  Dinner
                </div>
                <div class="col-9">
                <ul>
                  <li>Viazi karai</li>
                  <li>Mukimu + Goat meat</li>
                </ul>
              </div>
            </div>
          </div>
            <div class="table">
              <div class="day">
                Tuesday
              </div>

              <div class="row">
                <div class="col-3">
                  Breakfast
                </div>
                <div class="col-9">
                  <ul>
                    <li>Sausages</li>
                    <li>Chicken Sandwitch</li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  Lunch
                </div>
                <div class="col-9">
                  <ul>
                    <li>Chapati + Grilled chicken salad</li>
                    <li>Chicken Biryani</li>
                  </ul>
                </div>
              </div>
                <div class = "row">
                  <div class="col-3">
                    Dinner
                  </div>
                  <div class="col-9">
                  <ul>
                    <li>Viazi karai</li>
                    <li>Mukimu + Goat meat</li>
                  </ul>
                </div>
              </div>
            </div>
              <div class="table">
                <div class="day">
                  Wednesday
                </div>

                <div class="row">
                  <div class="col-3">
                    Breakfast
                  </div>
                  <div class="col-9">
                    <ul>
                      <li>Sausages</li>
                      <li>Chicken Sandwitch</li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    Lunch
                  </div>
                  <div class="col-9">
                    <ul>
                      <li>Chapati + Grilled chicken salad</li>
                      <li>Chicken Biryani</li>
                    </ul>
                  </div>
                </div>
                  <div class = "row">
                    <div class="col-3">
                      Dinner
                    </div>
                    <div class="col-9">
                    <ul>
                      <li>Viazi karai</li>
                      <li>Mukimu + Goat meat</li>
                    </ul>
                  </div>
                </div>
              </div>
                <div class="table">
                  <div class="day">
                    Thursday
                  </div>

                  <div class="row">
                    <div class="col-3">
                      Breakfast
                    </div>
                    <div class="col-9">
                      <ul>
                        <li>Sausages</li>
                        <li>Chicken Sandwitch</li>
                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-3">
                      Lunch
                    </div>
                    <div class="col-9">
                      <ul>
                        <li>Chapati + Grilled chicken salad</li>
                        <li>Chicken Biryani</li>
                      </ul>
                    </div>
                  </div>
                    <div class = "row">
                      <div class="col-3">
                        Dinner
                      </div>
                      <div class="col-9">
                      <ul>
                        <li>Viazi karai</li>
                        <li>Mukimu + Goat meat</li>
                      </ul>
                    </div>
                  </div>
                </div>
                  <div class="table">
                    <div class="day">
                      Friday
                    </div>

                    <div class="row">
                      <div class="col-3">
                        Breakfast
                      </div>
                      <div class="col-9">
                        <ul>
                          <li>Sausages</li>
                          <li>Chicken Sandwitch</li>
                        </ul>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-3">
                        Lunch
                      </div>
                      <div class="col-9">
                        <ul>
                          <li>Chapati + Grilled chicken salad</li>
                          <li>Chicken Biryani</li>
                        </ul>
                      </div>
                    </div>
                      <div class = "row">
                        <div class="col-3">
                          Dinner
                        </div>
                        <div class="col-9">
                        <ul>
                          <li>Viazi karai</li>
                          <li>Mukimu + Goat meat</li>
                        </ul>
                      </div>
                    </div>
                  </div>
        </div>
        <div class="row">
          <div class="col">
            <br/>
            <div class="submit text-center">
              <button class="btn-success submit-lg col-lg-5 col-md-5 col-sm-5 col-5">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

<script type="text/javascript">

document.querySelectorAll('input').forEach(function(input){
  input.checked = false;
});

const showAdds = function(event){
  if(event.target.checked){
    console.log("Show adds");
    let parentRow = event.target.parentNode.parentNode;
    let adds = parentRow.querySelectorAll('.adds').forEach(function(add) {
      add.style.display = "initial";
    });
    let selects = parentRow.querySelectorAll('select').forEach(function(select) {
      select.value = "general";
    });
  }else{
    console.log("Hide adds");
    let parentRow = event.target.parentNode.parentNode;
    let adds = parentRow.querySelectorAll('.adds').forEach(function(add) {
      add.style.display = "none";
    });
  }
}
</script>
<?php include('../includes/footer-admin.php'); ?>
