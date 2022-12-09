
<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/users/home.css">
<!--_________________________________________________________________________________________ -->

<div class="bg">

  <img class="img-bg" src="<?php echo URLROOT; ?>/img/bg-copy.jpg" alt="no">
  <h2 class="bg-txt">Welcome to</h2>
  <img class="img-logo" src="<?php echo URLROOT; ?>/img/koratuwa.png" alt="no">

  <input type="button" value="Register" class="Rbtn" onclick="location.href='<?php echo URLROOT; ?>/Users/selection' ">
  <input type="button" value="Login" class="btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">

</div>



<?php require APPROOT.'/views/include/footer.php'; ?>
