<?php include('functions.php') ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    
    <title>login</title>
</head>

<body style="background-color: #666666;">
    <div class="abc">
        <div class="limiter">
            <div class="container-login">
                <div class="wrap-login">
                    <form class="login-form validate-form" method="post" action="login.php" >
                        
                        <span class="login-form-title p-b-43">
                            Login to continue
                        </span>
</br>
                        <?php echo display_error(); ?>
                        <div class="wrap-input validate-input" data-validate="Valid username is required">
                            <input class="input" type="text" placeholder="Username" name="username">


                        </div>


                        <div class="wrap-input validate-input" data-validate="Password is required">
                            <input class="input" type="password" name="password" placeholder="Password">


                        </div>

                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                            <div class="contact-form-checkbox">
                               

                                
                                    Not yet a member? <a href="register.php">Sign up</a>
                               
                            </div>

                            <div>
                                <a href="recover_email.php">Forgot Password ?</a>
                            </div>
                        </div>


                        <div class="container-login-form-btn">
                            <button class="login-form-btn" name="login_btn">
                                Login
                            </button>
                        </div>


                    </form>

                    <div class="login-more" style="background-image: url('images/hero_1.jpg');">
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>
</html>