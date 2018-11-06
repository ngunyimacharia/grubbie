<?php include('../includes/header.php'); ?>
    <h1>View your orders</h1>

<!-- <img src="http://localhost/grubbie/assets/images/profile_icon.png" alt = "logo">

<img src="http://localhost/grubbie/assets/images/rate_icon_inv.png" alt = "logo">

<img src="http://localhost/grubbie/assets/images/meal_icon.png" alt = "logo"> -->

    <?php include ('../includes/ui/days.php'); ?>
    <!-- breakfast lunch dinner -->
    <div class="bls">
    	<button class="breakfast">Breakfast</button>
    	<button class="lunch">Lunch</button>
    	<button class="dinner">Dinner</button>
    </div>
    Options<br/>
    <!-- input checkbox, checkbox with dropdown -->
    <div class="order-options">
    <input type="checkbox" name="jollofRice" id=""><label for="jollofRice">Jollof Rice</label><i class="fas fa-caret-down"></i><br>

    <input type="checkbox" name="Fried Yam" id=""><label for="Fried Yam">Fried Yam</label><i class="fas fa-caret-down"></i><br>

    <input type="checkbox" name="White Rice" id=""><label for="White Rice">White Rice</label><i class="fas fa-caret-down"></i><br>

    <input type="checkbox" name="Potatoe Chips" id=""><label for="Potatoe Chips">Potatoe Chips</label><i class="fas fa-caret-down"></i><br>

    <input type="checkbox" name="Eba" id=""><label for="Eba">Eba</label><i class="fas fa-caret-down"></i><br>

    <input type="checkbox" name="Eba" id=""><label for="Eba">Eba</label><i class="fas fa-caret-down"></i><br>

    <input type="checkbox" name="Plantain" id=""><label for="Plantain">Plantain</label><i class="fas fa-caret-down"></i><br>

    <input type="checkbox" name="Fufu" id=""><label for="Fufu">Fufu</label><i class="fas fa-caret-down"></i><br>

    <input type="checkbox" name="Fufu" id=""><label for="Fufu">Fufu</label><i class="fas fa-caret-down"></i><br>

    <input type="checkbox" name="Banku" id=""><label for="Banku">Banku</label><i class="fas fa-caret-down"></i><br>
</div>
    

    <!-- submit button --><br/>
    <button>Submit</button>
    <?php //include ('../includes/ui/rounded_div.php'); ?>
    
<?php include('../includes/footer.php'); ?>
