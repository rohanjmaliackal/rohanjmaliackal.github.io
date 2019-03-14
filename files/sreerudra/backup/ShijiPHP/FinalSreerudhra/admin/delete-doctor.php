<?php
require_once("connect.php");
$doctor_id=$_GET['doctor_id'];
mysqli_query($con,"update doctor set status='1' where doctor_id='".$doctor_id."'");
header("location:view-doctor.php");


?>