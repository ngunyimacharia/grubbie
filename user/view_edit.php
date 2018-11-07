<?php include('../includes/header.php'); ?>

<div class="paper">
<form action = "http://localhost/grubbie/menu/view.php" method="POST">
<div id="Translation" class="cont">
<div class="profile">
    <i class="far fa-user-circle fa-7x"></i>
    <h3>Kayode</h3>
  </div>
    <table>
    <tr>
        <td>Department:</td>
        <td>
                <select name = "dept">
                        <option value = "EIT"> EIT </option>
                        <option value = "MINC"> MINC </option>
                        <option value = "Fellow"> Teaching Fellow </option>
                        <option value = "Staff"> Incubator Fellow </option>
                </select>
        </td>
    </tr>
    <tr>
        <td>Country:</td>
        <td>
                <select name = "count">
                        <option value = "Kenya"> Kenya </option>
                        <option value = "Ghana"> Ghana </option>
                        <option value = "Sudan"> Sudan </option>
                        <option value = "South_Africa"> South Africa </option>
                        <option value = "Nigeria"> Nigeria </option>
                        <option value = "Zimbabwe"> Zimbabwe </option>
                        <option value = "Cameroon"> Cameroon </option>
                        <option value = "Mali"> Mali </option>
                        <option value = "Ivory_Coast "> Ivory Coast </option>
                </select>
        </td>
    </tr>
    <tr>
        <td>Allergy:</td>
        <td>allergy</td>
    </tr>
    <tr>
        <td>Preferred Diet:</td>
        <td>
                <select name = "allerg">
                        <option value = "Vege"> Vegetarian </option>
                        <option value = "Omni"> Omnivorous </option>
                        <option value = "Pesc"> Pescaterian </option>
                        <option value = "Vegan"> Vegan </option>
                </select>
        </td>
    </tr>
    </table>

    <button class="round-block" type = "submit"> Save </button>

</div>
</form>
</div>

<?php include('../includes/footer.php'); ?>
