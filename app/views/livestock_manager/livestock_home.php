<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/livestock_manager/livestock_home.css">
<!-- ______________________________________________________________________________________________________-->


<h1>livestock_Manager!</h1>
<h2><?php echo $_SESSION['user_name']; ?></h2>

<input type="button" value="Cattle" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Livestock_Manager/viewCattle' ">
<input type="button" value="Add new Cattle" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Livestock_Manager/addCattle' ">

<input type="button" value="Cattle Feed" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Livestock_Manager/viewFeed' ">
<input type="button" value="Cattle Vaccination" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Livestock_Manager/viewVaccination' ">

<input type="button" value="Logout" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/u_home' ">
<input type="button" value="View Profile" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
<input type="button" value="Change Password" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">



<?php require APPROOT.'/views/include/footer.php'; ?>
