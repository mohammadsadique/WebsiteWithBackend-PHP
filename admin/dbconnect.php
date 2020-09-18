<?php
$host = "localhost";
$user = "root";
$pass = "mysql";
$db = "tcsoftware";
$conn = mysqli_connect($host,$user,$pass) or die ("db error new");
mysqli_select_db($conn,$db);
?>