<?php
require_once("connect.php");
$booking_id=$_GET['booking_id'];
mysqli_query($con,"update booking set status='1',st='deleted',stat='user' where booking_id='".$booking_id."'");
//mysqli_query($con,"update tocken set status='free' where booking_id='".$booking_id."'");
header("location:view-booking.php");


?>