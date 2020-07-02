<?php
  include('functions.php') 

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset your password</title>
</head>
<body>
<div class="header">
	<h2>Password Reset</h2>
</div>
<p>
    


<form method="post" action="reset_password.php">

<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>New Password</label>
		<input type="password" name="newpassword" value="" required>
	</div>
    
    <div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="cpassword" value="" required>
	</div>
    
	<div class="input-group">
		<button type="submit" class="btn" name="resetpass">Update Account</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>