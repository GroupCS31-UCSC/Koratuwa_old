<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/supplier/viewSupply.css">
<!-- ______________________________________________________________________________________________________-->


<h1>View Supplies!</h1>

<?php flash('placeSupply_flash') ?>
<?php flash('dltSupOrder_flash') ?>
<?php flash('updateSupply_flash') ?>

<h2><?php echo $_SESSION['user_id']; ?></h2>

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
<input type="button" value="Place New Supply" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Supplier/placeSupply' ">

<input type="button" value="Logout" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/logout' ">
<input type="button" value="View Profile" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
<input type="button" value="Change Password" class="form-btn" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">



<?php require APPROOT.'/views/include/footer.php'; ?>
