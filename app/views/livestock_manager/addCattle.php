<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/livestock_manager/addCattle.css">
<!-- ______________________________________________________________________________________________________-->


<div class="form-container">

	<div class="form-header">
		<center><h1>Add New Cattle!</h1></center>
	</div>
	<br>

	<form action="<?php echo URLROOT; ?>/Livestock_Manager/addCattle" method="POST">

		<!--breed-->
		<div class="form-input-title">Cow Breed</div>
    <span class="form-invalid"><?php echo $data['breed_err']; ?></span>
    <select class="breed" name="breed" id="breed" value="<?php echo $data['breed']; ?>">
      <option value="American">american</option>
      <option value="local">local</option>
      <option value="other">other</option>
    </select>

    <!--weight-->
		<div class="form-input-title">Weight(Kg)</div>
    <span class="form-invalid"><?php echo $data['weight_err']; ?></span>
		<input type="text" name="weight" id="weight" class="weight" value="<?php echo $data['weight']; ?>">

    <!--gender-->
		<div class="form-input-title">Gender</div>
    <span class="form-invalid"><?php echo $data['gender_err']; ?></span>
    <select class="gender" name="gender" id="gender" value="<?php echo $data['gender']; ?>">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>

    <!--dob-->
    <div class="form-input-title">Date of Birth</div>
    <span class="form-invalid"><?php echo $data['dob_err']; ?></span>
    <input type="date" name="dob" id="dob" class="dob" value="<?php echo $data['dob']; ?>">

    <!--health-->
    <div class="form-input-title">Health</div>
    <span class="form-invalid"><?php echo $data['health_err']; ?></span>
    <input type="text" name="health" id="health" class="health" value="<?php echo $data['health']; ?>">

		<br>
		<input type="submit" value="Submit" class="form-btn">


	</form>

<?php require APPROOT.'/views/include/footer.php'; ?>
