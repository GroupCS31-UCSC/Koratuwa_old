<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admin/admin_home.css">
<!-- ______________________________________________________________________________________________________-->

<div class="bg">

</div>

<h1>Admin!</h1>

<input type="button" value="Employees" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Admin/viewEmployees' ">
<input type="button" value="Logout" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/logout' ">

<input type="button" value="View Profile" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
<input type="button" value="Change Password" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">



<?php require APPROOT.'/views/include/footer.php'; ?>
