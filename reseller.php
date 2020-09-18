<?php include 'head-file.php';
?>

<body>

      <?php include 'header.php';

      if(isset($_POST['submit'])){    
            $name = str_replace("'", "\'", htmlspecialchars($_POST['name']));
            $email = str_replace("'", "\'", htmlspecialchars($_POST['email']));
            $mobile = str_replace("'", "\'", htmlspecialchars($_POST['mobile']));
            $msg1 = htmlspecialchars($_POST['msg']);
            $msg = str_replace("'", "\'", $msg1);

                  $timezone = new DateTimeZone("Asia/Kolkata" );
                  $date = new DateTime();
                  $date->setTimezone($timezone);
                  $date_time = $date->format("M d, Y H:i:s"); 
                  $date = date('Y-m-d');
            //number check digit upto 10
            $mob = strlen($mobile);
            if($mob != 10){
                  $message = 'Incorrect number.'; 
                  echo '<script type="text/javascript">alert("'.$message.'");</script>';   
            } 
            else{ 
                  $b = "INSERT INTO `tc_reseller`( `name`, `email`, `mobile`, `msg`, `date_time`, `date`) VALUES ('$name','$email','$mobile','$msg','$date_time','$date')";
                  mysqli_query($conn,$b);
                  echo "<script>alert('Thank you for apply, we will contact you soon!');</script>";
                  echo "<script>window.location.href='reseller.php';</script>";
            }
      }
?>



      <!-- order -->
      <div class="order-section wow bounceInLeft animated" style="visibility: visible; animation-delay: 0.1s;">
            <div class="container">
                  <div class="order-heading">
                        <h2>Business Proposal For </h2>
                  </div>
                  <div class="main-order">
                        <div class="col-md-3 col-xs-12">
                              <!-- ******1111111****** -->
                              <div class="main-service-inner">
                                    <div class="main-service-icon">
                                          <!-- <i class="fab fa-facebook-f"></i> -->
                                          <img src="images/reseller/1.png">
                                    </div>

                                    <div class="main-service-text">
                                          <h4>Innovative & Enthusiastic IT Entrepreneurs</h4>
                                          <p>Active and enthusiastic entrepreneurs can fully exploit the potentialities
                                                of a coompany available resources.such as Softwares, Technology and
                                                Capital.</p>
                                    </div>
                              </div>

                        </div><!-- col-md-4 -->

                        <div class="col-md-3 col-xs-12">
                              <!-- ******222222****** -->
                              <div class="main-service-inner">
                                    <div class="main-service-icon">
                                          <!-- <i class="fab fa-facebook-f"></i> -->
                                          <img src="images/reseller/2.png">
                                    </div>

                                    <div class="main-service-text">
                                          <h4>Software companies</h4>
                                          <p>Softwares Companies were increase growth in business using these
                                                softwares.TC Provide software for every trade. </p>
                                    </div>
                              </div>

                        </div><!-- col-md-4 -->


                        <div class="col-md-3 col-xs-12">
                              <!-- ******33333****** -->
                              <div class="main-service-inner">
                                    <div class="main-service-icon">
                                          <!-- <i class="fab fa-facebook-f"></i> -->
                                          <img src="images/reseller/3.png">
                                    </div>

                                    <div class="main-service-text">
                                          <h4>Website designers and developers</h4>
                                          <p>Web Developers & Designers are genrate packages of 'website + Accounting
                                                Software' increase own turnover figures.</p>
                                    </div>
                              </div>

                        </div><!-- col-md-4 -->

                        <div class="col-md-3 col-xs-12">
                              <!-- ******33333****** -->
                              <div class="main-service-inner">
                                    <div class="main-service-icon">
                                          <!-- <i class="fab fa-facebook-f"></i> -->
                                          <img src="images/reseller/4.png">
                                    </div>

                                    <div class="main-service-text">
                                          <h4>IT Startups</h4>
                                          <p>Great oppurtunity for those startups who were survived because of their
                                                financial terms & they genrate side income by selling these softwares.
                                          </p>
                                    </div>
                              </div>

                        </div>


                  </div>
            </div>
      </div><!-- /order -->
      <!--  -->


      <div class="reseller-section wow bounceInRight animated" style="visibility: visible; animation-delay: 0.1s;">
            <div class="container">
                  <div class="reseller-heading">
                        <h2>Road Map To Start Your own Software Company </h2>
                  </div>
                  <div class="main-reseller">
                        <div class="col-md-6 col-xs-12">
                              <!-- ******1111111****** -->
                              <div class="main-service-inner">
                                    <div class="main-reseller-icon">
                                          <!-- <i class="fab fa-facebook-f"></i> -->
                                          <img src="images/reseller/programming.png">
                                    </div>

                                    <div class="main-reseller-text">
                                          <h4>No Programming Required </h4>
                                          <p>No need of technical skills for join this programme only determination &
                                                sales skills will increase your income. </p>
                                    </div>
                              </div>

                        </div><!-- col-md-4 -->

                        <div class="col-md-6 col-xs-12">
                              <!-- ******222222****** -->
                              <div class="main-reseller-inner">
                                    <div class="main-reseller-icon">
                                          <!-- <i class="fab fa-facebook-f"></i> -->
                                          <img src="images/reseller/software.png">
                                    </div>

                                    <div class="main-reseller-text">
                                          <h4>No Need to Hire Software Engineer</h4>
                                          <p>Most Important, No need of software Engineer Every Technical Problem will
                                                tackled by Company.</p>
                                    </div>
                              </div>

                        </div><!-- col-md-4 -->
                        <div class="clearfix"></div>




                  </div>


            </div>
      </div>
      </div><!-- /order -->



      <div class="resale-product wow bounceInDown animated" style="visibility: visible; animation-delay: 0.1s;">
            <div class="container">
                  <div class="resale-product-inner">
                        <h2>Resale Our Products on Your own Brand Name</h2>
                        <img src="images/reseller/process.png">
                  </div>
            </div>
      </div>


      <div class="crm-section wow zoomIn animated" style="visibility: visible; animation-delay: 0.1s;">
            <div class="container">
                  <div class="crm-heading">
                        <h2>How to experience Total Control over Your Business</h2>
                  </div>
                  <p>The total system is maintained and controlled at backend by Our partner CRM. Every partner is given
                        a partner code and password of this CRM.</p>
                  <div class="col-md-6 col-xs-12">

                        <p class="crm-head">Partner CRM will help you</p>
                        <p>1) Do Final Verification every software license.</p>
                        <p>2) Manage list of used and unused licenses.</p>
                        <p>3) Manage list of all installations.</p>
                        <p>4) List of clients</p>
                        <p>5) Manage New Installations Asking licenses</p>
                        <p>6) Demo extension authority</p>
                        <p>7) Control Annual Renewal</p>
                        <p>8) Manage software references / leads given by customers</p>
                        <p>9) List of clients need an employee</p>
                        <p>10)List of software installed by your reference partners</p>

                  </div>

                  <div class="col-md-6 col-xs-12">
                        <img class="crm-image" src="images/crm.jpg">
                  </div>


            </div>
      </div>






      <div class="reseller-section wow bounceInRight animated" style="visibility: visible; animation-delay: 0.1s;">
            <div class="container">
                  <div class="reseller-heading">
                        <h2>Apply For Reseller </h2>
                  </div>
                  <div class="main-reseller">
                        <div class="col-md-12 col-xs-12">
                              <div class="main-service-inner">
                                    <div class="main-reseller-text">
                                          <h4>No Programming Required </h4>
                                          <p>No need of technical skills for join this programme only determination &
                                                sales skills will increase your income. </p>
                                    </div>
                                    <div class="main-reseller-icon">
                                          <button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                                                data-target="#overlay">Apply For Reseller</button>
                                    </div>
                              </div>
                        </div>
                        <div class="clearfix"></div>
                  </div>
            </div>
      </div>
      </div>


      <style>
            .modal-title {
                  color: white;
            }
      </style>

      <div class="modal fade mini" id="overlay">
            <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                        <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                              <h4 class="modal-title">APPLY FOR RESELLER</h4>
                        </div>
                        <div class="modal-body">
                              <div class="model-mini">
                                    <form class="form-horizontal" method="post">
                                          <div class="form-group">
                                                <label class="control-label col-sm-3" for="email">Full Name:</label>
                                                <div class="col-sm-9">
                                                      <input type="text" name="name" class="form-control" id="email"
                                                            placeholder="Enter Name">
                                                </div>
                                          </div>
                                          <div class="form-group">
                                                <label class="control-label col-sm-3" for="email">Email:</label>
                                                <div class="col-sm-9">
                                                      <input type="email" name="email" class="form-control" id="email"
                                                            placeholder="Enter Email">
                                                </div>
                                          </div>
                                          <div class="form-group">
                                                <label class="control-label col-sm-3" for="email">Mobile:</label>
                                                <div class="col-sm-9">
                                                      <input type="number" name="mobile" class="form-control" id="email"
                                                            placeholder="Enter Mobile Number">
                                                </div>
                                          </div>
                                          <div class="form-group">
                                                <label class="control-label col-sm-3" for="email">Message:</label>
                                                <div class="col-sm-9">
                                                      <textarea class="form-control" name="msg" rows="5" id="comment"></textarea>
                                                </div>
                                          </div>    
                                          <button type="submit" name="submit" class="btn btn-primary btn-lg">Apply Now</button>
                                    </form>


                              </div>
                        </div>
                  </div>
            </div>
      </div>




      <?php include 'footer.php';
?>