<?php

$date=$_GET['date'];

$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
$seldt=mysqli_query($con,"select * from sale where date='".$date."'");
if(mysqli_fetch_row($seldt)>0){
	echo "Data already Exists in this date.";
}
?>