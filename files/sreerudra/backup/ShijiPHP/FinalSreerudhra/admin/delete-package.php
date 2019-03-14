<?php
require_once("connect.php");
$package_id=$_GET['package_id'];
mysqli_query($con,"update package set status='1' where package_id='".$package_id."'");
header("location:view-package.php");


?>