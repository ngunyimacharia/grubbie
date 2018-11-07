<?php include('../includes/header.php'); ?>

<div class = 'paper'>
<form action = "view_edit.php">
  <div id="Translation" class="cont">
  <div class="profile">
    <i class="far fa-user-circle fa-7x"></i>
    <h3>Kayode</h3>
  </div>
    
    <table>
      <tr>
        <td>Department:</td>
        <td>EIT</td>
      </tr>
      <tr>
        <td>Country:</td>
        <td>Nigeria</td>
      </tr>
      <tr>
        <td>Allergy:</td>
        <td>Warm milk</td>
      </tr>
      <tr>
        <td>Preferred diet:</td>
        <td>Vegie</td>
      </tr>
    </table>

    <button class="round-block" type = "submit"> Edit </button><p>

    </div>
    <a href="http://localhost/grubbie" class="round-btn" style="float: right">Logout</a>
    </div>
  </form>
  <?php include('../includes/footer.php'); ?>
