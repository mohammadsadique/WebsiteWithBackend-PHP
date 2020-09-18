
<?php include 'head-file.php';
?>

<body>

<?php include 'header.php';
?>




<div class="middle_section">
<div class="container">
    <div class="row">


        <?php
        $vv1 = "SELECT * FROM `tc_tutorial` ORDER BY id DESC";
        $tt1 = mysqli_query($conn,$vv1);
        $i = 1;
        while($nn1 = mysqli_fetch_array($tt1)){
            ?>		
            <div class="col-md-4 col-sm-4 col-xs-12 wow  bounceIn animated"style="visibility: visible; animation-delay: 0.1s;">
                <div class="one_third">
                    <iframe width="" height="" src="<?php echo $nn1['link'];?>"></iframe>
                </div>
            </div>
            <?php
		}?>


    </div>
</div>
</div>

    


<?php include 'footer.php';
?>

