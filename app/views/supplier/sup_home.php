<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/supplier/sup_home.css">
<!-- ______________________________________________________________________________________________________-->

<div class="topnav">
  <form class="topnav_container" action="index.html" method="post">
  <img class="logo" src="<?php echo URLROOT; ?>/img/koratuwa.png" alt="no">
    <div class="logout">
      <input type="button" value="Logout" class="btn_logout" onclick="location.href='<?php echo URLROOT; ?>/Users/logout' ">
    </div>
    <div class="supplier_name">
      <form class="container3">
        <img class="img2" src="<?php echo URLROOT; ?>/img/user2.png" alt="no">
        <div class="dropdown">
          <input type="button" value="Sasindu Udayanga" class="dropbtn">  
          <div class="dropdown-content">
            <a href="<?php echo URLROOT; ?>/Users/login">View Profile</a>
            <a href="<?php echo URLROOT; ?>/Users/login">Change Password</a>
          </div>
        </div>
  
      </form>
    </div>

  </form>
</div>


<div class="split left">
  	<div class="left1">
	    <img class="logo" src="<?php echo URLROOT; ?>/img/koratuwa.png" alt="no">
      <div class="description">
        <p>
          "Visit us for an unmatched farmstead dining scene with a menu that 
          showcases the best and most flavorful grilled cheese 
          sandwiches. Our menu has a farmhouse approach with a modern flair, 
          sure to satisfy your palate. We offer an unlimited milk bar that features a great tasting lineup of Sassy Cow flavored milk. 
          Ice cream lovers will also get to enjoy an expanded offering of ice cream flavors. 
          We’re excited to embark on our newest venture and look forward to your next visit."
            
        </p>
      </div>
    </div>
</div>
<div class="split right">
  	<div class="right1">
      <img src="<?php echo URLROOT; ?>/img/sup_home.jpg" alt="no">
      <div class="model2">
        <div class="container2">
          <input type="button" class="btn1" value="Place new order" onclick="location.href='<?php echo URLROOT; ?>/Supplier/placeSupply' ">
          <input type="button" class="btn2" value="View Supply Order" onclick="location.href='<?php echo URLROOT; ?>/Supplier/viewSupply' ">
        </div>
      </div>   	  
      <div class="model3">
        <div class="container4">
          <label class="label1">Purchasing Price</label>
          <div class="items">
            <h2>
              RS. <span class="counter_up" data-number="130" data-speed="10000"></span>
            </h2>
          </div>
        </div>
      </div>
      <div class="model4">
        <div class="container4">
          <label class="label1">Number of Suppliers</label>
          <div class="items">
            <h2>
              <span class="counter_up" data-number="200" data-speed="10000"></span>
            </h2>
          </div>
        </div>
      </div>

  	</div>
</div>

    <!--Add charts
    <div class="graphBox">

      <div class="box">
        <label><center>Total Profit</center></label>
        <canvas id="earning"></canvas>
      </div>

      <div class="box">
        <label><center>Profit by Productions</center></label>
        <canvas id="profit"></canvas>
      </div>

      <div class="box">
        <label><center>Profit by Productions</center></label>
        <canvas id="profit2"></canvas>
      </div>

    </div>-->

<script>
 let counterup = document.querySelectorAll(".counter_up");
  let convert = Array.from(counterup);
  convert.map((counteritem) => {
    let counter = 0;
    function count() {
      counter++;
      counteritem.innerHTML = counter;
      if (counter == counteritem.dataset.number) {
        clearInterval(timing);
      }
    }
    let timing = setInterval(() => {
      count();
    }, counteritem.dataset.speed/counter);
}); 
</script>
<?php require APPROOT.'/views/include/footer.php'; ?>
