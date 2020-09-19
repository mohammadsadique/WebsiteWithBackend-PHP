
<div class="main-footer">
	<div class="container">
		<div class="row">
<div class="col-md-4 col-xs-12 col-sm-5 col-one">

  <h4 class="quick-link">Address</h4>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Office</a></li>
    <!--<li><a data-toggle="tab" href="#menu1">Moga Office</a></li>-->
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
            <div id="QuickId" class="quick-links">
            		<p class="co-name">Next Step Solutions</p>
                    <p>Address : <?php echo $headerPTQ['address']; ?></p>
                <ul>
                    <li><span class="number-name" style="font-weight: bold;"><?php echo $headerPTQ['name']; ?></span></a></li>
                    <li><a href="tel:+91-79872 78970"><i class="fa fa-phone"></i> +91-<?php echo $headerPTQ['mobile']; ?> <span class="number-name"></span></a></li>
                    <li><a href="mailto:<?php echo $headerPTQ['email']; ?>"><i class="fa fa-envelope"></i><?php echo $headerPTQ['email']; ?>/a> </li>
                    <li><a href="skype:solversoftware?Chat"><i class="fa fa-skype"></i>TC Software</a></li>
                </ul>

            </div>
    </div>
    <!--
    <div id="menu1" class="tab-pane fade">
            <div id="QuickId" class="quick-links">
            		<p class="co-name">Next Step Solutions</p>
                    <p>Address : Street No. 4, New Sodhi Nagar, Zira Road, Moga Pb.(142001) </p>
                <ul>
                    <li><a href="tel:+91-98880-70650"><i class="fa fa-phone"></i> +91-98880-70650 <span class="number-name">(Parminder Singh)</span></a></li>
                    <li><a href="mailto:myerpsoftware1@gmail.com"><i class="fa fa-envelope"></i>myerpsoftware1@gmail.com</a> </li>
                    <li><a href="skype:live:solvermoga?Chat"><i class="fa fa-skype"></i>BUSINESS ERP</a></li>
                </ul>

            </div>
    </div>
    -->

    
  </div>








<!-- <h4 class="quick-link">Address</h4>
  <div id="QuickId" class="quick-links">
    <p>Address 1: Kundan Complex , near easyday , Bathinda Road , Sri Muktsar Sahib (152026)</p>
    <p>Address 2: Near Bus Stand, Zira Road, Moga Pb.(142001) </p>
    <ul>
      <li><a href="tel:+91-99143-70650"><i class="fa fa-phone"></i> +91-99143-70650</a>, <a href="tel:+91-98880-70650">+91-98880-70650</a>,</li>
      <li><a href="mailto:myerpsoftware1@gmail.com"><i class="fa fa-envelope"></i>myerpsoftware1@gmail.com</a> </li>
      <li><a href="skype:solversoftware?Chat"><i class="fa fa-skype"></i>MY ERP</a></li>
    </ul>

  </div> -->




</div>




<div class="col-md-4 col-xs-12 col-sm-3">
<h4 class="general-features">Office Timing</h4>
<ul class="general-features">
    <?php
    $vv1 = "SELECT * FROM `tc_officetime`";
    $tt1 = mysqli_query($conn,$vv1);
    while($nn1 = mysqli_fetch_array($tt1)){
        ?>		
        <li><a href="javascript:void(0)"><?php echo $nn1['tc_news'];?></a></li>
        <?php
	}?>
</ul>
</div>

<div class="col-md-4 col-xs-12 col-sm-3">
<h4 class="social-link">Social Links</h4>
<ul class="social-network social-links">
<li><a href="#index.php" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
<li><a href="#index.php" target="_blank"><i class="fa fa-twitter"></i>Twitter</a></li>
<li><a href="#index.php" target="_blank"><i class="fa fa-linkedin"></i>Linkedin</a></li>
<li><a href="#https://www.youtube.com/channel/UCbnmxY6AQajXMr8yaKEOT5g" target="_blank"><i class="fa fa-youtube-play"></i>Youtube</a></li>

</ul>


</div>
</div>
</div>
</div>




<!-- <div class="policy-section">
	<div class="container">
		<div class="policy-section-main">
			<a href="faq.php">Faq</a>
			<a href="">Privacy Policy</a>
			<a href="">Refund Policy</a>
		</div>
	</div>
</div> -->



<!--Div where the WhatsApp will be rendered-->
<div id="WAButton"></div>



<div class="copy_fotter"> © 2019. All rights reserved. </div>







<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Wow animation -->
<script type="text/javascript" src="js/wow.min.js"></script> 
<script>
new WOW().init();
</script>


<!-- auto counter -->
<script type="text/javascript" src="js/autocounter.js"></script> 

<!-- testimonial -->
<script type="text/javascript" src="js/testimonial.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js'></script>


<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- REVOLUTION SLIDER -->
<script type="text/javascript">

	var revapi;

	jQuery(document).ready(function() {

		   revapi = jQuery('.tp-banner').revolution(
			{
				delay:9000,
				startwidth:1170,
				startheight:500,
				hideThumbs:10,
				fullWidth:"on",
				forceFullWidth:"on"
			});

	});	//ready

</script>

<!-- Header Fixed Js -->
<script src="js/jquery-scrolltofixed.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        $('.header').scrollToFixed();
        // Dock each summary as it arrives just below the docked header, pushing the
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    });
</script>
    <script  src="js/popup.js"></script>



<!-- Scroll Indicator -->
<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}
</script>

<!-- //Scroll Indicator -->


   <!-- WhatsHelp.io widget -->
   <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "+91 7987279870", // WhatsApp number
                sms: "+91 7987279870", // Sms phone number
                call_to_action: "Message us", // Call to action
                button_color: "#932C8B", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "whatsapp,sms", // Order of buttons
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
<!-- /WhatsHelp.io widget -->






    
</body>

</html>