<?php

	require_once("connect.php");
	$username=$_POST["username"];
	$query_select=mysqli_query($con,"select * from login where username='".$username."'");
	if(mysqli_fetch_row($query_select)>0){
		$msg="error";
			$data = array(
					"msg"      => $msg
				);
				echo json_encode($data);
	}else{
		$msg="success";
			$data = array(
					"msg"      => $msg
				);
				echo json_encode($data);
	}
	
	?>