<?php session_start(); include('../dbconnect.php'); require('../customfunction/function.php');
if(!empty($_SESSION['user_id'])){}
else
{
	header('location:../login.php');
}
?>
<?php
	$tt = "SELECT * FROM `login` WHERE `user_id` = '$_SESSION[user_id]'";
	$ee = mysqli_query($conn,$tt);
	$qq = mysqli_fetch_array($ee);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" type="image/ico" href="../../images/small-logo.png" />
		<title>TC Software</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
		<link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
		<link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="../plugins/iCheck/all.css">
		<link rel="stylesheet" href="../plugins/select2/select2.min.css">
		<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
		<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
		<link rel="stylesheet" href="../multiselect/dist/css/bootstrap-multiselect.css" type="text/css"/>
		<link href="../sweetalert2/sweetalert.css" rel="stylesheet" />
		<link rel="icon" type="image/png" href="img/durga logo.png">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
			li_bgclr {
				background-color:rgba(243, 174, 18, 0.56);
			}
		</style>
	</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<header class="main-header">
		<a href="" class="logo">
			<span class="logo-mini"><b>TC</b></span>
			<span class="logo-lg" style="font-size: 90%;"><b>TC Software</b></span>
		</a>
		<nav class="navbar navbar-static-top">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<ul class="nav navbar-nav" style="margin-top: 3px;font-size: 26px;color: white;">
				<li class="user-header">
					<div class="pull-left">
						<a href="#" style="color: white;font-weight: bold;"> <?php if($_SESSION['id'] == '1'){echo 'Admin Panel :- ';}else{ echo 'Advisor Panel :- '; } ?></a>
					</div>
					<div class="pull-right">
						<a href="#" style="color: #f4f4f4;margin-left: 9px;font-style: oblique;"><?php echo $qq['name'];?></a>
					</div>
				</li>
			</ul>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="../img/<?php if($qq['img'] !=''){ echo $qq['img']; }else{ echo 'img_not_delete/dummy.png';}?>" class="user-image" >
							<span class="hidden-xs"><?php echo $_SESSION['user_id']; ?></span>
						</a>
						<ul class="dropdown-menu">
							<li class="user-header">
								<img src="../img/<?php if($qq['img'] !='') { echo $qq['img']; }else{ echo 'img_not_delete/dummy.png';}?>" class="img-circle">
								<p>
									Name : <?php echo $qq['name'];?>
									<small>User Id : <?php echo $qq['user_id']; ?></small>
								</p>
							</li>
							<li class="user-footer">
								<div class="pull-left">
									<a href="../home/profile.php" class="btn btn-default btn-flat bg-green">Profile</a>
								</div>
								<div class="pull-right">
									<a href="../logout.php" class="btn btn-default btn-flat bg-blue" style="">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div> 
		</nav>
	</header>
	<aside class="main-sidebar">
		<section class="sidebar">
			<div class="user-panel">
				<div class="pull-left image">
					<img src="../img/<?php if($qq['img'] !='') { echo $qq['img']; }else{ echo 'img_not_delete/dummy.png';}?>" class="img-circle" alt="User Image" style="max-width: ;height:;">
				</div>
				<div class="pull-left info">
					<p><?php echo $qq['name'];?></p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			  </div>
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<?php
				$a = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
				$b = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
				$c = $_SERVER['SERVER_NAME'];
				 ?>
					<li <?php if( $a == $b.'/dashboard.php' ){ echo "class='active'"; }?>>
						<a href="../home/dashboard.php">
							<i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/profile.php' ){ echo "class='active'"; }?>>
						<a href="../home/profile.php">
							<i class="fa fa-user" aria-hidden="true"></i> <span>Profile</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					
					<li class="<?php if( $b == $c.'/admin/staff' ){ echo "active"; }?> treeview">
						<a href="#">	
							<i class="fa fa-folder"></i> <span>Staff | Customer</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<?php
							if($qq['role'] == 'admin')
							{
							?>
							<li <?php if( $a == $b.'/addstaff.php' ){ echo "class='active'"; }?>><a href="../staff/addstaff.php"><i class="fa fa-circle-o"></i>Add Staff</a></li>
							<?php
							}?>
							<li <?php if( $a == $b.'/addcustomer.php' ){ echo "class='active'"; }?>><a href="../staff/addcustomer.php"><i class="fa fa-circle-o"></i>Add Customer</a></li>
							<li <?php if( $a == $b.'/managecustomer.php' ){ echo "class='active'"; }?>><a href="../staff/managecustomer.php"><i class="fa fa-circle-o"></i>Manage Customer</a></li>
							<li <?php if( $a == $b.'/reminder.php' ){ echo "class='active'"; }?>><a href="../staff/reminder.php"><i class="fa fa-circle-o"></i>Reminder</a></li>
						</ul>
					</li>
					<?php
					if($qq['role'] == 'admin')
					{
					?>
					<li <?php if( $a == $b.'/news.php' ){ echo "class='active'"; }?>>
						<a href="../home/news.php">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i> <span>News</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/bannerslider.php' ){ echo "class='active'"; }?>>
						<a href="../home/bannerslider.php">
							<i class="fa fa-sliders" aria-hidden="true"></i> <span>Banner Slider</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/ourproduct.php' ){ echo "class='active'"; }?>>
						<a href="../product/ourproduct.php">
							<i class="fa fa-product-hunt" aria-hidden="true"></i> <span>Our Product</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/services.php' ){ echo "class='active'"; }?>>
						<a href="../home/services.php">
							<i class="fa fa-wrench" aria-hidden="true"></i> <span>Services</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/tutorial.php' ){ echo "class='active'"; }?>>
						<a href="../home/tutorial.php">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Tutorial Point</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/reseller.php' ){ echo "class='active'"; }?>>
						<a href="../home/reseller.php">
							<i class="fa fa-exchange" aria-hidden="true"></i> <span>Reseller</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/contact.php' ){ echo "class='active'"; }?>>
						<a href="../home/contact.php">
							<i class="fa fa-address-card" aria-hidden="true"></i> <span>Contact</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/support.php' ){ echo "class='active'"; }?>>
						<a href="../product/support.php">
							<i class="fa fa-support" aria-hidden="true"></i> <span>Support</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/getresume.php' ){ echo "class='active'"; }?>>
						<a href="../home/getresume.php">
							<i class="fa fa-file" aria-hidden="true"></i> <span>Apply For Job</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<li <?php if( $a == $b.'/officetime.php' ){ echo "class='active'"; }?>>
						<a href="../home/officetime.php">
							<i class="fa fa-building-o" aria-hidden="true"></i> <span>Office Timing</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
					<?php
					}?>
					<li>
						<a href="../logout.php">	
							<i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-green"></small>
							</span>
						</a>
					</li>
				
			</ul>
		</section>
	</aside>
 