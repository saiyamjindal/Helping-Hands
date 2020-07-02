<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Admin Create user</title>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/regmain.css">
        <link rel="stylesheet" href="css/regutil.css">
</head>
<body>
	
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>
		<div class="imgcontainer">
                <img src="images/hero_3.jpg" alt="Avatar" class="avatar">
			</div>
			<div class="container">
                <span class="login100-form-title p-b-59">
                    Create User
				</span>
				
		
				<div class="wrap-input100 validate-input" data-validate="Username is required">
				<span class="label-input100">Username</span>
			<input class="input100" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
</div>
		

<div class="wrap-input100 validate-input" data-validate="Email is required">
<span class="label-input100">Email</span>
			<input class="input100" type="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
</div>
		
<div class="wrap-input100 validate-input" data-validate="DOB is required">
<span class="label-input100">DOB</span>
			<input class="input100" type="date" name="DOB" value="<?php echo $DOB; ?>">
</div>


<div class="wrap-input100 validate-input" data-validate="Usertype is required">
<span class="label-input100">User type</span>
			<select name="user_type" id="user_type" >
				
				<option value="admin">Admin</option>
				<option value="user">User</option>
			</select>
</div>
		

<div class="wrap-input100 validate-input" data-validate="Password is required">
<span class="label-input100">Password</span>
			<input class="input100" type="password" name="password_1" placeholder="Password">
</div>
		

<div class="wrap-input100 validate-input" data-validate="Confirm Password">
<span class="label-input100">Confirm password</span>
			<input class="input100" type="password" name="password_2" placeholder="Repeat Password">
</div>
		

<div class="container-login100-form-btn" >
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
			</div>
                </div>
		

	</form>
</body>
</html>