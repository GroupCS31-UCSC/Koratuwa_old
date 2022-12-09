<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/admin/updateEmployees.css">
<!-- ______________________________________________________________________________________________________-->


<div class="post-container">
  <center><h2>Edit</h2></center>

  <form action="<?php echo URLROOT; ?>/Admin/updateEmployees/<?php echo $data['email']; ?>" method="post">

    <!--id-->
    <div class="form-input-title">Employee Id</div>
    <span class="form-invalid"><?php echo $data['id_err']; ?></span>
    <input type="text" name="id" id="id" class="id" value="<?php echo $data['id']; ?>">

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

		<!--employment DROP DOWN EKK DANNA-->
    <div class="form-input-title">Employment</div>
    <span class="form-invalid"><?php echo $data['employment_err']; ?></span>
    <input type="text" name="employment" id="employment" class="employment" value="<?php echo $data['employment']; ?>">

    <!--
    <input type="text" name="title" placeholder="Title" value="<?php echo $data['title']; ?>">
    <span class="form-invalid"><?php echo $data['title_err']; ?></span>
    <br>
    <textarea type="text" name="body" value="body" placeholder="content" rows="10" cols="64"><?php echo $data['body']; ?></textarea>
    <span class="form-invalid"><?php echo $data['body_err']; ?></span>
    <br>-->
    <input type="submit" value="Update" class="post-btn">
  </form>
</div>

<?php require APPROOT.'/views/include/footer.php'; ?>
