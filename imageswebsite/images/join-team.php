<?php include('mis/miscon.php'); ?>

<?php


$s=1;

$targetpage = "join-team.php"; 	
							$limit = 20; 
							$dated=date('Y-m-d');
							$query = "SELECT COUNT(*) as num FROM tbl_common";
							$total_pages = mysql_fetch_array(mysql_query($query));
							$total_pages = $total_pages[num];
							
							$stages = 3;
							$page = mysql_escape_string($_GET['page']);
							if($page){
								$start = ($page - 1) * $limit; 
							}else{
								$start = 0;	
								}	

							$query1 = "SELECT * FROM tbl_common LIMIT $start, $limit";
							$result = mysql_query($query1);	


?>

<?php
if($_POST['submitvalue'])
{
	

 $name=$_POST['name'];
 $sqls="select * from  tbl_common  where name='$name'";
$result = mysql_query($sqls);	
}

?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Helping Hand India NGO</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<style>
.paginate {
font-family:Arial, Helvetica, sans-serif;
	padding: 3px;
	margin: 3px;
}

.paginate a {
	padding:2px 5px 2px 5px;
	margin:2px;
	border:1px solid #eeeeee;
	text-decoration:none;
	background-color:#FFF;
	float:left;
	 
	 
}

.paginate span{float:left; margin-top:5px;}
.paginate span:nth-child(2){margin-top:0;}


.paginate a:hover, .paginate a:active {
	border: 1px solid #eeeeee;
	color: #000;
}
.paginate span.current {
    margin: 2px;
	padding: 2px 5px 2px 5px;
		border: 1px solid #eeeeee;
		
		 
		background-color: #000;
		color: #FFF;
	}
	.paginate span.disabled {
		padding:2px 5px 2px 5px;
		margin:2px;
		border:1px solid #eee;
		color:#DDD;
	}
	
		
	
</style>
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">

       
        <div class="header-upper">
        <?php include('top_header.php'); ?>
        </div>
		
		
	<section class="variable slider">
   <?php include('slider.php'); ?>
  </section>

        <!--Header-Lower-->
        <div class="header-lower">

        	<div class="auto-container">
            	<div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <?php include('menu1.php') ?>

                	

                </div>
            </div>
        </div>


        <!--Sticky Header-->
        <div class="sticky-header">
        	<div class="auto-container clearfix">
            	<!--Logo-->
            	<div class="logo pull-left">
                	<a href="#" class="img-responsive"><img src="images/logo-2.png" alt="#"></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                	<!-- Main Menu -->
                 <?php include('menu1.php'); ?>
                </div>

            </div>
        </div><!--End Bounce In Header-->

    </header>
    <!--End Main Header -->
 	
    <!--Main Slider-->
    <section>
	<div class="slide-pad">
	<div class="main-slider">
 <?php include('banner.php'); ?>
		</div>
		
		
		
	<div class="right-coll">
	<?php include('thanksgoogle.php'); ?>
	</div>
		
    </section>
    
    <!--welcome section start-->
   
    <!--welcome section end-->

    <!--Default Section start-->
    	
	
	<section>
	<div class="slide-pad tab-main">
	<script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }
    </script>
	<div class="left-coll">
	<div class="tab tab-left">
 <button class="tablinks" onclick="openCity(event, 'join-team')">JOIN OUR TEAM</button>
  <button class="tablinks" onclick="openCity(event, 'corporate-social')">CORPORATE SOCIAL RESPONSIBILITY</button>
  <button class="tablinks" onclick="openCity(event, 'institutional')">INSTITUTIONAL PARTNERSHIPS</button>
  <button class="tablinks" onclick="openCity(event, 'partner')">PARTNER AND AWARDS</button>
  <button class="tablinks" onclick="openCity(event, 'volunteers-s')">VOLUNTEERS SUPPORT</button>
  <button class="tablinks" onclick="openCity(event, 'welcome-v')">WELCOME VISITORS</button>
   <button class="tablinks" onclick="openCity(event, 'careers')">CAREERS</button>
    <button class="tablinks" onclick="openCity(event, 'press-newsletter')">PRESS NEWSLETTER</button>
</div>

<div class="tab-right">
<div id="join-team" class="tabcontent active">
  <h3 class="main-head">JOIN OUR TEAM</h3>
  <div class="join-fo">
  <div class="form-m">
  <form method="post">
  <input type="text" name="name" placeholder="Enter Name"/>
 
  <!--<input type="text" name="amount" placeholder="Amount"/>-->
  <input type="submit" name="submitvalue" value="Search"/>
  </form>
  </div>
  <div class="form-table">
  <table>
  <tr>
  <th>S. No.</th>
  <th>Name</th>
  <th>Location</th>

  <th>Amount</th>
  <th>Date</th>
  </tr>

<?php

while($row=mysql_fetch_array($result))
{


?>
 
 <tr>
  <td><?php echo $s ; ?></td>
  <td>	<?php echo $row['name'] ?></td>

  <td>	<?php echo $row['location'] ?></td>
  <td>	<?php echo $row['donation'] ?></td>
  <td><?php echo $row['date'] ?></td>
  </tr>
<?php 
$s++;
 } ?>
  </table>
  </div>
  

<div class=""><?php include('paging.php') ;	?>


</div>
  </div>
</div>

<div id="corporate-social" class="tabcontent">
  <h3 class="main-head">CORPORATE SOCIAL RESPONSIBILITY</h3>
  <p>Helping hand india NGO is always looking for Corporate & Social Partnership for their valuable support, their Helping Hand and their funding support to achieve our goal. As part of our Action, We are working on Child Education, Health, Empowering Women, Rural Development and Art & Culture. Helping hand india NGO NGO’s work is not possible without the support of funding from individuals, corporations, Business Houses, institutions, foundations and government agencies and your contribution can greatly help us in bringing phenomenal changes for betterment of our organization. Many corporate are fulfilling their CSR initiatives and showing their support by sponsoring events as helping hand and create awareness which showcasing the corporate positive approach towards good causes. Real and long-lasting change can only be achieved in when all of us come together involvement. Corporate Social Responsibility is the continuous commitment of a corporate body to improve community well being through discretionary business practices and ethical contributions of corporate resources. CSR initiatives facilitate corporate to build a dominant brand that reverberates with customers, employees, government and general public with positive impact. We appeals to all corporate to extend your support to our projects and help us serving the society. All Donations to us will be Exempted from TAX U/S 80-G OF INCOME TAX ACT 1961. Donations can be made through cheques/ drafts and direct bank transfer to: Helping hand india NGO, Payable at Delhi.</p>


<b>Benefits to Corporate:</b> 

<ul>
  <li>* Eligible for Tax Exemption u/s 80G of Income Tax Act.</li>
  <li>* Open Monitoring for donors.</li>
  <li>* Customize projects/advertising as per the need of the Donor Company.</li>
  <li>* No minimum or maximum size of Donation. You may support us by any amount.</li>
  <li>* All Documentation Support provided like Balance Sheet, Registration Certificate, etc.</li>
  <li>* Advertisement/Promotions of your company on our Social Media Platforms and website. </li>
  </ul>
  
  <p>If you are interested to become our corporate partner, Please contact/write us and give us an chance to work with your esteemed organization. Info@helpinghandindiango.org</p>
</div>

<div id="institutional" class="tabcontent ">
  <h3 class="main-head">INSTITUTIONAL PARTNERSHIPS</h3>
  <p>Helping hand india NGO always willing to establishes partnerships and builds networks with national and international institutions. Partnership initiatives facilitate them to build a dominant brand that reverberates with customers, employees, government and general public with positive impact. We appeals to all partners to extend your support to our projects and help us serving the society. All Donations to us will be Exempted from TAX U/S 80-G OF INCOME TAX ACT 1961. Donations can be made through cheques/ drafts and direct bank transfer to: Helping hand india NGO, Payable at Delhi.</p>
 </div>
 
 <div id="partner" class="tabcontent ">
  <h3 class="main-head">PARTNER AND AWARDS</h3>
  <p>Coming soon...</p>
 </div>
 


 
 <div id="volunteers-s" class="tabcontent ">
  <h3 class="main-head">VOLUNTEERS SUPPORT</h3>
  <p>Helping hand india NGO welcomes dedicated volunteer members, young or old, to come and volunteer to reach out to more and more needy people. Both in normal times and in times of crucial needs, volunteers have an active role to play. Professionals or students, the retired or the serving, all can help in carrying out running Programs and other works. We are always looking for individuals/professionals who are high performers in their respective fields and who are able to work to their full potential, who are passionate about improving the lives of children, women and old age people to help out as we need a diverse range of talents and skill for volunteer support. If you are interested in supporting us in the equally critical areas of fundraising, administration, finance and logistics , you are welcome and that would be better to go ahead. Please send email to volunteer@helpinghandindiango.org
</p>
<p>Thank you for your interest in volunteering.</p>
  
 </div>
 
 <div id="welcome-v" class="tabcontent ">
  <h3 class="main-head">WELCOME VISITORS</h3>
  <p>Helping hand india NGO warm welcomes & encourages visitors to visit the projects running by us. You can plan/schedule your visit any time and see our workings, </p>
  <p></p>
  <a href="#">info@helpinghandindiango.org</a>

 </div>
 
 <div id="careers" class="tabcontent">
  <h3 class="main-head">CAREERS</h3>
  <p>Helping hand india NGO is looking for hardworking and professional people. We are a national level organization and looking staff for all over India. We value experience and talent. If you want to join and contribute ngos, we will be happy to hear from you.</p>
  
  <p><b>Based at:-</b> Delhi (Head Office) </p>
  <p><b>Qualification:-</b> Should be Graduate in Commerce stream  </p>
  
  <p>Office Administration / Minimum 3 years’ experience in hard core accounting / processing</p>
  <p>payments and booking of expenses / Submitting TDS, Service Tax / should be computer savvy and</p>
  <p>demonstrate an ability to take initiative.</p>
  <p>Candidates who have prior experience of working with NGOs will be given preference. Interested candidates should send their resume to:
  <a href="#">hr@helpinghandindiango.org</a>
  </p>
  
 </div>
 
  <div id="press-newsletter" class="tabcontent">
  <h3 class="main-head">PRESS NEWSLETTER</h3>
  <p>Coming soon..</p>
  
 </div>
</div>
<div class="clear"></div>
</div>
</div>
		
    </section>
    
    <!--Default Section end-->


    <!--service Section start-->
    <section class="service-section-1">
        <?php include('bottum_slider.php'); ?>
    </section>
    <!--service Section end-->
   





    <!--Main Footer-->
    <footer class="main-footer">

      <?php include('footer.php'); ?>

    </footer>
    <!--Main Footer end-->


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


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
<script type="text/javascript">
    $(document).on('ready', function() {
	$(".variable").slick({
        
        infinite: true,
        variableWidth: true,
		autoplay:true
      });
	  });
	  </script>
</body>


</html>
