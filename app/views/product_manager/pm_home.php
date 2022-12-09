<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/product_manager/pm_home.css">
<!-- ______________________________________________________________________________________________________-->


<h1>Product Manager!</h1>
<h2><?php echo $_SESSION['user_name']; ?></h2>

<input type="button" value="Product Categories" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Product_Manager/productCategories' ">
<input type="button" value="Add new Product Category" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Product_Manager/addCategory' ">

<input type="button" value="Product Stock" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Product_Manager/viewStock' ">
<input type="button" value="Add new Product Stock" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Product_Manager/addStock' ">

<input type="button" value="Logout" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/logout' ">
<input type="button" value="View Profile" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
<input type="button" value="Change Password" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">



<?php require APPROOT.'/views/include/footer.php'; ?>
