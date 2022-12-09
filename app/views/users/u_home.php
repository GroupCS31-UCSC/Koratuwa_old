
<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/users/home.css">
<!--_________________________________________________________________________________________ -->

<div class="bg">
  <img class="img-bg" src="<?php echo URLROOT; ?>/img/bg-copy.jpg" alt="no">


  <div class="model1">
    <div class="wrapper ">
      <input type="button" value="Login" class="Loginbtn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
      <input type="button" value="Register" class="Registerbtn" onclick="location.href='<?php echo URLROOT; ?>/Users/selection' ">
      <input type="button" value="About" class="Aboutbtn" >
      <input type="button" value="Contact" class="Contactbtn">
    </div>
    <img class="logo"src="<?php echo URLROOT; ?>/img/koratuwa.png" alt="no">
  </div>
  <div class="model2">
    <h1>Koratuwa Dairy Farm</h1>
  </div>
</div>
<?php require APPROOT.'/views/include/footer.php'; ?>
