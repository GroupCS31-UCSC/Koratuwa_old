<?php require APPROOT.'/views/include/header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/users/login.css">

<?php flash('reg_flash'); ?>


<div class="interface">
	<img class="img1" src="<?php echo URLROOT; ?>/img/1.jpg" alt="logo">

	<div class="images">
		<img class="img2" src="<?php echo URLROOT; ?>/img/milk-wave.png" alt="logo">
	</div>


	<!--	<div class="logo">
			<img src="<?php echo URLROOT; ?>/img/koratuwa.png" alt="logo">
		</div> -->

		<div class="form-container">

			<div class="form-header">
				<center><h1>LOGIN</h1></center>
			</div>
			<br>

			<form action="<?php echo URLROOT; ?>/Users/login" method="POST">

				<!--email-->
				<div class="form-input-title">Email</div>
				<input type="text" name="email" id="email" class="email" value="<?php echo $data['email']; ?>">
				<span class="form-invalid"><?php echo $data['email_err']; ?></span>
				<!--password-->
				<div class="form-input-title">Password</div>
				<input type="password" name="password" id="password" class="password" value="<?php echo $data['password']; ?>">
				<span class="form-invalid"><?php echo $data['password_err']; ?></span>

				<br>
				<input type="submit" value="Login" class="form-btn">

			</form>

			<div class="container">
				<input type="button" value="Forgot Password ?" class="btn1" onclick="location.href='<?php echo URLROOT; ?>/Users/login' ">
	    </div>

		</div>



</div>








<?php require APPROOT.'/views/include/footer.php'; ?>
