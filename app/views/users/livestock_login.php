<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>/public/css/users/login.css">	
	<title>Login page</title>
</head>
<body>
	<?php flash('reg_flash'); ?>
	<div class="container">
        <div class="column-1">
            <img src="<?php echo URLROOT; ?>/public/img/koratuwa.png" alt="logo" alt="">
        </div>

        <div class="column-2" >
			<div class="center">
				<h1>Login</h1><br>
			<form action="<?php echo URLROOT; ?>/Users/login" method="POST">
				<!-- Email -->
				<div class="text-field">
					<h5><label for="email">Email: <sup>*</sup></label></h5>
					<input type="text" name="email" id="email" class="email" value="<?php echo $data['email']; ?>" placeholder="Enter Email Address">
				</div>
				<div class="error">
					<span class="form-invalid"><?php echo $data['email_err']; ?></span><br>
                </div>

				<!-- password -->
                <div class="text-field">
                    <h5><label for="password">Password: <sup>*</sup></label></h5>
                    <input type="password" name="password" id="password" class="password" value="<?php echo $data['password']; ?>" placeholder="Enter password">
				</div>
				<div class="error">
					<span class="form-invalid"><?php echo $data['password_err']; ?></span>
		        </div><br>
				
				<!-- submit -->
				<input type="submit" class="btn" value="Login">
				<div class="reminder">
					<!-- forgot password -->
					<a href="#">Forgot Password?</a>
					<!-- register -->
					<!-- <a href="#">Don't have an account? Register</a> -->
				</div>
            </form>
			</div>
		</div>
    </div>
</body>
</html>