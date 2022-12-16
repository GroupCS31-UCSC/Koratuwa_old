<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/supplier/sup_home.css">
<?php require APPROOT.'/views/supplier/supplier_dashboard.php'; ?>
<!-- ______________________________________________________________________________________________________-->

<div class="main">



<img class="bg_image" src="<?php echo URLROOT; ?>/img/sup_home.jpg" alt="no">
  <div class="model1">
    <div class="container1">
      <input type="button" class="btn1" value="Place new order" onclick="location.href='<?php echo URLROOT; ?>/Supplier/placeSupply' ">
      <input type="button" class="btn2" value="View Supply Order" onclick="location.href='<?php echo URLROOT; ?>/Supplier/viewSupply' ">
    </div>
  </div> 
</div>        	  
<!--  <div class="model3">
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
      </div>   -->

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

<!--<script>
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
</script> -->
<?php require APPROOT.'/views/include/footer.php'; ?>
