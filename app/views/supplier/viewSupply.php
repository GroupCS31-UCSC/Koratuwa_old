<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/supplier/viewSupply.css">
<!-- ______________________________________________________________________________________________________-->
<!-- navigation bar ------>
<div class="bg">
  <img class="img-bg" src="<?php echo URLROOT; ?>/img/sup2.jpg" alt="no">
  
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
  <?php flash('placeSupply_flash') ?>
  <?php flash('dltSupOrder_flash') ?>
  <?php flash('updateSupply_flash') ?>
  
  <div class="tabel_content">
    <table>
      <tr>
        <th>Supply Order ID</th>
        <th>Supply Date</th>
        <th>Supply Quantity</th>
        <th>Price Received Per Unit</th>
        <th>Supplying Address</th>
        <th>Status</th>
        <th>Remarks</th>
      </tr>

      <?php foreach ($data['supOrderView'] as $supOrd) : ?>
      <tr>
        <td><?php echo $supOrd->supply_order_id; ?></td>
        <td><?php echo $supOrd->supply_date; ?></td>
        <td><?php echo $supOrd->quantity; ?></td>
        <td><?php echo $supOrd->unit_price; ?></td>
        <td><?php echo $supOrd->supplying_address; ?></td>
        <td><?php echo $supOrd->status; ?></td>
        <td>
          <?php if($supOrd->status == 'Not Collected') : ?>
            <div class="post -control-btns">
              <a href="<?php echo URLROOT?>/Supplier/updateSupOrder/<?php echo $supOrd->supply_order_id ?>"><button class="post-control-btn1">EDIT</button></a>
              <a href="<?php echo URLROOT?>/Supplier/deleteSupOrder/<?php echo $supOrd->supply_order_id ?>"><button class="post-control-btn2">DELETE</button></a>
            </div>
          <?php else : ?>
            <?php echo $supOrd->remarks; ?>
          <?php endif; ?>
        </td>
      </tr><br>
      <?php endforeach; ?>

    </table>  
  </div>
  <input type="button" value="Place New Supply" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Supplier/placeSupply' ">

</div>
<?php require APPROOT.'/views/include/footer.php'; ?>
