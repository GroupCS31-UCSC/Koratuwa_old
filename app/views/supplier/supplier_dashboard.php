<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/supplier/sup_dashboard.css">
<!--
 ______________________________________________________________________________________________________-->

<div class="navigation">
  <ul>
    <li>
      <a href="#">
        <span class="icon"><img class="img-logo" src="<?php echo URLROOT; ?>/img/koratuwa.png" alt="logo"></span>
        <!--<span class="title" style="font-size:160%;">KORATUWA</span>-->
      </a>
    </li><br><br><br>
    <li>
      <a href="<?php echo URLROOT; ?>/Supplier/landingPage">
        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
        <span class="title"> Dashboard</span>
      </a>
    </li>
    <li>
      <a href="<?php echo URLROOT; ?>/supplier/viewSupply">
        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
        <span class="title">View Supply Order</span>
      </a>
    </li>
    <li>
      <a href="<?php echo URLROOT; ?>/supplier/placeSupply">
        <span class="icon"><ion-icon name="bag-add-outline"></ion-icon></span>
        <span class="title">Place Supply Order</span>
      </a>
    </li>
    <li>
      <a href="<?php echo URLROOT; ?>/Product_Manager/productCategories">
        <span class="icon"><ion-icon name="fast-food-outline"></ion-icon></span>
        <span class="title">Income</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
        <span class="title">Special Offers</span>
      </a>
    </li>
    <li>
      <a href="#">
        <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
        <span class="title">Feedbacks</span>
      </a>
    </li>
  </ul>
</div>


  <!--top nav bar-->
  <div class="topnavbar">

    <div class="toggle">
      <ion-icon name="menu-outline"></ion-icon>
    </div>

    <div class="notifybell">
      <ion-icon name="notifications-outline"></ion-icon>
    </div>

    <div class="user">
      <img class="img-user" src="<?php echo URLROOT; ?>/img/sasindu.jpg" alt="user">
    </div>

    <div class="username">
      <label for="name"><?php echo $_SESSION['user_name']; ?></label>
      <!--<div class="dropdown">
      <button onclick="myFunction()" class="dropbtn"><ion-icon name="chevron-down-outline"></ion-icon></button>
      <div id="myDropdown" class="dropdown-content">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
      </div>
    </div> -->
    
    <div class="container">
      <div class="menu">
        <button class="toggle-dd"><ion-icon name="chevron-down-outline"></button>
        <ul class="list">
          <li class="list-item" style="--delay:0.2s">Front-end</li>
          <li class="list-item" style="--delay:0.4s">Back-end</li>
          <li class="list-item" style="--delay:0.6s">Full-Stack</li>
          <li class="list-item" style="--delay:0.8s">@Website_Mentor</li>
        </ul>
      </div>
    </div>

   </div>
    </div>

  </div>
