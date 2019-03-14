<?php
require_once("connect.php");
$available_id=$_GET['available_id'];
mysqli_query($con,"update available set status='1' where available_id='".$available_id."'");
header("location:view-available.php");


?>