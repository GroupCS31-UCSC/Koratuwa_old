<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/livestock_manager/livestock_home.css">
<!-- ______________________________________________________________________________________________________-->


<div class="container">
  <!--Dashboard-->
  <div class="navigation">
    <ul>
      <li>
        <a href="#">
          <span class="icon"><img class="img-logo" src="<?php echo URLROOT; ?>/img/logo.png" alt="logo"></span>
          <!--<span class="title" style="font-size:160%;">KORATUWA</span>-->
        </a>
      </li><br><br><br>
      <li>
        <a href="<?php echo URLROOT; ?>/Livestock_Manager/landingPage">
          <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
          <span class="title"> Dashboard</span>
        </a>
      </li>
      <li>
        <a href="<?php echo URLROOT; ?>/Admin/viewCattle">
          <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
          <span class="title">Cattle</span>
        </a>
      </li>
      <li>
        <a href="<?php echo URLROOT; ?>/Livestock_Manager/ ">
          <span class="icon"><ion-icon name="paw-outline"></ion-icon></span>
          <span class="title">Livestock</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="icon"><ion-icon name="bag-add-outline"></ion-icon></span>
          <span class="title">Milk Collection</span>
        </a>
      </li>
      <li>
        <a href="<?php echo URLROOT; ?>/Product_Manager/productCategories">
          <span class="icon"><ion-icon name="fast-food-outline"></ion-icon></span>
          <span class="title">Production</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
          <span class="title">Customers</span>
        </a>
      </li>
      <li>
        <a href="#">
          <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
          <span class="title">Suppliers</span>
        </a>
      </li>
    </ul>
  </div>

  <!--main-->
  <div class="main">
    <!--top nav bar-->
    <div class="topnavbar">

      <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
      </div>

      <div class="notifybell">
        <ion-icon name="notifications-outline"></ion-icon>
      </div>

      <div class="user">
        <img class="img-user" src="<?php echo URLROOT; ?>/img/" alt="user">
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
      <ion-icon name="chevron-down-outline">
      </div>

    </div>

    <!--cards-->
    <div class="cardBox">

      <div class="card">
        <div>
          <div class="cardName">Total Income(Rs.)</div>
          <div class="numbers">1,504</div>
          <div class="day1">
            <div class="circle"></div><label>last 30 days</label>
          </div>
        </div>
      </div>

      <div class="card">
        <div>
          <div class="cardName">Total Expenses(Rs.)</div>
          <div class="numbers">1,504</div>
          <div class="day2">
            <div class="circle"></div><label>last 30 days</label>
          </div>
        </div>
      </div>

      <div class="card">
        <div>
          <div class="cardName">Total Profit(Rs.)</div>
          <div class="numbers">1,504</div>
          <div class="day3">
            <div class="circle"></div><label>last 30 days</label>
          </div>
        </div>
      </div>

      <div class="card">
        <div>
          <div class="cardName">Total Milk Collection(L.)</div>
          <div class="numbers">1,504</div>
          <div class="day4">
            <div class="circle"></div><label>last 30 days</label>
          </div>
        </div>
      </div>

    </div>

    <!--Add charts-->
    <div class="graphBox">

      <div class="box">
        <label><center>Total Profit</center></label>
        <canvas id="earning"></canvas>
      </div>

      <div class="box">
        <label><center>Profit by Productions</center></label>
        <canvas id="profit"></canvas>
      </div>

    </div>

  </div>

</div>


<!--
<script type="text/javascript" href="<?php echo URLROOT; ?>/public/js/myChart.js">

</script>
-->
<?php require APPROOT.'/views/include/footer.php'; ?>
