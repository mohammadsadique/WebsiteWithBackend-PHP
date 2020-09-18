
<?php include 'head-file.php';
?>

<body>

<?php include 'header.php';
?>


<div class="middle_section">
<div class="container">
<div class="row">
	<?php
		$vv1 = "SELECT * FROM `tc_support` ORDER BY id DESC";
		$tt1 = mysqli_query($conn,$vv1);
		while($nn1 = mysqli_fetch_array($tt1)){
	?>	
		<div class="col-md-3 col-sm-6 col-xs-12 wow bounceInLeft animated"style="visibility: visible; animation-delay: 0.1s;">
			<div class="support-inner">
				<a href="<?php echo $nn1['link'];?>">
					<h3><?php echo $nn1['title'];?></h3>
					<img src="images/support/<?php echo $nn1['image']; ?>">
					<span>Download</span> 
				</a>
			</div>
		</div>
		<?php
	}?>

		<!--

		<div class="col-md-3 col-sm-6 col-xs-12 wow bounceInLeft animated"style="visibility: visible; animation-delay: 0.1s;">
			<div class="support-inner">
				<a href="https://drive.google.com/file/d/1rnYsNZfSg1S7QN73Q67LDfMefw1ZVKxT/view">
					<h3>Crystal Reports</h3>
					<img src="images/support/crystal.png">
					<span>Download</span> 
				</a>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 col-xs-12 wow bounceInRight animated"style="visibility: visible; animation-delay: 0.1s;">
			<div class="support-inner">
				<a href="https://download.anydesk.com/AnyDesk.exe?_ga=2.148086903.1721157905.1559201294-2079944494.1558095346">
					<h3>AnyDesk</h3>
					<img src="images/support/anydesk.png">
					<span>Download</span> 
				</a>
			</div>
		</div>

		<div class="col-md-3 col-sm-6 col-xs-12 wow bounceInRight animated"style="visibility: visible; animation-delay: 0.1s;">
			<div class="support-inner">
				<a href="https://www.teamviewer.com/en/teamviewer-automatic-download/">
					<h3>Team Viewer</h3>
					<img src="images/support/team-viewer.png">
					<span>Download</span> 
				</a>
			</div>
		</div>


		-->
</div>
</div>
</div>




<?php include 'footer.php';
?>

