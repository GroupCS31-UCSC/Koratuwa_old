<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/supplier/updateSupply.css">
<!-- ______________________________________________________________________________________________________-->


<div class="split left">
  	<div class="model1">
	  <img class="logo" src="<?php echo URLROOT; ?>/img/koratuwa.png" alt="no">
  	</div>
</div>

<div class="split right">
	<div class="model2">
		<img class="sup1" src="<?php echo URLROOT; ?>/img/sup1.jpg" alt="no">
		<div class="form-container">

			<div class="form-header">
				<center><h1>Update Supply Order</h1></center>
			</div>
			<br>

			<form action="<?php echo URLROOT; ?>/Supplier/updateSupOrder/<?php echo $data['supOrderId']; ?>" method="POST">

				<!--quantity-->
				<div class="form-input-title">Supply Quantity (LITER)</div>
				<span class="form-invalid"><?php echo $data['quantity_err']; ?></span>
				<input type="text" name="quantity" id="quantity" class="quantity" value="<?php echo $data['quantity']; ?>">

				<!--supply_date-->
				<div class="form-input-title">Supply Date</div>
				<span class="form-invalid"><?php echo $data['date_err']; ?></span>
				<input type="date" name="date" id="date" class="date" value="<?php echo $data['date']; ?>">

				<!--address-->
				<div class="form-input-title">Address</div>
				<span class="form-invalid"><?php echo $data['address_err']; ?></span>
				<input type="text" name="address" id="address" class="address" value="<?php echo $data['address']; ?>">

				<br>
				<input type="submit" value="Submit" class="form-btn1"><br>
				

			</form>
			<input type="button" value="Cancel" class="form-btn2" onclick="location.href='<?php echo URLROOT; ?>/Supplier/viewSupply' ">
		</div>  
	</div>
</div>	

<?php require APPROOT.'/views/include/footer.php'; ?>
