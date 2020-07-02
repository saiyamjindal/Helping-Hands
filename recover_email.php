<?php
 include('functions.php') 
 ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
    background-image:url('/images/backlogin5.jpg');

background-repeat:no-repeat;

background-size:cover;
}
form {border: 3px solid #f1f1f1; }

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div style="padding-left: 35% ; padding-top: 10%; ">

<form  method="POST" action="login.php" style="width: 40%; border-color: #01b0d1;">
  <?php echo display_error(); ?>
  <div class="imgcontainer">
    <img src="images/logo1.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">

    <label for="email"><b>Email</b></label>
    <input type="text" id="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required>
        
    <button type="submit" name="submit" onclick="alert('Your Password has been sent to your Email address')">Send Mail</button>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </div>


</form>

</div>
</body>
</html>
