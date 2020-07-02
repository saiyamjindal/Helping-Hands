<?php
 include('functions.php') 
 ?>
    
    <!DOCTYPE html>

    <html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
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
        <title>Register</title>
    </head>
    <body>

        <form action="register.php" method="post">
            <?php echo display_error(); ?>
            <div class="imgcontainer">
                <img src="images/hero_3.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <span class="login100-form-title p-b-59">
                    Register
                </span>

                <div class="wrap-input100 validate-input" data-validate="Username is required">
                    <span class="label-input100">Username</span>
                    <input class="input100" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Date of Birth is required">
                    <span class="label-input100">Date Of Birth</span>
                    <input class="input100" type="date" name="DOB" value="<?php echo $DOB; ?>" placeholder="date of birth...">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" value="<?php echo $email; ?>" placeholder="Email addess...">
                    <span class="focus-input100"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password_1" placeholder="Password...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
                    <span class="label-input100">Repeat Password</span>
                    <input class="input100" type="password" name="password_2" placeholder="Password...">
                    <span class="focus-input100"></span>
                </div>

                
                <div class="container-login100-form-btn" >
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" name="register_btn">
                            Register
                        </button>
                    </div>
                </div>

            </br>
                    <p style="font-size:25px;">Already a member ? <a href="login.php" style="font-size:25px;">Sign in</a></p>
                    

            </div>
        </form>
      


    </body>
</html>