<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/supplier/sup_home.css">
<!-- ______________________________________________________________________________________________________-->


<h1>Supplier!</h1>

<input type="button" value="Place New Supply" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Supplier/placeSupply' ">
<input type="button" value="View Supply Orders" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Supplier/viewSupply' ">


<input type="button" value="Logout" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/logout' ">
<input type="button" value="View Profile" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
<input type="button" value="Change Password" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">



<?php require APPROOT.'/views/include/footer.php'; ?>
