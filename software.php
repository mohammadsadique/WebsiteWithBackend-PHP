
<!--Service-->
<section id="service" class="services">
<div class="container">
<div class="heading-block">
          <h4>Our <span>Products</span></h4>
		  <p>We Deals in All Kinds of GST Accounting Software's.We Provide Customize Software's as Per Customer Requirements </p>
		</div>




	
		<?php
		

		$vv1 = "SELECT * FROM `tc_product` ORDER BY id DESC";
		$tt1 = mysqli_query($conn,$vv1);
		$count = mysqli_num_rows($tt1);
		$i = 1;
		$mm ='';
		while($nn1 = mysqli_fetch_array($tt1))
		{
			if($i == 1){
				echo '<ul class="row list">';
				//echo $i;
			}
			if($i % 3 == 0){
				$mm = $i+1;
			}
			if($i == $mm){
				echo '<div class="clearfix"></div></ul><ul class="row list">';
				//echo $mm;
			}
?>
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

			
			if($i == $count){
				echo '<div class="clearfix"></div></ul>';
				// echo $i;
			}
			
			
			
			
			$i++;
		} ?>

	

</div>
</section>
	
	<!-- 
		<ul class="row list">
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
			<div class="clearfix"></div>
		</ul>	
		
	-->