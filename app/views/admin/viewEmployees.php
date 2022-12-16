<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admin/viewEmployees.css">
<!-- ______________________________________________________________________________________________________-->
<?php require APPROOT.'/views/admin/admin_dashboard.php';  ?>

<div class="main">


<table>
  <tr>
    <th>Employee Id</th>
    <th>Name</th>
    <th>Employment</th>
    <th>Salary</th>
    <!--<th>NIC</th>-->
    <th>Contact Number</th>
    <th>Gender</th>
    <th>Age</th>
    <!--<th>Email</th>-->
    <!--<th>Address</th>-->
    <th>Last Accessed On</th>
    <th>Action</th>
  </tr>

  <?php foreach ($data['empView'] as $emp) : ?>
  <tr>
    <td><?php echo $emp->employee_id; ?></td>
    <td><?php echo $emp->employee_name; ?></td>
    <td><?php echo $emp->employment; ?></td>
    <td><?php echo $emp->salary; ?></td>
    <td><?php echo $emp->contact_number; ?></td>
    <td><?php echo $emp->gender; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td>
      <div class="post-control-btns">
      <a href="<?php echo URLROOT?>/Admin/updateEmployees/<?php echo $emp->email ?>"><button class="post-control-btn1">EDIT</button></a>
      <a href="<?php echo URLROOT?>/Admin/deleteEmployees/<?php echo $emp->email ?>"><button class="post-control-btn2" onclick="delete()">DELETE</button></a>
    </div>
    </td>
  </tr><br>
  <?php endforeach; ?>

</table>


<input type="button" value="Add Employee" class="btn" onclick="location.href='<?php echo URLROOT; ?>/Admin/addEmployees' ">
</div>
<!--
<input type="button" value="Logout" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/logout' ">
<input type="button" value="View Profile" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
<input type="button" value="Change Password" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
-->
<script>
function delete(){
    swal({
      title: "Are You Sure ?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((isOkay) => {
      if(isOkay){
        form.submit();
      }
    });
    return false;
  }

</script>

<?php require APPROOT.'/views/include/footer.php'; ?>
