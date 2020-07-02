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
