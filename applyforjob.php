<?php include('admin/dbconnect.php');        
    if(isset($_POST['submit'])){    
        $name = str_replace("'", "\'", htmlspecialchars($_POST['name']));
        $email = str_replace("'", "\'", htmlspecialchars($_POST['email']));
        $mobile = str_replace("'", "\'", htmlspecialchars($_POST['mobile']));
        $msg = str_replace("'", "\'", htmlspecialchars($_POST['msg']));

        $pic = $_FILES['picture']['name'];
            $picT = time().'_'.$_FILES['picture']['name'];
        $resume = $_FILES['resume']['name'];
            $resumeT = time().'_'.$_FILES['resume']['name'];
            
            $timezone = new DateTimeZone("Asia/Kolkata" );
            $date = new DateTime();
            $date->setTimezone($timezone);
            $date_time = $date->format("M d, Y H:i:s"); 
            $date = date('Y-m-d');

        if($pic != '' && $resume != ''){
            //number check digit upto 10
            $mob = strlen($mobile);
            //check file size here
            $picture_size = $_FILES['picture']['size'];
            $resume_size = $_FILES['resume']['size'];
            //check file type here
            $picture_type = $_FILES['picture']['type'];
            $resume_type = $_FILES['resume']['type'];
            if (($picture_size > 2097152 && $resume_size > 2097152)){      
                $message = 'File too large. File must be less than 2 MB.'; 
                echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
            }
            elseif (  
                ($picture_type != "image/jpeg") &&
                ($picture_type != "image/jpg") &&
                ($picture_type != "image/png") 
            ){
                $message = 'Invalid file type. Only JPG, JPEG and PNG types are accepted for picture. '; 
                echo '<script type="text/javascript">alert("'.$message.'");</script>';         
            }
            elseif (  
                ($resume_type != "image/jpeg") &&
                ($resume_type != "image/jpg") &&
                ($resume_type != "application/pdf")
            ){
                $message = 'Invalid file type. Only JPG, JPEG and PDF type are accepted for resume.'; 
                echo '<script type="text/javascript">alert("'.$message.'");</script>';         
            }
            elseif($mob != 10){
                $message = 'Incorrect number.'; 
                echo '<script type="text/javascript">alert("'.$message.'");</script>';   
            }
            else{
                move_uploaded_file($_FILES['picture']['tmp_name'],'job/'.$picT);
                move_uploaded_file($_FILES['resume']['tmp_name'],'job/'.$resumeT);
                $b = "INSERT INTO `tc_applyforjob`( `name`, `email`, `mobile`, `msg`, `picture`, `resume`, `date_time`, `date`) VALUES ('$name','$email','$mobile','$msg','$picT','$resumeT','$date_time','$date')";
                mysqli_query($conn,$b);
                echo "<script>alert('Thank you for apply, we will contact you soon!');</script>";
                echo "<script>window.location.href='applyforjob.php';</script>";
            }
        }
        else{
            echo "<script>alert('All fields are required!');</script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TC Software</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" type="image/ico" href="images/small-logo.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .alert-success {
        color: #333333;
        background-color: #fff;
        border-color: #d6e9c6;
        border-radius: 10px;
    }
    .contact100-form-title {
        display: block;
        width: 100%;
        font-family: Montserrat-Black;
        font-size: 39px;
        color: #333333;
        line-height: 1.2;
        text-align: center;
        padding-bottom: 59px;
        font-weight: bold;
    }
    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
        font-size: 19px;
    }
  </style>
</head>
<body>

  <div class="jumbotron">
  <div class="container">
    <div class="alert alert-success">
        <h2 class="contact100-form-title">Apply For Job</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="usr">Full Name:</label>
                        <input type="text" class="form-control input-lg" name="name" placeholder="Full Name" required>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="usr">Email:</label>
                        <input type="email" class="form-control input-lg" name="email" placeholder="Email" required>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="usr">Mobile Number:</label>
                        <input type="number" class="form-control input-lg" name="mobile" placeholder="Mobile Number" pattern="\d{3}[\-]\d{3}[\-]\d{4}" required>
                    </div>  
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">Message:</label>
                        <textarea name="msg" class="form-control input-lg" rows="5" id="comment" placeholder="Type Message...." required></textarea>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Upload You Picture</label>
                        <input type="file" class="form-control input-lg" name="picture" required>
                    </div>  
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Upload You Resume</label>
                        <input type="file" class="form-control input-lg" name="resume" required>
                    </div>  
                </div>
                <div class="col-md-12" style=""><br>
                    <p><strong>Note:</strong></p>
                    <p>* File must be less than 2 MB.</p>
                    <p>* Only JPG, JPEG and PNG types are accepted for picture.</p>                   
                    <p>* Only JPG, JPEG and PDF type are accepted for resume.</p>                   
                </div>
                <div class="col-md-12"><hr></div>                
                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">APPLY FOR JOB</button>
                <div>
            </div>
        </form>
    </div>
  
</div>

</body>
</html>
