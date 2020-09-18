<div class="news-section">

      <marquee behavior="scroll" scrollamount="5" direction="left" onmouseover="this.setAttribute('scrollamount',0);" onmouseout="this.setAttribute('scrollamount',5);">

        <?php
          $vv1 = "SELECT * FROM `tc_news` ORDER BY id DESC";
          $tt1 = mysqli_query($conn,$vv1);
          while($nn1 = mysqli_fetch_array($tt1))
          { ?>	
      	    <p><a href="#"><img src="images/new-banner.gif" alt=""><?php echo $nn1['tc_news'];?></a></p>
              <?php
					} ?>
        <!--
        <p><a href="http://myerpsoftware.com/updates/OnePlus_Setup.exe"><img src="images/new-banner.gif" alt="">One Plus Latest Update</a></p> 
          
        <p><a href="http://myerpsoftware.com/updates/MandiBook12_setup.exe"><img src="images/new-banner.gif" alt="">Mandi Book Latest Update</a></p>
        -->


      </marquee>
</div>