<?php include 'head-file.php';?>


<body onload="loadermyFunction()">
<!--
<div class="call-button wow bounceInLeft animated animated" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInLeft;">
  <a href="#call.php"><img src="images/call.png"></a>
</div>
-->

<?php include 'header.php';?>
<?php include 'news.php';?>

<!-- <?php include 'whatsapp.php';?> --> 

<!-- <?php include 'social-button.php';?> -->

<!--Slider_Section-->
<section id="hero_section" class="top_cont_outer">
<div class="container_full">
    
<div class="tp-banner-container">
<div class="tp-banner" >
<ul>
	<?php
	$vv1 = "SELECT * FROM `tc_banner` ORDER BY id DESC";
	$tt1 = mysqli_query($conn,$vv1);
	while($nn1 = mysqli_fetch_array($tt1))
	{ ?>		
		<li data-transition="fade" data-slotamount="7" data-masterspeed="100" >
			<img src="images/sliders/<?php echo $nn1['image']; ?>" alt="<?php echo $nn1['altname'];?>"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" background="(126, 140, 152) none repeat scroll 0% 0%)">
		</li>
		<?php
	}?>

<!--


<li data-transition="fade" data-slotamount="7" data-masterspeed="100" >
<img src="images/sliders/app2.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" background="(126, 140, 152) none repeat scroll 0% 0%)">
</li>

<li data-transition="fade" data-slotamount="7" data-masterspeed="100" >
<img src="images/sliders/slider1.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" background="(126, 140, 152) none repeat scroll 0% 0%)">
</li>
<li data-transition="fade" data-slotamount="7" data-masterspeed="100" >
<img class="img-responsive" src="images/sliders/slider2.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
</li>
<li data-transition="fade" data-slotamount="7" data-masterspeed="100" >
<img src="images/sliders/slider3.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
</li>
<li data-transition="fade" data-slotamount="7" data-masterspeed="100" >
<img src="images/sliders/slider4.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
</li>
      -->

</ul>
<div class="tp-bannertimer"></div>
</div>
</div>

</div>  
</section>


<?php 
    include 'gst-feature.php';
?>

<?php 
	include 'software.php';
?>


<div class="short-section">
	<div class="container">
        <div class="col-md-9">
            <div class="short-image">
                <img src="images/bulbs.png">
            </div>
            <div class="short-text">

                <p>Inventory & Accounting Software</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="let-meet">
                <a  href="">Let's Meet</a>    
            </div>
            
        </div>
    </div>
</div>



<!-- choose Section Section ---->
<section class="choose-sec">
<div class="container">
<div class="row">
<div class="heading-block text-center">
<h4 class="text-center">GST Software <span> Features</span></h4>
</div>
			<div class="col-md 4 col-sm-4 ">
				<div class="choose-box hvr-wobble-vertical ">
					<div class="choose-img"><img src="images/choose/choose-box-01.png" alt=""></div>
					<div class="choose-text">
						<h4>Auto Backup</h4>
						<p>Save Backup in Financial year wise, Monthwise, Daywise & Direct Email.</p>
					</div>
				</div>
			<div class="choose-box hvr-wobble-vertical">
					<div class="choose-img"><img src="images/choose/choose-box-02.png" alt=""></div>
					<div class="choose-text">
						<h4 class="yllo-color">Send Bill on Whatsapp</h4>
						<p>You Can Share Bills & Reports on Whatsapp with-in Single Click.</p>
					</div>
			</div>
			<div class="choose-box hvr-wobble-vertical">
					<div class="choose-img"><img src="images/choose/choose-box-06.png" alt=""></div>
					<div class="choose-text">
						<h4 class="yllo-color">Cheque Printing</h4>
						<p>Our ERP Software provide facilty to Print Cheque Directly from
					 software.</p>
					</div>
			</div>
			</div>
    

    <div class="col-md 4 col-sm-4  text-center ani-up animate fadeInUp">
		<div class="choose-main">
            <img src="images/choose/why-choose.png">
        </div>
    </div>

	<div class="col-sm-4 ani-rgt animate fadeInRight">
					<div class="choose-box hvr-wobble-vertical">
						<div class="choose-img"><img src="images/choose/choose-box-03.png" alt=""></div>
					<div class="choose-text">
						<h4 class="blu-color">SMS Plugin</h4>
						<p>Create your Own SMS Templates, Reminder etc.</p>
					</div>
					</div>
			<div class="choose-box hvr-wobble-vertical ">
				<div class="choose-img"><img src="images/choose/choose-box-04.png" alt=""></div>
				<div class="choose-text ">
						<h4 class="grn-color">E-Way Bill</h4>
						<p>Easily Generate JSON file & Get your E-way Bill.</p>
				</div>
			</div>
			<div class="choose-box hvr-wobble-vertical ">
				<div class="choose-img"><img src="images/choose/choose-box-05.png" alt=""></div>
				<div class="choose-text ">
					<h4 class="grn-color">Import Data From Excel</h4>
					<p>Easily Import & Export Data in any Format (.pdf, .xls, .doc, .mdb etc.)</p>
				</div>
			</div>
	</div>
</div>
</div>

</section>




<div class="modal fade mini" id="overlay">
  	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<div class="model-mini">
					<img src="images/apply.jpg">
					<a href="icici.php">Read More</a>
				</div>
			</div>
		</div>	
  	</div>
</div>



<?php include 'footer.php';?>

<?php //include 'tawk.php';?>
