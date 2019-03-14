<?php

	require_once("connect.php");
	$booking_id=$_POST["id"];
	$query_select=mysqli_query($con,"update booking set st='completed' where booking_id='".$booking_id."'");
	$msg="success";
			$data = array(
					"msg"      => $msg
				);
				echo json_encode($data);
	
	
	?>