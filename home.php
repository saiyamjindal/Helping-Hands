<?php 
include('functions.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<?php
      include('header.php')
    ?>
	
</head>
<body>
	<div class="header">
		<h2 align="center" style="font-size:50px;">Admin - Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<div class="profile_info">
			

			<div align="center">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong style="font-size:40px;"><?php echo "Welcome, " , $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;font-size:25px;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<button style="background:black;">
						<a href="home.php?logout='1'" style="font-size:25px;">Logout</a></button >
                       &nbsp;<button style="background:black;color:white;font-size:25px;"> <a href="create_user.php"> + Add User</a></buton>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
	<?php
include('footer.php')
?>
</body>
</html>