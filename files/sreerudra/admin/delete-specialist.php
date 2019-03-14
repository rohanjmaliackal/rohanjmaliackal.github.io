<?php
require_once("connect.php");
$specialist_id=$_GET['specialist_id'];
mysqli_query($con,"update specialist set status='1' where specialist_id='".$specialist_id."'");
header("location:specialist.php");


?>