<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admin/viewEmployees.css">
<!-- ______________________________________________________________________________________________________-->


<h1>View Employees!</h1>

<?php flash('addEmp_flash');  ?>
<?php flash('updateEmp_flash') ?>
<?php flash('dltEmp_flash') ?>

<h1><?php echo $_SESSION['user_name']; ?></h1>
<h2><?php echo $_SESSION['user_id']; ?></h2>

<table>
  <tr>
    <th>Employee Id</th>
    <th>Name</th>
    <th>Employment</th>
    <th>Salary</th>
    <th>NIC</th>
    <th>Contact Number</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Email</th>
    <th>Address</th>
    <th>Last Accessed On</th>
    <th>Action</th>
  </tr>

  <?php foreach ($data['empView'] as $emp) : ?>
  <tr>
    <td><?php echo $emp->employee_id; ?></td>
    <td><?php echo $emp->employee_name; ?></td>
    <td><?php echo $emp->employment; ?></td>
    <td><?php echo $emp->salary; ?></td>
    <td><?php echo $emp->nic; ?></td>
    <td><?php echo $emp->contact_number; ?></td>
    <td><?php echo $emp->gender; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo $emp->email; ?></td>
    <td><?php echo $emp->address; ?></td>
    <td><?php echo ''; ?></td>
    <td>
      <div class="post-control-btns">
      <a href="<?php echo URLROOT?>/Admin/updateEmployees/<?php echo $emp->email ?>"><button class="post-control-btn1">EDIT</button></a>
      <a href="<?php echo URLROOT?>/Admin/deleteEmployees/<?php echo $emp->email ?>"><button class="post-control-btn2">DELETE</button></a>
    </div>
    </td>
  </tr><br>
  <?php endforeach; ?>

</table>



<input type="button" value="Add Employee" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Admin/addEmployees' ">
<input type="button" value="UPDATE" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Admin/updateEmployees' ">
<input type="button" value="DELETE" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Admin/deleteEmployees' ">

<input type="button" value="Logout" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/logout' ">
<input type="button" value="View Profile" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
<input type="button" value="Change Password" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">



<?php require APPROOT.'/views/include/footer.php'; ?>
