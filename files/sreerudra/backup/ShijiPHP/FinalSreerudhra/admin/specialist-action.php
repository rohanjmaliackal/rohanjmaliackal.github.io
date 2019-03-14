<?php

		require_once("connect.php");
		$specialist=$_POST['specialist'];	
		
		mysqli_query($con,"INSERT INTO specialist(specialist) VALUES ('".$specialist."')");
		header("location:specialist.php?msg=success");
		
?>