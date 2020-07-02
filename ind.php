<?php 
    include('functions.php');
    if (!isLoggedIn()) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ,maximum-scale=1.0, user-scalable=0">

    <title>Helping Hand India NGO</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/responsive.css" rel="stylesheet">

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">

    <link rel="stylesheet" href="css/aos.css">



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
                                    <li>
						<a href="ind.php?logout='1'">logout</a>
                                    </li>
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
                                            <li><a href="blooddonateform.php">Blood Donation Camp Form</a></li>
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
									<li>
						<a href="ind.php?logout='1'">logout</a>
                                    </li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div><!--End Bounce In Header-->

        </header>

		<?php if (isset($_SESSION['success'])) : ?>
			
			<h3 align="center">
				<?php 
					echo $_SESSION['success']; 
					unset($_SESSION['success']);
				?>
			</h3>
		
	<?php endif ?>
	<!-- logged in user information -->
	
			<?php  if (isset($_SESSION['user'])) : ?>
				<div align="center">
				<strong style="font-size:40px;" ><?php echo "Welcome, ", $_SESSION['user']['username']; ?></strong>

			
					<i  style="color: #888;font-size:20px;" align="center">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> </div>
					<br>
					<?php endif ?>

        <!--Main Slider-->
        <section>
            <div class="slide-pad">
                <div class="main-slider">
                    <div class="tp-banner-container">
                        <div class="tp-banner">
                            <ul>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-1.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-1.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption sft sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-2.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-2.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption sfl sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-3.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-3.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption sfr sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-4.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-4.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption sfr sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-5.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-5.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption sfr sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-6.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-6.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption sfr sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-7.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-7.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption sfr sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-8.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-8.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption sfr sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-9.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-9.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <div class="tp-caption sfr sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>

                                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/slide-10.jpg" data-saveperformance="off" data-title="Awesome Title Here">
                                    <img src="images/main-slider/slide-10.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                                    <p>hellp</p>
                                    <div class="tp-caption sfr sfb tp-resizeme"
                                         data-x="left" data-hoffset="15"
                                         data-y="center" data-voffset="-30"
                                         data-speed="1500"
                                         data-start="500"
                                         data-easing="easeOutExpo"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.3"
                                         data-endspeed="1200"
                                         data-endeasing="Power4.easeIn">

                                    </div>

                                </li>


                            </ul>

                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                </div>




                <div class="right-coll" style="background:navy">
                    <h4 style="margin-top:0px; padding:10px"><span>Thanks To <p style="color:deepskyblue; font-size: 25px;margin-left:2px; margin-bottom:0;">G</p><p style="color:yellow;margin-bottom:0;font-size: 25px;">o</p><p style="color:orange;margin-bottom:0; font-size: 25px;">o</p><p style="color:deepskyblue;font-size: 25px;margin-bottom:0;">g</p><p style="color:green;font-size: 25px;margin-bottom:0;">l</p><p style="color:yellow;font-size: 25px;margin-bottom:0;">e</p><h3>NEWS / UPCOMING EVENTS</h3></h4></span>


                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;height:99px;background: navy;">



                        <!-- Wrapper for slides -->

                        <div class="carousel-inner" style="background:navy">



                            <div class="item active">

                                <img src="images/Blooddonation.jpg" style="height:82px;width:116px">

                                <span style="float:right;background-color:transparent;padding-right:10px;margin-top:2px;color:white;position: relative;display: inline-block;text-transform: uppercase;color: white;font-size: 18px;font-weight: bold;margin-top:-78px; text-align:center ">Blood Donation Camp<br><h5 class="hide1" style="color:#d7e241;font-size: 17px;margin-top:1px; text-align:center">31 May 2019 / Delhi </h5><hr></span>

                            </div>


                        </div>



                        <!-- Left and right controls -->


                    </div>



                    <ul class="" style="background:navy">

                        <li>

                            <img src="images/forSaiNatholdage.jpg" style="height:82px;width:116px;">

                            <h4 style="color: white;width:211px;font-size:20px;float: right;background-color: transparent;text-shadow:0px 0px 1px red"> Sainath Dada Dadi's Old Age Home</h4>


                        </li>



                        <li>
                            <img src="images/narayan_blind-home.jpg" style="height:82px;width:116px">

                            <a href="narayan-blind-home.php"><h4 style="color: white;font-size:20px;width:211px;float: right;background-color: transparent;text-shadow:0px 0px 1px red">Narayan Blind's Home and Vocational Training</h4></a>
                        </li>



                        <li>
                            <img src="images/forBlind.jpg" style="height:89px;width:116px;">

                            <a href="t-girl.php"><h4 style="color: white;width:211px;float: right;font-size:20px;background-color: transparent;text-shadow:0px 0px 1px red">Techie Girl - Free Computer Education for Women</h4></a>

                        </li>




                    </ul>

                </div><div class="clear"></div>
            </div>

        </section>

        <div class="py-5 bg-primary upcoming-events">
            <div class="container">
                <span class="caption1 mb-3 bg-warning px-4">Recent News</span>
                <div class="row align-items-center">

                    <marquee width="100%" direction="up" scrollamount="1" >
                        <span class="caption">
                            <p>
                                Next Blood Donation Camp is scheduled in Dehradun Polytechnic College.
                                <br><br />
                                We are going to start Free Computer Education for Girls at Paschim Vihar.
                                <br><br />
                                Sai Manav Sewa Old Age home will open near Uttam Nagar, New Delhi.
                                <br><br />
                                Dental Care camp date & venue will be updated very soon.
                                <br><br />

                            </p>


                        </span>

                    </marquee>
                </div>
            </div>

        </div><br>
        <section class="variable slider">
            <div>
                <p style="text-align:center;"><img src="images/img2.jpg" style="width:75% "></p>
            </div>


        </section>
        <div class="site-section">
            <div class="container">
                <div class="row" >
                    <div class="col-md-6 mx-auto text-center mb-5 section-heading" >
                        <h2 class="mb-5" style="font-size:30px;padding-top:10px;color:darkblue">Our NGO Works</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="church-service text-center">
                            <a href="#" class="d-block mb-3 thumbnail"><img src="images/blood_donation.jpg" alt="Image" class="img-fluid"></a>
                            <h3 class="heading mb-3" ><a href="#"style="color:red">Host a Blood Donation Camp</a></h3>
                            <p>We appreciate for your initiative for this noble cause and we are always here to help you to organize a successful blood donation camp.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="church-service text-center">
                            <a href="#" class="d-block mb-3 thumbnail"><img src="images/comp.jpg" alt="Image" class="img-fluid"></a>
                            <h3 class="heading mb-3"><a href="#" style="color:red">Free Computer Education for Women</a></h3>
                            <p>Computer education and English language training can make a big difference to employmentseeking girls and can grow their chances of finding dignified jobs.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="church-service text-center">
                            <a href="#" class="d-block mb-3 thumbnail"><img src="images/old-age.jpg" alt="Image" class="img-fluid"></a>
                            <h3 class="heading mb-3"><a href="#" style="color:red">Old Age Home</a></h3>
                            <p>Helping Hand India NGO is proud to announce that we are planning our own Old Age Home for neglected destitute elderly persons of hundred inmates, where elderly people.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light" >
            <div class="container " style="background:whitesmoke">
                <div class="row align-items-center" style="background:whitesmoke">
                    <div class="col-md-6 mb-5 mb-md-0" style="background:whitesmoke">

                        <div class="img-border ">

                            <img src="images/about_us.jpg" alt="" class="img-fluid">
                            
                        </div>

                    </div>
                    <div class="col-md-5 ml-auto" >

                        <h2 class="h2 mb-0" style="font-size:20px;color:black;text-decoration:underline;font-weight:bold">About Us</h2>


                        <p class="mb-4">Helping hand india NGO is Non Profit Organization and it has been working in India for over a decade, focusing on child education and specially empowerment of women and girls for their basic education and technical/vocational education, so that they can stand themselves</p>
                    </div>
                </div>
            </div>
        </div>
        <!--gallery-->
        <div class="container">
            <div class="sec-title" style=" text-decoration: underline;font-weight: 100;font-size: 2.5rem;">

                <h2 class="text-center" style="color:darkblue">GALLERY</h2><br>
            </div>
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <img src="images/galleryy1.jpg" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <img src="images/galleryy2.jpg" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <img src="images/galleryy3.jpg" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <img src="images/galleryy4.jpg" class="img-thumbnail">
                </div>

                <div class="col-lg-3 col-sm-6">
                    <img src="images/galleryy6.jpg" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <img src="images/galleryy7.jpg" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <img src="images/galleryy8.jpg" class="img-thumbnail">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <img src="images/galleryy9.jpg" class="img-thumbnail">
                </div>
            </div>
        </div><br>


        <!-- Video  -->


        <div class="site-section block-15">
            <div class="container">
                <div class="row" style="background:whitesmoke">
                    <div class="col-md-6 mx-auto text-center mb-5 section-heading" style="background:whitesmoke">
                        <h2 style="font-size:30px;padding-top:10px;color:darkblue">Videos</h2>
                    </div>
                </div>


                <div class="nonloop-block-15 owl-carousel" style="background:whitesmoke">


                    <div class="media-with-text" >
                        <div class="img-border-sm mb-4">
                            <iframe height="315"
                                    src="https://www.youtube.com/embed/Urnq_WZg7FU">
                            </iframe>
                        </div>
                        <h2 class="heading mb-0"><a href="#">Narayan Blind Home-Delhi</a></h2>


                    </div>

                    <div class="media-with-text">
                        <div class="img-border-sm mb-4">
                            <iframe height="315"
                                    src="https://www.youtube.com/embed/kB9fUJCwJIA">
                            </iframe>
                        </div>
                        <h2 class="heading mb-0"><a href="#">Sainath Dadadadi Oldage home</a></h2>

                    </div>

                    <div class="media-with-text">
                        <div class="img-border-sm mb-4">
                            <iframe height="315"
                                    src="https://www.youtube.com/embed/GuLKxYv0KSA">
                            </iframe>
                        </div>
                        <h2 class="heading mb-0"><a href="#">Blood Donation Camp</a></h2>

                    </div>

                    <div class="media-with-text">
                        <div class="img-border-sm mb-4">
                            <iframe height="315"
                                    src="https://www.youtube.com/embed/PLAG4ot601o">
                            </iframe>
                        </div>
                        <h2 class="heading mb-0"><a href="#">English Classes for Visual Impaired</a></h2>

                    </div>

                    <div class="media-with-text">
                        <div class="img-border-sm mb-4">
                            <iframe height="315"
                                    src="https://www.youtube.com/embed/64darTtn0v0">
                            </iframe>
                        </div>
                        <h2 class="heading mb-0"><a href="#">Music Classes</a></h2>

                    </div>



                </div>

                <div class="row">

                </div>
            </div>
        </div>


        <section class="variable slider">
            <div>
                <p style="text-align:center;"><img src="images/img3.jpg" style="width:75% "></p>
            </div>


        </section>

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
                                        <div class="text" style="font-size:15px"> Helping Hand India NGO is an Indian not-for-profit organisation working for Women Education through different programs.</div>
                                        <ul class="contact-info">
                                            <li style="font-size:13px"><span class="icon-address" ></span> A6, Nishat Park, Kakrola, Near Dwarka Mor Metro Station, New delhi –110078</li>
                                            <li style="font-size:13px"><span class="icon-envelope" ></span> office@helpinghandindiango.org</li>
                                            <li style="font-size:13px"><span class="icon-phone" ></span> +91-9990773454, 9873677291</li>
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


                                        <div class="text" style="font-size:15px">Get latest news and updates</div>

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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>


    <script src="js/mediaelement-and-player.min.js"></script>

    <script src="js/main.js"></script>
    <script type="text/javascript">

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

