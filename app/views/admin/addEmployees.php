<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admin/addEmployees.css">
<!-- ______________________________________________________________________________________________________-->
<?php require APPROOT.'/views/admin/admin_dashboard.php';  ?>

<div class="main">

<div class="form-container">


	<div class="form-header">
		<center><h1>Add Employee</h1></center>
	</div>
	<br>

	<form action="<?php echo URLROOT; ?>/Admin/addEmployees" method="POST">

		<!--name-->
		<div class="form-input-title">Employee Name</div>
    <span class="form-invalid"><?php echo $data['name_err']; ?></span>
		<input type="text" name="name" id="name" class="name" value="<?php echo $data['name']; ?>">

    <!--nic-->
    <div class="form-input-title">NIC</div>
    <span class="form-invalid"><?php echo $data['nic_err']; ?></span>
    <input type="text" name="nic" id="nic" class="nic" value="<?php echo $data['nic']; ?>">

    <!--contact no-->
    <div class="form-input-title">Contact Number</div>
    <span class="form-invalid"><?php echo $data['tp_num_err']; ?></span>
    <input type="text" name="tp_num" id="tp_num" class="tp_num" value="<?php echo $data['tp_num']; ?>">

    <!--gender          RADIO BUTTONS DANNA-->
		<div class="form-input-title">Gender</div>
    <span class="form-invalid"><?php echo $data['gender_err']; ?></span>
    <input type="text" name="gender" id="gender" class="gender" value="<?php echo $data['gender']; ?>">

    <!--DOB-->
		<div class="form-input-title">Date Of Birth</div>
    <span class="form-invalid"><?php echo $data['dob_err']; ?></span>
    <input type="date" name="dob" id="dob" class="dob" value="<?php echo $data['dob']; ?>">

    <!--address-->
    <div class="form-input-title">Address</div>
    <span class="form-invalid"><?php echo $data['address_err']; ?></span>
    <input type="text" name="address" id="address" class="address" value="<?php echo $data['address']; ?>">

		<!--email-->
		<div class="form-input-title">Email</div>
    <span class="form-invalid"><?php echo $data['email_err']; ?></span>
    <input type="text" name="email" id="email" class="email" value="<?php echo $data['email']; ?>">

		<!--employment DROP DOWN EKK DANNA-->
		<div class="form-input-title">Employment</div>
    <span class="form-invalid"><?php echo $data['employment_err']; ?></span>
    <input type="text" name="employment" id="employment" class="employment" value="<?php echo $data['employment']; ?>">

		<br>
		<input type="submit" value="Submit" class="form-btn">


	</form>
</div>
</div>
<?php require APPROOT.'/views/include/footer.php'; ?>
