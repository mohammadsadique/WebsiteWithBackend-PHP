
<?php include 'head-file.php';
?>

<body>

<?php include 'header.php';
?>




<div class="middle_section">
<div class="container">
<div class="row">

    <?php
    $vv1 = "SELECT * FROM `tc_services` ORDER BY id DESC";
    $tt1 = mysqli_query($conn,$vv1);
    while($nn1 = mysqli_fetch_array($tt1)){
        ?>		
        <div class="col-md-4 col-sm-4 col-xs-12 wow  bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">
            <div class="one_third">
                <a href="javascript:;"><img src="images/services/<?php echo $nn1['image']; ?>" alt="" class="TC">
                <h3><i><?php echo $nn1['title'];?></i></h3></a>
                <p><?php echo $nn1['description'];?></p>
            </div>
        </div>
        <?php
	}?>

</div>
</div>
</div>



<div class="middle_section service-bottom-main">
<div class="container">
<div class="row wow bounceInLeft animated"style="visibility: visible; animation-delay: 0.1s;">
<div class="col-md-3 col-sm-3 col-xs-12 wow rotateInDownLeft animated"style="visibility: visible; animation-delay: 0.1s;">
    <div class="one_third service-bottom">
        <a href="javascript:;">
        <i class="fa fa-cogs"></i>
        <h3>Fast Deployment</h3></a>
        <p>We deliver consistent value and build customer loyalty to become the most preferred business solution provider.</p>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12 wow rotateInDownLeft animated"style="visibility: visible; animation-delay: 0.1s;">
    <div class="one_third service-bottom">
        <a href="javascript:;">
        <i class="fa fa-refresh"></i>
        <h3>Easy Customisation</h3></a>
        <p>We provide quality services for our customers so that they can achieve their business objectives.</p>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12 wow rotateInDownLeft animated"style="visibility: visible; animation-delay: 0.1s;">
    <div class="one_third service-bottom">
        <a href="javascript:;">
        <i class="fa fa-cog"></i>
        <h3>Awesome Features</h3></a>
        <p>Latest Frameworks, Documented Development are the signs for road to success used by our Architects.</p>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-12 wow rotateInDownLeft animated"style="visibility: visible; animation-delay: 0.1s;">
    <div class="one_third service-bottom">
        <a href="javascript:;">
        <i class="fa fa-check"></i>
        <h3>Extremely Flexible</h3></a>
        <p>Simple, User Friendly, Minimalistic coding, Responsive and Super Fast are the lines on which we create designs</p>
    </div>
</div>
</div>
</div>
</div>

    


<?php include 'footer.php';
?>

