<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/livestock_manager/viewCattle.css">
<!-- ______________________________________________________________________________________________________-->


<h1>View Cattle!</h1>

<?php flash('addCattle_flash') ?>
<?php flash('updateCattle_flash') ?>
<?php flash('deleteCattle_flash') ?>

<h2><?php echo $_SESSION['user_id']; ?></h2>

<table>
  <tr>
    <th>COW ID</th>
    <th>Breed</th>
    <th>Gender</th>
    <th>Weight</th>
    <th>Age</th>
    <th>Health</th>
    <th>Average Milking(Literes per day)</th>
    <th>Associated Livestock Manager</th>
    <th>Action</th>
  </tr>

  <?php foreach ($data['cattleView'] as $cattle) : ?>
  <tr>
    <td><?php echo $cattle->cow_id; ?></td>
    <td><?php echo $cattle->cow_breed; ?></td>
    <td><?php echo $cattle->gender; ?></td>
    <td><?php echo $cattle->weight; ?></td>
    <td>
    <?php
    //$bday = strtotime($cattle->dob);
    //$today = strtotime(date('y.m.d'));
    //$diff = $today-$bday;
    //echo getAge($cattle->dob);
    ?>
    </td>
    <td><?php echo $cattle->health; ?></td>
    <td><?php echo '12.5'; ?></td>
    <td><?php echo $cattle->employee_id; ?></td>
    <td>
        <div class="post -control-btns">
          <a href="<?php echo URLROOT?>/Livestock_Manager/updateCattle/<?php echo $cattle->cow_id ?>"><button class="post-control-btn1">EDIT</button></a>
          <a href="<?php echo URLROOT?>/Livestock_Manager/deleteCattle/<?php echo $cattle->cow_id ?>"><button class="post-control-btn2">DELETE</button></a>
        </div>
    </td>
  </tr><br>
  <?php endforeach; ?>

</table>
<input type="button" value="Add New Cattle" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Livestock_Manager/addCattle' ">

<input type="button" value="Logout" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/u_home' ">
<input type="button" value="View Profile" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
<input type="button" value="Change Password" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">



<?php require APPROOT.'/views/include/footer.php'; ?>
