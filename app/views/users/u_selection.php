<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/users/selection.css">


<h1>Register as,</h1>
<input type="button" value="Supplier" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/registerSupplier' ">
<input type="button" value="Customer" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/registerCustomer' ">


<?php require APPROOT.'/views/include/footer.php'; ?>
