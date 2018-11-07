<?php include('../includes/header.php'); ?>

<form action = "http://localhost/grubbie/menu/view.php" method="POST">
<div id="Translation">
    <h3>User Name</h3>
    <p>Department: <select name = "dept">
            <option value = "EIT"> EIT </option>
            <option value = "MINC"> MINC </option>
            <option value = "Fellow"> Teaching Fellow </option>
            <option value = "Staff"> Incubator Fellow </option><p>
    </select>

    <p>Country: <select name = "count">
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

    <p> Allergy: $aller</p>

    <p>Preferred Diet: <select name = "allerg">
            <option value = "Vege"> Vegetarian </option>
            <option value = "Omni"> Omnivorous </option>
            <option value = "Pesc"> Pescaterian </option>
            <option value = "Vegan"> Vegan </option></p>
    </select>


    <button class="round-block" type = "submit"> Save </button><p>

</div>

<?php include('../includes/footer.php'); ?>
