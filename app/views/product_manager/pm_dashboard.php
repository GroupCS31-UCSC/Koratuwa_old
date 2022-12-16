<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/product_manager/pm_dashboard.css">
<!-- ______________________________________________________________________________________________________-->

<div class="navigation">
    <ul>
      <li>
        <a href="#">
          <span class="icon"><img class="img-logo" src="<?php echo URLROOT; ?>/img/koratuwa.png" alt="logo"></span>
          <!--<span class="title" style="font-size:160%;">KORATUWA</span>-->
        </a>
      </li><br><br><br>
      <li>
        <a href="<?php echo URLROOT; ?>/Product_Manager/landingPage">
          <span class="icon"><i class="fa-solid fa-gauge"></i></span>
          <span class="title"> Dashboard</span>
        </a>
      </li>
      <li>
        <a href="<?php echo URLROOT; ?>/Product_Manager/productCategories">
          <span class="icon"><i class="fa-solid fa-boxes-stacked"></i></ion-icon></span>
          <span class="title"> Product Categories</span>
        </a>
      </li>
      <li>
        <a href="<?php echo URLROOT; ?>/Livestock_Manager/ ">
          <span class="icon"><i class="fa-solid fa-cubes-stacked"></i></ion-icon></span>
          <span class="title">Product Stock</span>
        </a>
      </li>
     
    </ul>
  </div>
  <div class="main">
   <!--top nav bar-->
   <div class="topnavbar">

   <div class="toggle">
        <i class="fas fa-bars"></i>
      </div>

      <div class="notifybell">
        <i class="fas fa-bell"></i>
      </div>
      <div class="user">
        <img class="img-user" src="<?php echo URLROOT; ?>/img/dew.jpg" alt="user">
      </div>
      <div class="username">
        <?php echo $_SESSION['user_name']; ?>
      </div>
      <div class="dropdown">
        <i class="fas fa-chevron-down"></i>
        <div class="sub-menu-wrap">
          <div class="sub-menu">
            <div class="dropdown-content">
              <div class="user-info">
                <span><img src="<?php echo URLROOT; ?>/public/img/dew.jpg" alt=""></span>
                <h2><?php echo $_SESSION['user_name']; ?></h2>                    
                </div>
                <hr>
                <a href="#" class="sub-menu-link">
                  <i class="fa-solid fa-user"></i>
                  <p>View Profile</p>
                  <span>></span>
                </a>   
                <a href="#" class="sub-menu-link">
                  <i class="fa-solid fa-lock"></i>
                  <p>Change Password</p>
                  <span>></span>
                </a>
                <a href="<?php echo URLROOT; ?>/Users/u_home" class="sub-menu-link">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  <p>Log out</p>
                  <span>></span>
                </a>
              </div>
            </div>
          </div>
        
      </div>
    </div>

    <?php require APPROOT.'/views/include/footer.php'; ?>