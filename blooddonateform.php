<?php

$db = mysqli_connect('localhost', 'root', '', 'bloodform');
    
    if(isset($_POST['submit'])){
        $name   =  $_POST['name'];
	$venue  =  $_POST['venue'];
	$email  =  $_POST['email'];
    $phone  =  $_POST['phone'];
    $city   =  $_POST['city'];
	$donornumber  =  $_POST['donornumber'];
	$student  =  $_POST['student'];
    $date  =  $_POST['date'];
    $textareavalue  =  trim($_POST['content']);


        $sql="insert into donateblood (name,venue,email,phone,city,donornumber,student,date,comments) 
              values('$name','$venue','$email','$phone','$city','$donornumber','$student','$date','$textareavalue')";
        $query=mysqli_query($db,$sql);
        $affectedRows=mysqli_affected_rows($db);
        if($affectedRows == 1){
            $successMsg = "Thank you for hosting a blood donation camp. Will contact you shortly.";

        }
    }


?>



<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Helping Hand India NGO</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/styleform.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">

</head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134682612-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134682612-1');
</script>

<!-- Event snippet for helpinghand conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-862801099/3OoxCN-jnJgBEMuZtZsD',
      'transaction_id': ''
  });
</script>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <!--<div class="preloader"></div>-->
        <!-- Main Header-->
        <header class="main-header">

            <div class="header-upper">


                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-outer">
                            <div class="logo"><a href="index.php"><img src="images/final1.png" alt="" title=""></a></div>


                        </div>

                        <div class="pull-right upper-right clearfix">
                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <a class="donate-b" href="donation-form.php">Donate Now</a>
                                <div class="social-l">
                                    <a href="https://www.facebook.com/Helpinghandindiango/" target="blank"><i class="icon-facebook-f"></i></a>
                                    <a href="https://twitter.com/helpinghandngos" target="blank"><i class="icon-twitter"></i></a>
                                    <a href="https://www.youtube.com/channel/UCH5AxLVSHmvBYu4Ca1bvgGA?view_as=subscriber" target="blank"><i class="icon-youtube"></i></a>
                                    <a href="https://www.linkedin.com/in/helpinghandindiango/" target="blank"><i class="icon-linkedin"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                </div>
                                <div class="contact-d">
                                    <a href="#">Contact No :-  <i class="icon-phone"></i>9990773454, 9873677291 </a>
                                    <a href="#"><i class="icon-envelope"></i> office@helpinghandindiango.org </a>
                                </div>
                                <div class="tex">
                                    <p style="margin-bottom:0;">(*Your donations are eligible for tax benefit under section 80G)</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Header-Lower-->
            <div class="header-lower">

                <div class="auto-container">
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="helpinghand.php">Home</a></li>
                                    <li class="dropdown">
                                        <a href="about-us.php">About Us</a>
                                        <ul>
                                            <li><a href="about-us.php">Helping hand india NGO</a></li>
                                            <li><a href="history.php">Our History</a></li>
                                            <li><a href="vision.php">Vision / Mision</a></li>
                                            <li><a href="board.php">Board Members</a></li>
                                            <li><a href="legal.php">legal Status</a></li>
                                            <li><a href="our-product.php">Our Products</a></li>
                                            <li><a href="gallery.php">Photo Gallery</a></li>
                                            <li><a href="faq.php">FAQ'S</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Our Workings</a>
                                        <ul>
                                            <li><a href="halping-hand.php">Helping Hand</a></li>
                                            <li><a href="what-we-do.php">What we do</a></li>
                                            <li><a href="education.php">Education is Strength</a></li>
                                            <li><a href="women-e.php">Women Empowerment</a></li>
                                            <li><a href="Sainath-dada-dadi's-old-age-home.php">Old Age Home</a></li>
                                            <li><a href="health-p.php">Health Programs</a></li>
                                            <li class="dropdown">
                                                <a href="halping-hand.php">Child Care</a>
                                                <ul>
                                                    <li><a href="childlabour.php">Stop Child Labour</a></li>
                                                    <li><a href="new_history.php">Child Patient Care</a></li>
                                                    <li><a href="child-c.php">Child Care School</a></li>
                                                </ul>

                                            </li>

                                            <li><a href="sponsorship-p.php">Sponsorship Programme</a></li>
                                            <li><a href="work.php">Work From Home</a></li>
                                        </ul>

                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Blood Donation</a>
                                        <ul>
                                            <li><a href="host-a.php">Host A Blood Donation Camp</a></li>
                                            <li><a href="blood-s.php">Blood Support</a></li>
                                            <li><a href="donate-blood.php">Donate Blood</a></li>
                                            <li><a href="sponsor-us.php">Sponsor Us</a></li>
                                            <li><a href="blood-faq.php">Blood Faq/Facts</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Projects 'n' Goal</a>
                                        <ul>
                                            <li><a href="t-girl.php">Techie Girl</a></li>
                                            <li><a href="women.php">Women Education</a></li>
                                            <li><a href="sanitary-pads.php">Free Sanitary Pads Distribution for poor Women</a></li>
                                            <li><a href="clean-i.php">Clean India</a></li>
                                            <li><a href="20-bed.php">20 Bed Free Medical Services</a></li>
                                            <li><a href="narayan-blind-home.php"> Narayan Blind's Home and Vocational Training</a></li>
                                            <li><a href="Sainath-dada-dadi's-old-age-home.php">Sainath Dada Dadi's Old Age Home</a></li>
                                            <li><a href="monthly-camps.php">Monthly Camps in Rural Areas</a></li>
                                            <li><a href="charitable.php">Charitable Public School</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Get Involved</a>
                                        <ul>
                                        <li><a href="register.php">Register</a></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="review.php">Review</a></li>
                                            <li><a href="join-team.php">Join Our Team</a></li>
                                            <li><a href="corporate-social.php">Corporate Social Responsibility</a></li>
                                            <li><a href="institutional.php">Institutional partnerships</a></li>
                                            <li><a href="partner.php">Partner and Awards</a></li>
                                            <li><a href="registration.php">Registration/Volunteer</a></li>
                                            <li><a href="welcome-v.php">Welcome Visitors</a></li>
                                            <li><a href="careers.php">Careers</a></li>
                                            <li><a href="press-newsletter.php">Press/Newsletter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="donationcoupon.php">Donation Coupon</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->


                    </div>
                </div>
            </div>


            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="#" class="img-responsive"><img src="images/logo.png" alt="#"></a>

                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="index.php">Home</a></li>
                                    <li class="dropdown">
                                        <a href="about-us.php">About Us</a>
                                        <ul>
                                            <li><a href="about-us.php">Helping hand india NGO</a></li>
                                            <li><a href="history.php">Our History</a></li>
                                            <li><a href="vision.php">Vision / Mision</a></li>
                                            <li><a href="board.php">Board Members</a></li>
                                            <li><a href="legal.php">legal Status</a></li>
                                            <li><a href="our-product.php">Our Products</a></li>
                                            <li><a href="gallery.php">Photo Gallery</a></li>
                                            <li><a href="faq.php">FAQ'S</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Our Workings</a>
                                        <ul>
                                            <li><a href="halping-hand.php">Helping Hand</a></li>
                                            <li><a href="what-we-do.php">What we do</a></li>
                                            <li><a href="education.php">Education is Strength</a></li>
                                            <li><a href="women-e.php">Women Empowerment</a></li>
                                            <li><a href="Sainath-dada-dadi's-old-age-home.php">Old Age Home</a></li>
                                            <li><a href="health-p.php">Health Programs</a></li>
                                            <li class="dropdown">
                                                <a href="halping-hand.php">Child Care</a>
                                                <ul>
                                                    <li><a href="childlabour.php">Stop Child Labour</a></li>
                                                    <li><a href="new_history.php">Child Patient Care</a></li>
                                                    <li><a href="child-c.php">Child Care School</a></li>
                                                </ul>

                                            </li>

                                            <li><a href="sponsorship-p.php">Sponsorship Programme</a></li>
                                            <li><a href="work.php">Work From Home</a></li>
                                        </ul>

                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Blood Donation</a>
                                        <ul>
                                            <li><a href="host-a.php">Host A Blood Donation Camp</a></li>
                                            <li><a href="blood-s.php">Blood Support</a></li>
                                            <li><a href="donate-blood.php">Donate Blood</a></li>
                                            <li><a href="sponsor-us.php">Sponsor Us</a></li>
                                            <li><a href="blood-faq.php">Blood Faq/Facts</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Projects 'n' Goal</a>
                                        <ul>
                                            <li><a href="t-girl.php">Techie Girl</a></li>
                                            <li><a href="women.php">Women Education</a></li>
                                            <li><a href="sanitary-pads.php">Free Sanitary Pads Distribution for poor Women</a></li>
                                            <li><a href="clean-i.php">Clean India</a></li>
                                            <li><a href="20-bed.php">20 Bed Free Medical Services</a></li>
                                            <li><a href="narayan-blind-home.php"> Narayan Blind's Home and Vocational Training</a></li>
                                            <li><a href="Sainath-dada-dadi's-old-age-home.php">Sainath Dada Dadi's Old Age Home</a></li>
                                            <li><a href="monthly-camps.php">Monthly Camps in Rural Areas</a></li>
                                            <li><a href="charitable.php">Charitable Public School</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">Get Involved</a>
                                        <ul>

                                        <li><a href="register.php">Register</a></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="review.php">Review</a></li>
                                            <li><a href="join-team.php">Join Our Team</a></li>
                                            <li><a href="corporate-social.php">Corporate Social Responsibility</a></li>
                                            <li><a href="institutional.php">Institutional partnerships</a></li>
                                            <li><a href="partner.php">Partner and Awards</a></li>
                                            <li><a href="registration.php">Registration/Volunteer</a></li>
                                            <li><a href="welcome-v.php">Welcome Visitors</a></li>
                                            <li><a href="careers.php">Careers</a></li>
                                            <li><a href="press-newsletter.php">Press/Newsletter</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="donationcoupon.php">Donation Coupon</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div><!--End Bounce In Header-->

        </header>
        <br>
        <span class="form-title">
            Create Blood Donation Camp
        </span><br />
        <div class="container">
            <?php
            if(isset($successMsg)){
                print_r($successMsg);
            }
            ?>
            <form method="post" action="blooddonateform.php" id="blood_donation">


                <section>


                    <ul>
                        <br />
                        <li><label>Name <span class="red">*</span> </label><br><input type="text" name="name" placeholder="Name" required></li>
                        <br />
                        <li><label>Venue <span class="red"></span> </label><br><input type="text" name="venue" placeholder="venue"></li>
                        <br />
                        <li><label>Email ID <span class="red">*</span> </label><br><input type="text" name="email" placeholder="Email ID" required></li>
                        <br />
                        <li><label>Phone <span class="red">*</span> </label><br><input type="tel" name="phone" placeholder="Phone" pattern="[0-9]{10}" maxlength="10" required></li>
                        <br />
                        <li><label>City/Region <span class="red">*</span> </label><br><input type="text" name="city" placeholder="City" required></li>
                        <br />
                        <li><label>Estimated number of Donors <span class="red">*</span></label><br><input type="number" name="donornumber" required></li>
                        <br />
                        <li><label>Employee/Student/People Strength </label><br><input type="text" name="student"></li>
                        <br />
                        <li><label>Date <span class="red">*</span></label><br><input type="date" name="date" placeholder="Date(DD/MM/YYYY)" required></li>
                        <br />
                        <li><label>Additional Comments </label><br><textarea placeholder="Message" name="content"></textarea></li>

                        <input type="submit" name="submit" value="Submit" class="btn-sub-fm">
                    </ul>
                </section>
            </form>






        </div>

        <br><br>
        <!--Main Footer-->
        <footer class="main-footer">

            <script type="text/javascript">
                var onloadCallback = function () {
                    grecaptcha.render('html_element', {
                        'sitekey': '6LevqJwUAAAAABFwDA4FKC22qfbIWHb-0DwZdJW-'
                    });
                };
            </script>

            <div class="widgets-section">


                <div class="auto-container">
                    <div class="row clearfix">
                        <!--Big Column-->
                        <div class="big-column col-md-12 col-sm-12 col-xs-12">

                            <!--Footer Column-->
                            <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                                <div class="footer-widget about-widget">
                                    <div class="footer-logo"><a href="#"><img src="images/LOGO4.png" alt=""></a></div>
                                    <div class="footer-logo"><a href="#"><img src="images/final1.png" alt=""></a></div>


                                    <div class="widget-content">
                                        <div class="text"> Helping Hand India NGO is an Indian not-for-profit organisation working for Women Education through different programs.</div>
                                        <ul class="contact-info">
                                            <li><span class="icon-address"></span> A6, Nishat Park, Kakrola, Near Dwarka Mor Metro Station, New delhi –110078</li>
                                            <li><span class="icon-envelope"></span> office@helpinghandindiango.org</li>
                                            <li><span class="icon-phone"></span> +91-9990773454, 9873677291</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                                <div class="footer-widget links-widget">
                                    <h2>Menu</h2>
                                    <div class="widget-content">
                                        <ul class="list">
                                            <li><a href="index-php">Home</a></li>
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="halping-hand.php">Our Workings</a></li>
                                            <li><a href="blood-s.php">Blood Support</a></li>
                                            <li><a href="t-girl.php">Techie Girl</a></li>
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <!--Big Column-->
                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                                <div class="footer-widget subscribe-widget">

                                    <div class="widget-content">


                                        <div class="text">Get latest news and updates</div>

                                        <div class="social-links">
                                            <ul class="clearfix">
                                                <li><a href="https://www.facebook.com/Helpinghandindiango/" target="blank"><span class="icon-facebook-f"></span>  Facebook</a></li>
                                                <li><a href="https://twitter.com/helpinghandngos" target="blank"><span class="icon-twitter"></span>  Twitter</a></li>
                                                <li><a href="https://www.youtube.com/channel/UCH5AxLVSHmvBYu4Ca1bvgGA?view_as=subscriber" target="blank"><span class="icon-youtube"></span> Youtube</a></li>
                                                <li><a href="https://www.linkedin.com/in/helpinghandindiango/" target="blank"><span class="icon-linkedin"></span> Linkedin</a></li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="text subf-left"> &copy; <a target="_blank" href="https://www.developingsuccess.org/best-results-of-upsc-and-ias-coaching-in-uttam-nagar.php">Helping Hand India NGO. All Rights Reserved.</a></div>
                    <div class="subf-right">
                        <ul>
                            <li><a href="disclimer.php">Disclaimer</a></li>
                            <li><a href="refund.php">Refund and Cancellation Policy</a></li>
                            <li><a href="privesy-p.php">Privacy Policy</a></li>
                        </ul>
                    </div><div class="clear"></div>
                </div>
            </div>



            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
                $("#frm_notify").on('submit', (function (e) {

                    var response = grecaptcha.getResponse();
                    if (response.length == 0) {
                        $('#captchamsg').html("Please verify captcha before sumbit");

                        $("#captchamsg").css("color", "red");
                        return false;
                    } else {
                        //$("#btnsubmit_login").html("Processing...");
                        document.getElementById("btnsubmit_login").value = "Processing...";
                        $("#btnsubmit_login").attr("disabled", true);
                        $.ajax({
                            url: "http://helpinghandindiango.org/ajax-request.php",
                            type: "post",
                            data: $("#frm_notify").serialize(),
                            success: function (result) {

                                //alert(result);
                                if (result == 1) {
                                    $("#frm_notify").trigger('reset'); //jquery
                                    document.getElementById("frm_notify").reset();
                                    $("#captchamsg").css("display", "none");
                                    $('#successmsg').removeClass("errmsg");
                                    $("#successmsg").css("color", "green");
                                    $('#successmsg').html("Thank You! We will contact you shortly.");
                                    document.getElementById("btnsubmit_login").value = "Submit";
                                    setTimeout(function () { $(".chetbody").css("display", "none"); }, 2000);

                                } else {
                                    $('#successmsg').addClass("errmsg");
                                    $(".errmsg").css("color", "red");
                                    $('#successmsg').html("Please check entries before submit.");
                                    document.getElementById("btnsubmit_login").value = "Submit";
                                    $("#btnsubmit_login").attr("disabled", false);
                                }

                                //location.href = "http://www.lhpskillnet.ie/notify-me-confirmation/"+result;
                            }
                        });
                    }
                    e.preventDefault();
                }));
            </script>
            ?>

        </footer>
        <!--Main Footer end-->


    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/revolution.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>
    <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/YouTubePopUp.jquery.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">

        $(function () {
            jQuery("a.vid1,a.vid2,a.vid3,a.vid4,a.vid5,a.vid6,a.vid7,a.vid8,a.vid9").YouTubePopUp();
            // jQuery("a.vid2").YouTubePopUp( { autoplay: 0 } ); // Disable autoplay
        });


        // 	setTimeout(function(){
        //         $(".chetform").animate({bottom:0,opacity:1},2000);

        // 	},5000)


        $(document).on('ready', function () {
            $(".variable").slick({

                infinite: true,
                variableWidth: true,
                autoplay: true
            });

            window.__lc = window.__lc || {};
            window.__lc.license = 10631617;
            (function () {
                var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;

                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
            })();

        });

        var pomabody = document.getElementsByClassName("popboxbody")
        var backpel = document.getElementsByClassName("backpanel");
        var pobox = document.getElementsByClassName("popupbox");
        var settofun = setTimeout(function () {
            pomabody[0].style = "display:none;";
            backpel[0].style = "display:none;";
            pobox[0].style = "display:none;";
        }, 4000);

        document.getElementsByClassName("closebtn")[0].addEventListener("click", function () {
            pomabody[0].style = "display:none;";
            backpel[0].style = "display:none;";
            pobox[0].style = "display:none;";
        })
    </script>

</body>
</html>