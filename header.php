


<!-- Loading -->
<!--
<div id="loading"></div>

<script>
        var preloader = document.getElementById("loading");
         window.addEventListener('load', function(){
          preloader.style.display = 'none';
          })

        function loadermyFunction(){
            preloader.style.display = 'none';
        };
</script>

 <style type="text/css">
    #loading{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: #fff
    url('http://localhost/myerpsoftware/images/loader.gif')no-repeat center center;   
    z-index: 99999;
    background-size: 25%;
    }
</style> -->

<!--// Loading -->

<div class="iso">
	<img src="images/iso.png">
</div>


<!--Header_section-->
<div class="top_header">
<div class="container">
<div class="pull-left">
<div class="phone_number">
<a class="iso-text" href=""><i><img src="images/iso1.png"></i><span>ISO 9001:2015 CERTIFIED Company</span>&nbsp;</a>
<a href="tel:<?php echo $headerPTQ['phone']; ?>"><i><img src="images/phone_icon.png"></i><span><?php echo $headerPTQ['phone']; ?></span>&nbsp;</a>
<a href="tel:<?php echo $headerPTQ['mobile']; ?>"><i><img src="images/phone_icon.png"></i><span>+91-<?php echo $headerPTQ['mobile']; ?></span>&nbsp;</a>
</div>

</div>
<div class="pull-right">
<div class="blog_dev_sales">
<ul>

<!-- <li>
<a href="map.php"><i><img src=""></i><span>Partner with us</span></a>     
</li> -->


<li>
<a href="mailto:<?php echo $headerPTQ['email']; ?>"><i><img src="images/email_icon05.png"></i><span><?php echo $headerPTQ['email']; ?></span></a>		  
</li>  

<li>
<a href="skype:solversoftware?Call"><i><img src="images/skype_icon.png"></i><span> TC Software</span></a> 
<div class="call_chat_box">
<a href="skype:solversoftware?Call">Call</a>
<a href="skype:solversoftware?Chat">Chat</a>
</div>
</li> 

</ul>
</div>
</div>
	   
</div>
</div>
<header id="header_wrapper" class="header">
<div class="container">
<div class="header_box">
<div class="logo">
	<a href="index.php"><img src="images/<?php echo $headerPTQ['logo']; ?>" alt=""/></a>         


</div>

<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
<button type="button" id="nav-toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
</div>


<div id="main-nav" class="navbar-collapse navStyle collapse">
<ul class="nav navbar-nav" id="mainNav">
<li class=""><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="service.php">Services</a></li>
<li><a href="tutorial.php">Tutorial Point</a></li>
<li><a href="reseller.php">Reseller</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="support.php">Support</a></li>
<li><a class="career" href="applyforjob.php" target="_blank">APPLY FOR JOB</a></li>
<li><a href="admin/index.php" target="_blank">Login</a></li>

</ul>
</div>

</nav>
</div>
</div>
<div class="progress-bar" id="myBar"></div>
</header>


