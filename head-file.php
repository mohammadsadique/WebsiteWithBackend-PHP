<?php include('admin/dbconnect.php'); 
    $headerP = "SELECT * FROM `tc_contact`";
    $headerPT = mysqli_query($conn,$headerP);
    $headerPTQ = mysqli_fetch_array($headerPT);
?>

<!DOCTYPE html>

<html class="csstransforms csstransforms3d csstransitions">
<head>
<title>TC Software</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<meta name="description" content="My ERP Software: Business ERP Software’s For Supermarkets India  Schools management software India
    Hotels management software India  Restaurant management software India  Garment management software India  Footwear management  software India Pharmacy management  software India  Clinical Labs, Dairy,
    Library management software India  Colleges management  software India  Institutes management  software  software India  India  Fruit Market, Finance Companies
    and more" />
<meta name="keywords" content="My ERP, ERP Software’s, Supermarkets Software, Barcode Software, Schools Management Software, Education ERP Software, College Management Software, Institute Management Software, Multi Branch Software, Garment Shop Software, Apparels Shop Software, Footwear Shop Software, Pharmacy software, Chemist Shop Software, Medical Shop Software, Medicine Shop Software, Clinical Labs Software, Pathology Labs Software, Diagnostic Centers Software, X-Ray Center Software, Sonography Software, Hotel Management Software,  Restaurants Software, KOT Management Software, Room Booking Software, Online Hotel Software, Free Software, Best Accounting Software, Cheap Accounting Software, Milk Dairy Software, Milk Software, Chilling Plant Software, Library Software, Drycleaners Software, Laundry Software, Tag Printing Software, Best Software, Management Software, Accounting Software, Billing Software, VAT Software, GST Software, TAX Software, Service Tax Software, Income Tax Software, TDS Software, Fruit Market Software, Vegetable Market Software, Finance Companies Software, NBFC Software, Non Banking Finance Companies Software, Retail Chemists Software, Retail Software, Stock Management Software, Inventory Management Software, Business Management Software, Expiry Management Software, Cheque Printing Software, Vegetable Market Software, Fish Market Software, Flower Market Software, Apple Software, Tally Software, Busy Software, Marg Software’s, Cafe Management Software, Easy Software, Online Billing Software, Online Accounting Software, Mobile App, My Shop app, Pesticides Shop Software, Fertilizers Software, CCTV Camera Software, Computer Shop Software, Book Shop Software, Stationary Shop Software, ERP Software’s in India  Supermarkets Software India  Barcode Software India  Schools Management Software India  Education ERP Software India  College Management Software India  Institute Management Software INDIA  Multi Branch Software India  Garment Shop Software India  Apparels Shop Software India  Footwear Shop Software India Pharmacy software India  Chemist Shop Software India  Medical Shop Software India  Medicine Shop Software India  Clinical Labs Software India  Pathology Labs Software India  Diagnostic Centers Software India  X-Ray Center Software India Sonography Software India  Hotel Management Software India   Restaurants Software India  KOT Management Software India  Room Booking Software India  Online Hotel Software India  Free Software India  Best Accounting Software India  Cheap Accounting Software India  Milk Dairy Software India  Milk Software India  Chilling Plant Software India  Library Software India  Drycleaners Software India  Laundry Software India  Tag Printing Software India  Best Software India  Church Management Software India  Courier Agency Software India  Accounting Software India  Billing Software India  VAT Software India  GST Software India  TAX Software India  Service Tax Software India  Income Tax Software India  TDS Software India  Fruit Market Software India  Vegetable Market Software India  Finance Companies Software India  NBFC Software India  Non Banking Finance Companies Software India  Retail Chemists Software India  Retail Software India  Stock Management Software India  Inventory Management Software India  Business Management Software India  Expiry Management Software India  Cheque Printing Software India  Vegetable Market Software India  Fish Market Software India  Flower Market Software India  Apple Software India  Tally Software India  Busy Software India  Marg Software India  Cafe Management Software India  Easy Software India  Online Billing Software India  Online Accounting Software India  Mobile App India  My Shop app India  Pesticides Shop Software India  Fertilizers Software India  CCTV Camera Software India  Computer Shop Software India  Book Shop Software India  Stationary Shop Software India " />
    

<!-- <link rel="shortcut icon" type="images/x-icon" href="images/favicon1.ico"> -->

<link rel="icon" type="image/ico" href="images/small-logo.png" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Animate css -->
<link href="css/animate.css" rel="stylesheet" type="text/css">
<!-- REVOLUTION SLIDER -->
<link rel="stylesheet" type="text/css" href="js/revolutionslider/rs-plugin/css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="js/revolutionslider/css/slider_main.css" media="screen" />

<!-- BUTTON Hover color -->
<link href="css/hover.css" rel="stylesheet" media="all">

<link href="css/responsive.css" rel="stylesheet">

<!-- Price css -->
 <link rel="stylesheet" href="css/price.css">
<!--  -->


<!-- testimonial css -->
 <link rel="stylesheet" href="css/testimonial.css">
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css'>
<!--  -->

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700italic,700,600italic,600,400italic,300italic,300|Roboto:100,300,400,500,700&amp;subset=latin,latin-ext' type='text/css' />






</head>



<!-- disable Ctrl+u -->
<script>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};
$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});
</script>
<!-- //Disable Ctrl+U -->


