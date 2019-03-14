<?php
require_once("connect.php");
$leave_id=$_GET['leave_id'];
mysqli_query($con,"update leaves set status='1' where leave_id='".$leave_id."'");
header("location:view-leave.php");


?>