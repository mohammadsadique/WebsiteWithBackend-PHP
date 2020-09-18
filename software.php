
<!--Service-->
<section id="service" class="services">
<div class="container">
<div class="heading-block">
          <h4>Our <span>Products</span></h4>
		  <p>We Deals in All Kinds of GST Accounting Software's.We Provide Customize Software's as Per Customer Requirements </p>
        </div>
<ul class="row list">

		<?php
		$vv1 = "SELECT * FROM `tc_product` ORDER BY id DESC";
		$tt1 = mysqli_query($conn,$vv1);
		while($nn1 = mysqli_fetch_array($tt1))
		{ ?>	
			<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">
				<article class="thumb"> 
					<a class="button colio-link" href="<?php echo $nn1['link'];?>">
						<i class=""><img src="images/product/<?php echo $nn1['image']; ?>" alt="TCSoftware"> </i>
						<h5><?php echo $nn1['title'];?></h5>
						<p><?php echo $nn1['description'];?></p>
						<span>Download</span>
					</a> 
				</article>
			</li>
			<?php
		} ?>



<!--
<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">    
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/OnePlus_Setup.exe">
<i class=""><img src="images/product/one-plus.png" alt="One Plus"> </i>
<h5>One Plus</h5>
<p>India's First GST Ready Business ERP Software for Supermarkets, Mobile Shops / Computers / Electronics / FMCG Dealers, Retailers / Wholesalers / Manufacturers etc.</p>
<span>Download</span>
</a> 
</article>
</li>

<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">     
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/Timer_Setup.exe">
<i class=""><img src="images/product/timer.png" alt="Timer"> </i>
<h5>Timer</h5>
<p>ERP Software for Jewellery Shops with Stock Management, Girvi management, Tag Printing, Today Rates, Ordering manage, Sale /Purchase , Financial Accounting & more</p>
<span>Download</span>
</a> 
</article>
</li>
<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">       
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/MandiBook12_setup.exe">
<i class=""><img src="images/product/mandi-book.png" alt="Mandi Book"> </i>
<h5>Mandi Book</h5>
<p>E.R.P. Software For Sabzi Mandi Commission Agents with Supplier / Customer Bills, Rate / Weight Adjustment, Stock Management, Accounts, Crates, more.</p>
<span>Download</span>
</a> 
</article>
</li>
<div class="clearfix"></div>


<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">   
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/Medi+Cal_Setup.exe">
<i class=""><img src="images/product/doctor.png" alt="Medi Plus"> </i>
<h5>Medi Plus</h5>
<p>Software esp. For Pharmaceutical Dealers and Distributors (Wholesale and Retail Chemists) with Stock management, Expiry Calculation & much more.</p>
<span>Download</span>
</a> 
</article>
</li>
<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">     
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/WinStar_setup.exe">
<i class=""><img src="images/product/winstar.png" alt="Winstar"> </i>
<h5>Win Star</h5>
<p>Software for Hotels and Restaurants with K.O.T. Management, Table Booking, Room Rent Service, Billing, Stock Management, Production. Very Easy to operate.</p>
<span>Download</span>
</a> 
</article>
</li>
<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">    
<article class="thumb"> 
<a class="button colio-link" href="javascript:void(0)">
<i class=""><img src="images/product/invento.png" alt="Invento"> </i>
<h5>Invento</h5>
<p>E.R.P. Software For Rice Mills, Cotton Mill  to fulfill requirements of Sheller Industries with Customer Bills, Rate / Weight Adjustment & much more.</p>
<span>Download</span>
</a> 
</article>
</li>
<div class="clearfix"></div>

<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">       
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/e%20Store_Setup.exe">
<i class=""><img src="images/product/retail.png" alt="E-store"> </i>
<h5>E-Store</h5>
<p>E-Store Software for Apparels, Footwear, readymade garments retail showrooms to manage their stock Size / Color / Article wise. Barcode printer to print tags.</p>
<span>Download</span>
</a> 
</article>
</li>
<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;"> 
<article class="thumb"> 
<a class="button colio-link" href="javascript:void(0)">
<i class=""><img src="images/product/petrol.png" alt="E-Petro"> </i>
<h5>E-Petro</h5>
<p>Software For Petrol Pump with Stock Management ,Nozzle wise detail ,Meter wise maintenance, Daily Rate register and much more.</p>
<span>Download</span>
</a> 
</article>
</li>

<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">    
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/SmartLab_Setup.exe">
<i class=""><img src="images/product/lab.png" alt="Smart Lab"> </i>
<h5>Smart Lab</h5>
<p>Software For Clinical Labs to maintain record of patients with accurate test reports. Completely customizable with own Tests and formulations.</p>
<span>Download</span>
</a> 
</article>
</li>
<div class="clearfix"></div>
<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">     
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/EduPlus_Setup.exe">
<i class=""><img src="images/product/student.png" alt="Institute One"> </i>
<h5>Edu Plus</h5>
<p>Software for Institute to handle Daily Inquiries and student records, Fees collection / Accounting Management, Admission with Photo. </p>
<span>Download</span>
</a> 	
</article>
</li>
<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">     
<article class="thumb"> 
<a class="button colio-link" href="javascript:void(0)">
<i class=""><img src="images/product/milkman.png" alt="Milk Man"> </i>
<h5>Milk Man</h5>
<p>Software esp. for Milk Dairies. Collect FAT, SNF automatically from Eko milk analyzer machine and much more.</p>
<span>Coming Soon</span>
</a> 
</article>
</li>

<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/MySchool_Setup.exe">
<i class=""><img src="images/product/edu-one.png" alt="My School"> </i>
<h5>My School</h5>
<p>ERP Software for Schools & Colleges to handle Enquiry, Admission, Fee Management, Library, Attendance, Time Table, Certificates, ID Card, Reminder Letters, Demand Register, more</p>
<span>Download</span>
</a> 
</article>
</li>

<div class="clearfix"></div>

<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">        
<article class="thumb"> 
<a class="button colio-link" href="http://www.myerpsoftware.com/updates/Smart_Clinic_Setup.exe">
<i class=""><img src="images/product/smartclinic.png" alt="Smart Clinic"> </i>
<h5>Smart Clinic</h5>
<p>E.R.P. Software For Hospitals with IPD, OPD, Billing, Accounting, Medicine Stock, Inventory Stock,Advance Payment & Balance Facility.</p>
<span>Download</span>
</a> 
</article>
</li>

<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">   
<article class="thumb"> 
<a class="button colio-link" href="javascript:void(0)">
<i class=""><img src="images/product/book.png" alt="My Library"> </i>
<h5>My Library</h5>
<p>Library Management System for Schools and Colleges to manage their books records, Library Card, Automatic fine calculation with audit reports. Very Simple to maintain.</p>
<span>Download</span>
</a> 
</article>
</li>
<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">      
<article class="thumb"> 
<a class="button colio-link" href="javascript:void(0)">
<i class=""><img src="images/product/cold.png" alt="Cold Plus"> </i>
<h5>Cold Plus</h5>
<p>Cold Stores Management Software to track customer's stock Lot No. / Rack Wise. Record Material Inward / Outward challans, Stock Shifting From One Rack to another etc.</p>
<span>Download</span>
</a> 
</article>
</li>
<div class="clearfix"></div>




<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">
<article class="thumb"> 
<a class="button colio-link" href="http://myerpsoftware.com/updates/Sigma_Setup.exe">
<i class=""><img src="images/product/rupee.png" alt="Sigma"> </i>
<h5>Sigma</h5>
<p>Sigma Software for Non Banking Finance Companies to maintain customer and hypothecated Vehicle records & more</p>
<span>Download</span>
</a> 
</article>
</li>

<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;"> 
<article class="thumb"> 
		<a class="button colio-link" href="http://myerpsoftware.com/updates/OnePro_Setup.exe">
<i class=""><img src="images/product/one-pro.png" alt="One Pro"> </i>
<h5>One Pro</h5>
<p>Software For GST Billing with Sale Report, Auto Backup, Outstanding Report, Ledger, SMS Templates & much more.</p>
<span>Download</span>
</a> 

</article>
</li>

<li class="col-md-4 wow bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">
	<article class="thumb"> 
		<a class="button colio-link" href="javascript:void(0)">
			<i class=""><img src="images/product/app.png" alt="Edu Plus"> </i>
			<h5>My Bizz <span class="app">( Android App )</span> </h5>
			<p>Now See your Outstanding & Ledger on Single click in your Mobile</p>
			<span>Download</span>
		</a> 
	</article>
</li>

-->

<div class="clearfix"></div>
<!--  -->

</ul>

</div>
</section>
